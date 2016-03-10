<?php

namespace Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\TeacherService;
use App\Services\SubjectService;

class TeachersController extends Controller
{
    /**
     * Create a new home controller instance.
     *
     * @return void
     */
    public function __construct(TeacherService $teacherService, SubjectService $subjectsService)
    {
        $this->middleware('auth');        
        $this->teacherService = $teacherService;
        $this->subjectsService = $subjectsService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $teachers = $this->teacherService->getAllTeachers();        
        return view('admin.teachers.index', ['teachers' => $teachers]);
    }

    public function create()
    {
        $subjects = $this->subjectsService->getAllSubjectsNameIdLists();
        return view('admin.teachers.create', [ 'subjects' => $subjects ]);
    }

    public function store(Request $request)
    {
        $inputs = $request->all();        
        if(isset($request->image)){
            $destinationPath = 'images/teachers'; // upload path
            $extension = $request->image->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renameing image
            $request->image->move($destinationPath, $fileName);            
            $inputs['image'] = $fileName;
        }
        if( null!== $teacher = $this->teacherService->create( $inputs ) ){
            return redirect("/teachers/$teacher->id/edit");
        }
    }
    public function edit($id)
    {
        $teacher = $this->teacherService->getTeacherById( $id );
        $subjects = $this->subjectsService->getAllSubjectsNameIdLists();
        return view('admin.teachers.edit', ['teacher' => $teacher, 'subjects' => $subjects]);
    }

    public function update($id, Request $request)
    {
        $inputs = $request->all();
        if(isset($request->image)){
            $destinationPath = 'images/teachers'; // upload path
            $extension = $request->image->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renameing image
            $request->image->move($destinationPath, $fileName);            
            $inputs['image'] = $fileName;
        }        
        if(null!== $this->teacherService->update($id, $inputs) ){
            return redirect()->back()->with('success', 'asdasdad');
        }
    }
}