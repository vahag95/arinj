<?php

namespace App\Services;
use App\Models\Member;

class MembersService {
	/**
	 * Create a new center service instance.
	 */
	public function __construct(Member $member) {
		$this->member = $member;
	}

	public function getAllMembers()
	{
		return $this->member->get();
	}

	public function getMembersWithRole($role)
	{
		return $this->member->where('role', $role)->get();
	}

	public function getMemberById($id)
	{
		return $this->member->find($id);
	}

	public function create($inputs)
	{
		return $this->member->create($inputs);
	}

	public function update($id, $inputs)
	{
		return $this->getMemberById( $id )->update( $inputs );
	}
}