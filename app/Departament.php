<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
	protected $table = 'departaments';

    public function cities()
    {
    	return $this->hasMany(City::class);
    }
}
