<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_selling extends Model
{
    public $primaryKey = 'id_selling';

    public $incrementing = false;

    protected $table = 'detail_selling';

    protected $fillable = [
    	'id_product', 'quantity', 'price'
    ];

    public function product(){
    	return $this->hasOne('product', 'id_product', 'id_product');
    }
}
