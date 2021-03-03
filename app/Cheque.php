<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cheque extends Model
{
    public function user(){
    	return $this->belongsTo(User::class);
    	//1 cheque pertence a 1 usuario
    }
}
