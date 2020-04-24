<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Selling extends Model
{
    public $primaryKey = 'id_selling';

    public $incrementing = false;

    protected $table = 'selling';

    protected $fillable = [
    	'id_selling', 'date', 'id_employee', 'id_member'
    ];

    public function employee(){
    	return $this->hasOne('\App\employee', 'id_employee', 'id_employee');
    }

    public function member(){
    	return $this->hasOne('\App\member', 'id_member', 'id_member');
    }
}
