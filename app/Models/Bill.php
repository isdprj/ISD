<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";
    use HasFactory;
    public function billDetail(){
        return $this -> hasMany('App\BillDetail', 'id_bill', 'id');
    }
    public function bill(){
        return $this -> belongsTo('App\Bill', 'id_bill', 'id');
    }
}
