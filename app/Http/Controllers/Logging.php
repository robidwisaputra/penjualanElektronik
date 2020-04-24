<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Logging extends Controller
{
    public $table = 'logging';

    protected $fillable = [
    	'statement', 'time'
    ];
}
