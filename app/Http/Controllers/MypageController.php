<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Training;
use App\Models\Health;

class MypageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Work $work, Health $health)
    {
        $user_id=\Auth::user()->id;
        $my_health=$health->where('user_id', $user_id)->orderByDesc('updated_at')->first();
        return view('mypage.index')->with(['works' => $work->get(), 'health' => $my_health]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('healthes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Health $health)
    {
        $input = $request['health'];
        $health->user_id=\Auth::user()->id;
        $health->fill($input)->save();
        
        return redirect('/mypage');
    }
    
    public function weight(Health $health)
    {
        $user_id=\Auth::user()->id;
        $my_weight=$health->orderBy('updated_at')->where('user_id', $user_id)->get(['weight']);
        $weightday=$health->where('user_id', $user_id)->orderBy('created_at')->get(['created_at']);
       
        return view('mypage.weight')->with(['weights' => $my_weight, 'days' => $weightday]);
    }
    
    public function bmi(Health $health)
    {
        $user_id=\Auth::user()->id;
        $my_bmi=$health->orderBy('updated_at')->where('user_id', $user_id)->get(['bmi']);
        $bmiday=$health->where('user_id', $user_id)->orderBy('created_at')->get(['created_at']);
        
        return view('mypage.bmi')->with(['bmis' => $my_bmi,'days_b' => $bmiday]);
    }

    public function muscle(Health $health)
    {
        $user_id=\Auth::user()->id;
        $my_muscle=$health->orderBy('updated_at')->where('user_id', $user_id)->get(['muscle']);
        $muscleday=$health->where('user_id', $user_id)->orderBy('created_at')->get(['created_at']);
        
        return view('mypage.muscle')->with(['muscles' => $my_muscle,'days_m' => $muscleday]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
