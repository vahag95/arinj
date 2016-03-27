<?php

namespace Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\AchivementService;

class AchievementsController extends Controller
{
    /**
     * Create a new home controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        app()->setLocale('arm');        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        
    }

    public function getUniversity(AchivementService $achievementService)
    {
        $title = 'Բուհ ընդունելություններ';
        $data = $achievementService->getAchievementByKey('university');
        return view('admin.achievements.show', ['title' => $title, 'data' => $data, 'type' => 'university']);
    }

    public function getEditUniversity(AchivementService $achievementService)
    {
        $title = 'Բուհ ընդունելություններ';
        $data = $achievementService->getAchievementByKey('university');
        return view('admin.achievements.edit', ['title' => $title, 'data' => $data, 'type' => 'university']);
    }

    public function postUpdateUniversity(Request $request, AchivementService $achievementService)
    {        
        if($achievementService->update('university', $request->all())){
            return redirect()->back()->with('success', 'Հաջողությամբ խահպանված է');
        }
        
    }

    public function getCompetition(AchivementService $achievementService)
    {
        $title = 'Մրցույթներ';
        $data = $achievementService->getAchievementByKey('competition');
        return view('admin.achievements.show', ['title' => $title, 'data' => $data, 'type' => 'competition']);
    }

    public function getEditCompetition(AchivementService $achievementService)
    {
        $title = 'Մրցույթներ';
        $data = $achievementService->getAchievementByKey('competition');
        return view('admin.achievements.edit', ['title' => $title, 'data' => $data, 'type' => 'competition']);
    }

    public function postUpdateCompetition(Request $request, AchivementService $achievementService)
    {        
        if($achievementService->update('competition', $request->all())){
            return redirect()->back()->with('success', 'Հաջողությամբ խահպանված է');
        }
        
    }

    public function getOlimp(AchivementService $achievementService)
    {
        $title = 'Օլիմպիադաներ';
        $data = $achievementService->getAchievementByKey('olimp');
        return view('admin.achievements.show',['title' => $title, 'data' => $data, 'type' => 'olimp']);
    }

    public function getEditOlimp(AchivementService $achievementService)
    {
        $title = 'Օլիմպիադաներ';
        $data = $achievementService->getAchievementByKey('olimp');
        return view('admin.achievements.edit', ['title' => $title, 'data' => $data, 'type' => 'olimp']);
    }

    public function postUpdateOlimp(Request $request, AchivementService $achievementService)
    {        
        if($achievementService->update('olimp', $request->all())){
            return redirect()->back()->with('success', 'Հաջողությամբ խահպանված է');
        }
        
    }
}
