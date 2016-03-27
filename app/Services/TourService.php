<?php

namespace App\Services;
use App\Models\Tour;
use App\Models\TourImage;
use App\Http\AmazonApi;

class TourService {
	/**
	 * Create a new center service instance.
	 */
	public function __construct(Tour $tour, TourImage $tourImage, AmazonApi $amazonApi) {
		$this->tour = $tour;
		$this->tourImage = $tourImage;
		$this->amazonApi = $amazonApi;
	}

	public function getAllTours()
	{
		return $this->tour->get();
	}

	public function getEventById($id)
	{
		return $this->tour->find( $id );
	}	

	public function update($id, $inputs)
	{		
		return $this->tour->find($id)->update($inputs);
	}

	public function getLastTwo()
	{
		return $this->tour->orderBy('created_at', 'desc')->take(2)->get();
	}

	public function create($inputs)
	{	    	    	    
        if($inputs['images'][0] !== null){
        	$files = [];	    	    
        	foreach ($inputs['images'] as $image) {
        		$destinationPath = 'tmp';
        		$extension = $image->getClientOriginalExtension();
        		$fileName = rand(11111,99999).'.'.$extension;
        		$files[] = $fileName;
        		$image->move($destinationPath, $fileName);
        		$this->amazonApi->store('tours/'.$fileName, $destinationPath.'/'.$fileName);
        		\File::delete($destinationPath.'/'.$fileName);
        	}		    	
    		if(null!== $tour = $this->tour->create($inputs)){
    			foreach($files as $file){
    				$this->tourImage->create(['tour_id' => $tour->id, 'image_url' => '/tours/'.$file]);
    			}						
    		}					    
        }else{
        	$tour = $this->tour->create($inputs);
        }
        return $tour;
	}

	public function delete($id)
	{
		$tour = $this->tour->find($id);
		if( $tour->images->count() > 0 ){
			dd( $tour->images->count() );
			$tour->images->delete();
			dd( $this->amazonApi->deleteDirectory('/tours/'.$tour->images_folder) );
		}
		return $tour->delete();
	}
}