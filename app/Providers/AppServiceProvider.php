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
        view()->composer('header', function($view){
            $shoeType = ProductCategory::get()->sortBy('id')->take(5);
            $ultiType = ProductCategory::get()->sortByDesc('id')->take(5);
            $view->with([
                'shoeType' => $shoeType,
                'ultiType' => $ultiType
            ]);
        });
        view()->composer('header',function($view){
            if(Session('cart')){
                $oldCart = session()->get('cart');
                $cart = new Cart($oldCart);
                $view->with([
                'cart'=>session()->get('cart'),
                'product_cart'=>$cart->items,
                'totalPrice'=>$cart->totalPrc,
                'totalQty'=>$cart->totalQty]);
            }
        });        
    }
}
