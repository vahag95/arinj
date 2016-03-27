<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\OpenLessonService;

class OpenLessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( OpenLessonService $openLessonsService )
    {        
        $lessons = $openLessonsService->getAllLessons();        
        return view('openLessons.index', ['lessons' => $lessons]);
    }

    public function show($id, OpenLessonService $openLessonsService)
    {
        $lesson = $openLessonsService->getLessonById($id);
        $image_urls = $lesson->images()->lists('image_url');
        return view('openLessons.show', ['lesson' => $lesson, 'image_urls' => $image_urls]);
    }
}
