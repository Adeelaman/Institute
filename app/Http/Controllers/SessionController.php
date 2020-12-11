<?php

namespace App\Http\Controllers;
use App\Models\Session;
use App\Models\User;
use DB;

use Illuminate\Http\Request;

class SessionController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }


    public function create () 
    {
    	return view('sessions.create'); 
    }

    public function show (User $user) {

        $user_id = auth()->user();

        $records = DB::table('sessions')->whereIn('user_id', $user_id)->get();

        // dd($records);


        return view('sessions.show', compact('records', 'user'));
    }

     public function store (\App\Models\User $user) 
    {

    	Session::create([
    		'user_id' => auth()->id(),
    		'type' => request('type'),
    		'department' => request('department'),
    		'objective' => request('objective'),
    		'status' => request('status'),
    		'activity' => request('activity'),
    	]);

    	// Session::flash('message', 'Session Added Successfully!'); 


    	return redirect()->action([SessionController::class, 'show'])->with('status', 'Session Added Successfully!'); 
    }


}
