<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public $primaryKey = 'id_supplier';

    protected $fillable = [
    	'name', 'address', 'phone', 'email'
    ];
}
