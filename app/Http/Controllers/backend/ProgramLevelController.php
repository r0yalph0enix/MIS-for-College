<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Backend\BackendBaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProgramLevel;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ProgramLevelController extends BackendBaseController
{
    protected $panel="program Level";
    protected $model;
    protected $base_view;
    protected $base_route;
    protected $folder;
    function __construct(){
        $this->model = new ProgramLevel();
    }
    public function index()
    {
        $data['records'] = $this->model->all();
        return view($this->__loadDataToView($this->base_view . 'program-level'),compact('data'));
    }
    public  function store(Request $request)
    {
        $validator =Validator::make($request->all(),[
            'title' => 'required|max:20',
            'rank' =>   'required|integer|min:0'
          
        ]
    
    
    );
        if($validator->fails())
        {
           return response()->json([
              'status'=>400,
              'message'=>$validator->getMessageBag()
           ]);
        }
        else
        {
            $title= strtolower($request->title);
           $data= $this->model->where('title',strtolower($title))->count();
           if($data> 0)
           {
            return response()->json([
                'status'=>401,
                'message'=>'Title or Program Exist!!!'
              ]);


           }
           else
           {
            try{

                $this->model->create([
                    'title'=> $request->title,
                     'rank'=>$request->rank,
                     'status'=>$request->status,
                     'created_by'=>auth()->user()->id
                ]);
                return response()->json([
                    'status'=>200,
                    'message'=>'success'
                  ]);   
            }
            catch(\Exception $e)
            {
                return response()->json([
                    'status'=>401,
                    'message'=>$e->getMessage()
                  ]);   
            }
      
               
            }
        }

        
    }
    public function disable(int $id)
    {
        $record = $this->model->findOrFail($id);
        $record->update(['status' => 1]);

        return redirect()->back();
    }

    public function enable($id)
    {
        $record = $this->model->findOrFail($id);
        $record->update(['status' => 0]);

        return redirect()->back();
    }
}
