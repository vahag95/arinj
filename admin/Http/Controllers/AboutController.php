<?php

namespace Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\AboutService;
class AboutController extends Controller
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

    public function showSchool(AboutService $aboutService, $type)
    {
    	$count = $aboutService->getAboutByKey($type.'_school_pupils_count');	
    	return view("admin.about.schools.show", ['count' => $count, 'title' => $type, 'key' => $type.'_school_pupils_count']);
    }

    public function updateSchool( $key, AboutService $aboutService, Request $request )
    {    	
    	if($aboutService->updateSchool($request->key, $request->only('value'))){
    		return redirect()->back()->with('success', 'Հաջողությամբ փոփոխված է');
    	}
    }
}
