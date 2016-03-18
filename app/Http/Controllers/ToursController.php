<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\TourService;

class ToursController extends Controller
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

    public function getIndex(TourService $tourService)    
    {
        $tours = $tourService->getAllTours();
        return view('tours.index', ['tours' => $tours]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDirector()
    {        
        $members = $this->memberService->getMembersWithRole( 'director' );
        return view('members.show', ['members' => $members, 'role' => 'director']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDeputyDirectors()
    {        
        $members = $this->memberService->getMembersWithRole( 'deputy_director' );
        return view('members.show', ['members' => $members, 'role' => 'deputy_directors']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLibrarian()
    {        
        $members = $this->memberService->getMembersWithRole( 'librarian' );
        return view('members.show', ['members' => $members, 'role' => 'librarian']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getNurse()
    {        
        $members = $this->memberService->getMembersWithRole( 'nurse' );
        return view('members.show', ['members' => $members, 'role' => 'nurse']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAccountant()
    {        
        $members = $this->memberService->getMembersWithRole( 'accountant' );
        return view('members.show', ['members' => $members, 'role' => 'accountant']);
    }    

    public function getSoldier()
    {
        $members = $this->memberService->getMembersWithRole( 'soldier' );
        return view('members.show', ['members' => $members, 'role' => 'soldier']);
    }
}
