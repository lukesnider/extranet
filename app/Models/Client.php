<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function emails()
    {
        return $this->hasMany('App\Models\ClientEmailAddress', 'client_id', 'id');
    }
	
}
