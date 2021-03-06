<?php

namespace Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\MembersService;
use App\Services\TeacherService;
use App\Http\AmazonApi;

class MembersController extends Controller
{
    /**
     * Create a new home controller instance.
     *
     * @return void
     */
    public function __construct(MembersService $memberService, AmazonApi $amazonApi,TeacherService $teacherService)
    {
        $this->middleware('auth');
        app()->setLocale('arm');
        $this->memberService = $memberService;
        $this->teacherService = $teacherService;
        $this->amazonApi = $amazonApi;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $members = $this->memberService->getAllMembers();               
        return view('admin.members.index', ['members' => $members]);
    }

    public function edit($id)
    {
        $member = $this->memberService->getMemberById($id);
        return view('admin.members.edit', ['member' => $member]);
    }

    public function update($id, Request $request)
    {
        if(isset($request->image)){
            $destinationPath = 'images/members'; // upload path
            $extension = $request->image->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renameing image
            $request->image->move($destinationPath, $fileName);            
            $this->amazonApi->delete($request->old_image_url);
            $name = $this->amazonApi->store('members/'.$fileName, $destinationPath.'/'.$fileName)->get('ObjectURL');
            $this->memberService->update($id, ['image' => 'members/'.$fileName]);            
            \File::delete($destinationPath.'/'.$fileName);      
        }
        return redirect()->back()->with('success', 'Փոփոխությունները կատարված են');
    }
}
