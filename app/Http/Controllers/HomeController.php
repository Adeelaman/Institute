<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $user)
    {
        $account_type = auth()->user()->account_type;

        if ($account_type === 'Trainer'){

        $user_id = auth()->user();

        $records = DB::table('sessions')->whereIn('user_id', $user_id)->get();

        // dd($records);


        return view('sessions.show', compact('records', 'user'));

        }

        else {

            $user_ids = DB::table('users')->where('account_type', 'Trainer')->pluck('id');

            $names = DB::table('users')->where('account_type', 'Trainer')->pluck('name');


            $records = DB::table('sessions')->whereIn('user_id', $user_ids)->get();

            // dd($records);

            return view('trainee_home', compact('records', 'names'));
        }

    }
}
