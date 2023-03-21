<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        return view('page.home');
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
}


