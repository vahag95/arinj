<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\AchivementService;

class AchivementsController extends Controller
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

    public function show($type, AchivementService $achievementService)
    {
        $achievement = $achievementService->getAchievementByKey($type);
        return view('achievements.'.$type, ['achievement' => $achievement, 'type' => $type]);
    }

    // public function getUniversity()    
    // {
    //     return view('achievements.');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getHistory()
    {        
        return view('about.history');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSchool($type)
    {
        return view("about.schools.show", ['type' => $type]);
    }

}
