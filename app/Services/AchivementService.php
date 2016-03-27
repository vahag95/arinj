<?php

namespace App\Services;
use App\Models\Achievement;

class AchivementService {
	/**
	 * Create a new center service instance.
	 */
	public function __construct(Achievement $achievement) {
		$this->achievement = $achievement;
	}

	public function getAchievementByKey($key)
	{
		return $this->achievement->where('key', $key)->first();
	}

	public function update($key,$inputs)
	{		
		$inputs = [			
			'value' => $inputs['value'],
		];		
		return $this->achievement->where('key', $key)->update($inputs);
	}
}