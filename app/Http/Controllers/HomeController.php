<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\MembersService;
use App\Services\EventService;
use App\Services\TourService;
use App\Services\OpenLessonService;

class HomeController extends Controller
{
    /**
     * Create a new home controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        app()->setLocale('arm');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MembersService $membersService, EventService $eventService, TourService $tourservice, OpenLessonService $openLessonService)
    {    	
        app()->setLocale('arm');
    	$members = $membersService->getAllMembers();
        $events  = $eventService->getLastSix();
        $openLessons = $openLessonService->getLastSix();        
        $tours = $tourservice->getLastTwo();
        $gallery_tours = [];
        $gallery_events = [];
        $gallery_open_lessons = [];
        foreach($tours as $tour){
            $gallery_tours = array_merge($gallery_tours, $tour->images()->take(3)->lists('image_url')->toArray());            
        }        
        foreach ($events as $event) {            
            array_push($gallery_events, $event->images()->first()->image_url);
        }
        foreach ($openLessons as $lesson) {            
            array_push($gallery_open_lessons, $lesson->images()->first()->image_url);
        }        
        return view('home.index', ['members' => $members, 'events' => $events, 'gallery_tours' => $gallery_tours, 'gallery_open_lessons' => $gallery_open_lessons, 'gallery_events' => $gallery_events]);
    }
}
