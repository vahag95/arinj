<?php

namespace Admin\Http\Controllers;

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
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( EventService $eventService )
    {        
        $events = $eventService->getAllEvents();
        return view('admin.events.index', ['events' => $events]);
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store( EventService $eventService, Request $request )
    {
        if(null!== $eventService->create($request->all())){
            return redirect('/events')->with('success', 'Հաջողությամբ ավելացված է');
        }
        return redirect()->back()->withError('Ինչ որ բան այն չէ, խնդրում ենք կրկին փորձեք');
        // if(null!== $announcement = $eventservice->create($request->all())){
        //     return redirect('/events/'.$announcement->id.'/edit')->with('success', 'Հայտարարությունը հաջողությամբ ավելացված է');
        // }
    }

    public function edit( $id, eventservice $eventservice )
    {
        // $announcement = $eventservice->getAnnouncementById( $id );
        // return view('admin.events.edit', ['announcement' => $announcement]);
    }

    public function destroy($id, eventservice $eventservice)
    {
        if($eventservice->delete($id)){
            return redirect()->back()->with('success', 'Հաջողությամբ ջնջված է');
        }
        return redirect()->back()->withError('Ինչ որ բան այն չէ, խնդրում ենք կրկին փորձեք');
    }
}
