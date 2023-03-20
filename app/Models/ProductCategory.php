<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = "product_categories";
    use HasFactory;
    public function product(){
        return $this->hasMany('App\Product', 'id_category', 'id');
    }

    
}
