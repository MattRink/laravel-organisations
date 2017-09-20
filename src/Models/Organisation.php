<?php

namespace MattRink\Organisations\Models;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    protected $fillable = ['name'];

	/**
	 * 
	 */
	public function users()
	{
		return $this->hasMany('App\User');
	}
}