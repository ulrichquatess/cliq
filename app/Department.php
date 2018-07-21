<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

    public function volums(){  
        
        return $this->hasMany('App\Volum');
	}

}
