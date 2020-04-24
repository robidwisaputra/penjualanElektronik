<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $primaryKey = 'id_member';

    protected $fillable = [
    	'name', 'gender', 'address', 'phone', 'email' 	
    ];
}
