<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
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
       function about(){
        $data = array("Web Developer/5th Year Comp Sci Student", "4th Year Comp Sci Student", "2nd Year Comp Sci Student");
        return view('team')->with(['data'=>$data]);
       }
       function contact(){
        $data = array("sjzaman@ryerson.ca", "don.alwani@gmail.com", "talha.ahmedd@gmail.com");
        return view('team')->with(['data'=>$data]);
       }
}
