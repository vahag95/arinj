<?php

namespace Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\OpenLessonService;

class OpenLessonsController extends Controller
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
    public function index( OpenLessonService $openLessonsService )
    {        
        $lessons = $openLessonsService->getAllLessons();        
        return view('admin.openLessons.index', ['lessons' => $lessons]);
    }

    public function create()
    {
        return view('admin.openLessons.create');
    }

    public function store( OpenLessonService $openLessonsService, Request $request )
    {
        if(null!== $openLessonsService->create($request->all())){
            return redirect('/open-lessons')->with('success', 'Հաջողությամբ ավելացված է');
        }
        return redirect()->back()->withError('Ինչ որ բան այն չէ, խնդրում ենք կրկին փորձեք');
        // if(null!== $announcement = $eventservice->create($request->all())){
        //     return redirect('/events/'.$announcement->id.'/edit')->with('success', 'Հայտարարությունը հաջողությամբ ավելացված է');
        // }
    }

    public function edit( $id, OpenLessonService $openLessonsService )
    {
        // $announcement = $eventservice->getAnnouncementById( $id );
        // return view('admin.events.edit', ['announcement' => $announcement]);
    }

    public function destroy($id, OpenLessonService $openLessonsService)
    {
        if($openLessonsService->delete($id)){
            return redirect()->back()->with('success', 'Հաջողությամբ ջնջված է');
        }
        return redirect()->back()->withError('Ինչ որ բան այն չէ, խնդրում ենք կրկին փորձեք');
    }
}
