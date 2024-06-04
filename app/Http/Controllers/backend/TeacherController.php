<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class TeacherController extends BackendBaseController
{
    protected $panel = "teacher";
    protected $model;
    protected $base_view;
    protected $base_route;
    protected $folder;

public function __construct() {
    $this->model = new Teacher(); 
}

public function index(){
    return view($this->__loadDataToView($this->base_view . 'add-teacher'));

}
public function store(Request $request){

    $validator = Validator::make($request->all(),[
            'first_name' =>'required|max:20',
            'middle_name' =>'required|max:20',
            'last_name' =>'required|max:20',
            'email' =>'required|email|max:255|unique:users',
            'contact' => 'required|regex:/^[0-9]{10}$/',
            'gender' => 'required|in:Male,Female,Other',
            'dob' => 'required|date|before_or_equal:'.\Carbon\Carbon::now()->subYears(16)->format('Y-m-d'),
            'address'=>'required|max:20',
            'qualification' =>'required|max:500',
            'teaching_experience' =>'required|max:500',
            'subject_of_expertise' =>'max:100']);
            if ($validator->fails()) 
            {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            else
            {
                try {
               
                    $this->model::create([
                    'first_name' => $request->name,
                    'middlename' => $request->middlename,
                    'lastname' => $request->lastname,
                    'email' =>$request->email,
                    'phone' => $request->phone,
                    'qualification'=> $request->qualification,
                    'teaching_experience' => $request->teaching_experience,
                    'subject_of_expertise' => $request->subject_of_expertise,
              
                    ]);

                    return redirect()->route('teachers.index')->with('success', 'Teacher added successfully');
                } catch (\Exception $e) {
                   
                    return redirect()->back()->with('error', 'Failed to add teacher');
                }

            }


   

     
}

}
