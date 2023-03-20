<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    use HasFactory;

    public function productCategory(){
        return $this -> belongsTo('App\ProductCategory','id_category','id');
    }
    
    public function billDetail(){
        return $this -> hasMany('App\BillDetail', 'id_product', 'id');
    }
}
