<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Models\Training;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    // public function index(Work $work)
    // {
    //     return view('works.index')->with(['works' => $work->get()]);
    // }
    
    public function  create(Training $training)
    {
        $trainings = $training->get();
        return view('works.create')->with(['trainings' => $training->get()]);
        
    }
    
    public function store(Request $request, Work $work) {
        $input = $request['training'];
        $work->training_id=$request->training_id;
        $work->user_id=\Auth::user()->id;
        $work->fill($input)->save();
        
        return redirect('works');
        
    }
    
    public function show(Work $work, Training $training) {
        return view('works.show')->with(['work' => $work, 'trainings' => $training->get()]);
    }
    
    public function edit(Request $request, Work $work){
        $input_work = $request['training'];
        $work->fill($input_work)->save();
        #$work->training_id=$request->training_id;
        
        return redirect('/works/' . $work->id . '/show');
    }
    
}
