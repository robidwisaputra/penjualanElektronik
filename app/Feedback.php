<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
   	public $primaryKey = 'id_feedback';

   	protected $table = 'feedback';

   	protected $fillable = [
   		'customer_name', 'email', 'feedback', 'rating'
   	];
}
