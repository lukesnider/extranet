<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function client()
    {
        return $this->hasOne('App\Models\Client', 'client_id', 'contact');
    }
	
}
