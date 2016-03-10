<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['first_name', 'last_name', 'image', 'subject_id'];

    public function subject()
    {
    	return $this->hasOne('App\Models\Subject', 'id', 'subject_id');
    }
}
