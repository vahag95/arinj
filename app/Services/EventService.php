<?php

namespace App\Services;
use App\Models\Event;
use App\Models\EventImage;
use App\Http\AmazonApi;

class EventService {
	/**
	 * Create a new center service instance.
	 */
	public function __construct(Event $event, EventImage $eventImage, AmazonApi $amazonApi) {
		$this->event = $event;
		$this->eventImage = $eventImage;
		$this->amazonApi = $amazonApi;
	}

	public function getAllEvents()
	{
		return $this->event->get();
	}

	public function getEventById($id)
	{
		return $this->event->find( $id );
	}	

	public function update($id, $inputs)
	{		
		return $this->event->find($id)->update($inputs);
	}

	public function create($inputs)
	{	    
	    if($inputs['images'][0] !== null){
	    	$files = [];
	    	$folder_name = str_random(8);
	    	$inputs['images_folder'] = $folder_name;
	    	if(\File::makeDirectory('images/tmp/'.$folder_name)){
		    	foreach ($inputs['images'] as $image) {
		    		$extension = $image->getClientOriginalExtension();
		    		$fileName = rand(11111,99999).'.'.$extension;
		    		$files[] = $fileName;
		   			$image->move('images/tmp/'.$folder_name, $fileName);
		    	}	    	
		    	$this->amazonApi->uploadDirectory(public_path().'/images/tmp/'.$folder_name, '/events/'.$folder_name);
				if(\File::deleteDirectory('images/tmp/'.$folder_name)){
					if(null!== $event = $this->event->create($inputs)){
						foreach($files as $file){
							$this->eventImage->create(['event_id' => $event->id, 'image_url' => '/events/'.$folder_name.'/'.$file]);							
						}						
					}
				}
	    	}
	    }else{
	    	$event = $this->event->create($inputs);
	    }
	    return $event;
	}

	public function delete($id)
	{
		$event = $this->event->find($id);
		if( $event->images()->count() > 0 ){			
			$event->images()->delete();
			$this->amazonApi->deleteDirectory('/events/'.$event->images_folder);
		}
		return $event->delete();
	}
}