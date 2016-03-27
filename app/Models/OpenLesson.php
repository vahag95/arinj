<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpenLesson extends Model
{
    protected $fillable = ['title', 'description', 'date', 'images_folder'];

    public function images()
    {
    	return $this->HasMany('App\Models\OpenLessonImage');
    }
}
