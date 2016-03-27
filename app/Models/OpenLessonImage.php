<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpenLessonImage extends Model
{
    protected $fillable = ['open_lesson_id', 'image_url'];
}