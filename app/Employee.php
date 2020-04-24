<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $primaryKey = 'id_employee';

    protected $fillable = [
    	'name', 'gender', 'phone', 'address'
    ];
}
