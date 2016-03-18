<?php

namespace Admin\Http\Controllers;

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

    public function index(TourService $tourService)
    {
        $tours = $tourService->getAllTours();
        return view('admin.tours.index', ['tours' => $tours]);
    }

    public function create()
    {
        return view('admin.tours.create');
    }

    public function store(Request $request, TourService $tourService)
    {
        $tourService->create($request->all());
        return ;
    }

    public function destroy($id, TourService $tourService)
    {
        if( $tourService->delete($id) ){
            return redirect()->bacK()->with('success', 'Հաջողությամբ ջնջված է');
        }
        // return $id;
    }
}
