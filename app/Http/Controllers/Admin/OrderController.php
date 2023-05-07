<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\BillDetail;
use Exception;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class OrderController extends Controller
{


    public function index()
    {
        $bills = Bill::get()->sortByDesc('date_oreder');
        $customers = DB::table('customers')
                        ->join('bills','bills.id_customer', '=', 'customers.id')
                        ->get();
        return view('admin.order.list', [
            'title' => 'Danh Sách Đơn Đặt Hàng',
            'bills' => $bills,
            'customers' => $customers
        ]);
    }

    public function show($id)
    {
        $title = 'Chi tiết đơn hàng';
        $details = BillDetail::where('id', $id)->first();
        $bills = DB::table('bills')->where('id',$id)->first();
        $detailProduct = DB::table('products')
                        ->join('bill_details','bill_details.id_product', '=', 'products.id')
                        ->where('bill_details.id_bill','=',$id)
                        ->get();
        $customers = DB::table('customers')
                        ->join('bills','bills.id_customer', '=', 'customers.id')
                        ->first();
        return view('admin.order.detail', compact('detailProduct','customers','details','title','bills'));
    }

    public function update(Request $req,$id){
        $bills = DB::table('bills')->join('bill_details','bill_details.id_bill','=','bills.id')
                                    ->where('bill_details.id','=',$id)
                                    ->get();
        try{
            $bills->fill($req->only('status','payment status'));
            $bills->update();
            Session::flash('success', 'Cập nhật thành công');
        }
        catch(Exception $e){
            Session::flash('error', 'Có lỗi vui lòng thử lại');
            Log::info($e->getMessage());
        }
        return redirect()->back();
    }
    
}