<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $title = 'Danh sách thông tin người dùng';
        $users = User::get()->sortBy('id');
        return view('admin.user.list',compact('users','title'));
    }

    public function show(){
        $title = 'Chỉnh sửa thông tin người dùng';
        $users = User::get()->sortBy('id');
        return view('admin.user.edit', compact('users','title'));
    }

    public function update(User $user){
        function updateUser($id)
            {       
                $user = User::find($id);
                $currentRole = $user->is_admin;
                $newRole = !$currentRole?1:0;
                try {
                    $user->update(['is_admin'=>$newRole]);
                    Session::flash('success', 'Cập nhật thành công');
                } catch (Exception $err) {
                    Session::flash('error', 'Có lỗi vui lòng thử lại');
                    Log::info($err->getMessage());
                    return false;
                }
                return true;
            }
        $result = $this->updateUser($user);
        if ($result) {
            return redirect('/admin/users/list');
        } else{
            return redirect()->back();
        }
    }
    public function destroy(Request $request)
    {
        function deleteUser($request)
        {
            $user = User::where('id', $request->input('id'))->first();
            if ($user) {
                $user->delete();
                return true;
            }
    
            return false;
        }
        $result = $this->deleteUser($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công người dùng'
            ]);
        }

        return response()->json([ 'error' => true ]);
    }
}

