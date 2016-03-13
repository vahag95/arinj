<?php

namespace App\Services;
use App\Models\Announcement;

class AnnouncementService {
	/**
	 * Create a new center service instance.
	 */
	public function __construct(Announcement $announcement) {
		$this->announcement = $announcement;
	}

	public function getAllAnnouncements()
	{
		return $this->announcement->get();
	}

	public function getAnnouncementById($id)
	{
		return $this->announcement->find($id);
	}

	public function create($inputs)
	{
		return $this->announcement->create($inputs);
	}

	public function update($id, $inputs)
	{
		return $this->getAnouncementById( $id )->update( $inputs );
	}
}