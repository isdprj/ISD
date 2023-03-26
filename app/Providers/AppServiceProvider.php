<?php

namespace App\Providers;

use App\Models\Cart;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Models\ProductCategory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // view()->composer('header', function($view){
        //     $prdCate = ProductCategory::all();
        // if(Session('cart')){
        //     $oldCart = Session::get('cart');
        //     $cart = new Cart($oldCart);
        // }
        //     $view->with(['cart'=>Session::get('cart'),
        //                  'product_cart'=>cart->items,
        //                  'totalPrice'=>$cart->totalPrc,
    //                      'totalQty'=>$cart->totalQty]);
        // });

            
    }
}
