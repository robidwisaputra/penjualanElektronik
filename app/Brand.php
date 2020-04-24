<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $primaryKey = 'id_brand';

    protected $fillable = ['brand'];
}
