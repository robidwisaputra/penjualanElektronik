<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $primaryKey = 'id_product';

    protected $fillable = [
    	'id_category', 'id_brand', 'name', 'model', 'guarantee', 'price', 'stock', 'image', 'description'
    ];

    public function category(){
    	return $this->hasOne('\App\Category', 'id_category', 'id_category');
    }

    public function brand(){
    	return $this->hasOne('\App\Brand', 'id_brand', 'id_brand');
    }
}
