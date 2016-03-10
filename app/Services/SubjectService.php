<?php

namespace App\Services;
use App\Models\Subject;

class SubjectService {
	/**
	 * Create a new center service instance.
	 */
	public function __construct(Subject $subject) {
		$this->subject = $subject;
	}

	public function getAllSubjects()
	{
		return $this->subject->get();
	}

	public function getAllSubjectsNameIdLists()
	{
		return $this->subject->lists('name', 'id');
	}	
}