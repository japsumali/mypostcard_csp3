<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use \App\Article;
use Session;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            return view('dashboard.profile_page')->with('articles', $user->articles);
    }


    function mypostcards_single($id){
        $dashboard_showsingle = Article::find($id); 
        $user_id = auth()->user('id');
        $user = User::find($user_id);
            return view('dashboard.mypostcards_single', compact('dashboard_showsingle')); 
        }


}
