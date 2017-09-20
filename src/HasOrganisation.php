<?php

namespace MattRink\Organiations;

trait HasOrganisation
{
	/**
	 * 
	 */
	public function organisation()
	{
		return $this->belongsTo('MattRink\Organiations\Models\Organiations');
	}
}