<?php

namespace App\Http\Controllers;

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
        app()->setLocale('arm');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( AnnouncementService $announcementService )
    {        
    	$announcements = $announcementService->getAllAnnouncements();
        return view('announcements.index', ['announcements' => $announcements]);
    }

    public function show($id, AnnouncementService $announcementService)
    {
    	$announcement = $announcementService->getAnnouncementById($id);
    	return view('announcements.show', ['announcement' => $announcement]);
    }
}
