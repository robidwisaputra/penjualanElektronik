<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $primaryKey = 'id_review';

    protected $fillable = [
    	'email', 'phone', 'name', 'review', 'date', 'feedback'
    ];
}
