<?php

namespace App\Services;
use App\Models\OpenLesson;
use App\Models\OpenLessonImage;
use App\Http\AmazonApi;

class OpenLessonService {
	/**
	 * Create a new center service instance.
	 */
	public function __construct(OpenLesson $openLesson, OpenLessonImage $openLessonImage, AmazonApi $amazonApi) {
		$this->openLesson = $openLesson;
		$this->openLessonImage = $openLessonImage;
		$this->amazonApi = $amazonApi;
	}

	public function getAllLessons()
	{
		return $this->openLesson->get();
	}

	public function getLessonById($id)
	{
		return $this->openLesson->find( $id );
	}	

	public function getLastSix()
	{
		return $this->openLesson->take(6)->get();
	}

	public function update($id, $inputs)
	{		
		return $this->openLesson->find($id)->update($inputs);
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
	    		$this->amazonApi->store('open-lessons/'.$fileName, $destinationPath.'/'.$fileName);
	    		\File::delete($destinationPath.'/'.$fileName);
	    	}		    	
			if(null!== $openLesson = $this->openLesson->create($inputs)){
				foreach($files as $file){
					$this->openLessonImage->create(['open_lesson_id' => $openLesson->id, 'image_url' => '/open-lessons/'.$file]);
				}						
			}					    
	    }else{
	    	$openLesson = $this->openLesson->create($inputs);
	    }
	    return $openLesson;
	}

	public function delete($id)
	{
		$openLesson = $this->openLesson->find($id);
		if( $openLesson->images()->count() > 0 ){			
			$openLesson->images()->delete();			
		}
		return $openLesson->delete();
	}
}