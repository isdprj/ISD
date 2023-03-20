<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = "bill_details";
    use HasFactory;

    public function product(){
        return $this -> belongsTo('App\Product', 'id_product', 'id');
    }

    public function customer(){
        return $this -> belongsTo('App\Customer', 'id_customer', 'id');
    }
}
