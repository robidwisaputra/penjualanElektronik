<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logging extends Model
{
   public $table = 'logging';

    protected $fillable = [
    	'statement', 'time'
    ];
}
