<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\MembersService;
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
    public function index(MembersService $membersService)
    {    	
        app()->setLocale('arm');
    	$members = $membersService->getAllMembers();
        return view('home.index', ['members' => $members]);
    }
}
