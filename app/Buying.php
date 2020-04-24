<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buying extends Model
{
    public $primaryKey = 'id_buying';

    public $incrementing = false;

    protected $table = 'buying';

    protected $fillable = [
			'id_buying', 'date', 'id_employee', 'id_supplier', 'id_product', 'quantity', 'total'    	
    ];

    public function employee(){
    	return $this->hasOne('\App\Employee', 'id_employee', 'id_employee');
    }

    public function supplier(){
    	return $this->hasOne('\App\Supplier', 'id_supplier', 'id_product');
    }

    public function product(){
    	return $this->hasOne('\App\Product', 'id_product', 'id_product');
    }
}
