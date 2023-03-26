<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function getIndex(){
        $slider = Slider::all();
        $newProduct = Product::get()->sortByDesc('updated_at')->take(4);
        $saleProduct = Product::where('promotion_price','<>',0)->paginate(4);
        return view('page.home',compact('slider','newProduct','saleProduct'));
    }

    public function getProductCategory(){
        return view('page.product_categories');
    }

    public function getProduct(){
        return view('page.product');
    }

    public function getContact(){
        return view('page.contact');
    }

    public function getAbout(){
        return view('page.about');
    }
    public function getLogin(){
        return view('page.login');
    }
    public function getRegister(){
        return view('page.register');
    } 

    public function postRegister(Request $request){
        $this->validate($request,[
            'email' => 'required|email|unique:users,email',
            'fullname'=>'required',
            'password'=>'required|min:8',
            're_password' => 'required|same:password'
        ],[
            'email.required'=> 'Please type your email',
            'email.email' => 'Invalid email format',
            'email.unique' => 'Existed email',
            'password.required' => 'Please type your password',
            're_password.same' => 'Unmatched password',
            'password.min'=> 'Password must be longer than 8 characters'
        ]
    );
        $user = new User();
        $user->full_name = $request->fullname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone_number = $request->phone;
        $user->address = $request->address;
        $user->is_admin = false;
        $user->save();
        return redirect()->back()->with('echo', 'Account created successful');
    }
    public function postLogin(Request $request){
        $this->validate($request,
        [
            'email'=> 'required|email',
            'password' => 'required|min:8'
        ],
        [
            'email.required' => 'Please type your email',
            'email.email' => 'Invalid email format',
            'password.required' => 'Please type your email',
            'password.min' => 'Password must be longer than 8 characters'
        ]);
        $credentials = array('email' => $request ->email,
                             'password'=> $request -> password);
        if(Auth::attempt($credentials)){
            return redirect('index')->with(['flag' => 'success','message' => 'Successful logged in']);
        }
        else{
            return redirect()->back()->with(['flag' => 'danger', 'message' => 'Login failed']);
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect('index')->with('logoutMessage', 'You have logged out');
    }
}


