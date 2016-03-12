<?php

namespace App\Services;
use App\Models\About;

class AboutService {
	/**
	 * Create a new center service instance.
	 */
	public function __construct(About $about) {
		$this->about = $about;
	}

	public function getAll()
	{
		return $this->about->get();
	}

	public function getAboutByKey($key)
	{
		return $this->about->where('key', $key)->first()->value;
	}	

	public function updateSchool($key, $inputs)
	{		
		return $this->about->where( 'key', $key )->update($inputs);
	}
}