<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    use HasFactory;

    public function productCategory(){
        return $this -> belongsTo(ProductCategory::class,'id_category','id');
    }
    
    public function billDetail(){
        return $this -> hasMany(BillDetail::class, 'id_product', 'id');
    }
    public function favourite(){
        $cid = auth()->guard('customers')->user()!=null ? auth()->guard('customers')->user()->id : null;
        return $this -> hasMany(Favourite::class, 'id_product', 'id');
    }
}
