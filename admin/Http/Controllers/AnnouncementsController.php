<?php

namespace Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\AnnouncementService;

class AnnouncementsController extends Controller
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
    public function index( AnnouncementService $announcementService)
    {        
        $announcements = $announcementService->getAllAnnouncements();
        return view('admin.announcements.index', ['announcements' => $announcements]);
    }

    public function create()
    {
        return view('admin.announcements.create');
    }

    public function store( Request $request, AnnouncementService $announcementService )
    {
        if(null!== $announcement = $announcementService->create($request->all())){
            return redirect('/announcements/'.$announcement->id.'/edit')->with('success', 'Հայտարարությունը հաջողությամբ ավելացված է');
        }
    }

    public function edit( $id, AnnouncementService $announcementService )
    {
        $announcement = $announcementService->getAnnouncementById( $id );
        return view('admin.announcements.edit', ['announcement' => $announcement]);
    }
}
