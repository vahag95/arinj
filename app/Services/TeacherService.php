<?php

namespace App\Services;
use App\Models\Teacher;

class TeacherService {
	/**
	 * Create a new center service instance.
	 */
	public function __construct(Teacher $teacher) {
		$this->teacher = $teacher;
	}

	public function getAllteachers()
	{
		return $this->teacher->get();
	}

	public function getTeacherById($id)
	{
		return $this->teacher->find($id);
	}

	public function create($inputs)
	{
		return $this->teacher->create($inputs);
	}

	public function update($id, $inputs)
	{
		return $this->getTeacherById($id)->update($inputs);
	}
}