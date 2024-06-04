<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Backend\BackendBaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\ProgramLevel;
use App\Models\ProgramDuration;
use Illuminate\Support\Facades\Validator;



class ProgramController extends BackendBaseController
{
    protected $panel="program";
    protected $model;
    protected $base_view;
    protected $base_route;
    protected $folder;
    function __construct(){
        $this->model = new Program();
    }
   public function index()
   {
    $programlevel= Programlevel::where('status',1)->orderBy('rank')->get();
    $programduration= ProgramDuration::where('status',1)->get();

    $data['records'] = $this->model->all();
    return view($this->__loadDataToView($this->base_view . 'add-program'),compact('data','programlevel','programduration'));
   }
   public function store(Request $request)
   {
    $validator = Validator::make($request->all(), [
        'title' => 'required|max:20', 
        'program_level' => 'required|not_in:0',
        'program_duration' => 'required|not_in:0',
        'short_title' => 'required|max:20'         
    ], [
        'program_level.required' => 'Program Level is required.',
        'program_level.not_in' => 'Please select a valid Program Level.', 
        'program_duration.required' => 'Program Duration is required.',
        'program_duration.not_in' => 'Please select a valid Program Duration.', 
    ]);
    if( $validator->fails() )
    {
      return redirect()->back()->withErrors($validator)->withInput();
    }
    else
    {
     $programLevel=ProgramLevel::findOrFail($request->program_level);
     $programDuration=ProgramDuration::findOrFail($request->program_duration);
     $title= strtolower($request->title);
     $data= $this->model->where('title',strtolower($title))->count();
     if( $data <=0)
     {
        $this->model::create([
            'title' => $request->title,
            'short_title'=>$request->short_title,
            'program_duration_id' => $programDuration->id,
            'program_level_id' => $programLevel->id,
            'created_by'=>auth()->user()->id,
            'status'=> $request->status
  
        ]);
        return redirect()->back()->with('message', 'Program created');
     }
     else
     {
        return redirect()->back()->with('message', 'Program Already Exists!!!');
     }
     

    }
   }
}
