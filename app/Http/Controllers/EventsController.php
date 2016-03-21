<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\EventService;
class EventsController extends Controller
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
    public function index(EventService $eventService)
    {        
    	$events = $eventService->getAllEvents();
        return view('events.index', ['events' => $events]);
    }

    public function show($id, EventService $eventService)
    {
    	$event = $eventService->getEventById($id);
        $image_urls = $event->images()->lists('image_url')->toArray();
    	return view('events.show', ['event' => $event, 'image_urls' => $image_urls]);
    }
}
