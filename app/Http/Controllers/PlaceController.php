<?php

namespace App\Http\Controllers;

class PlaceController extends Controller
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
    public function index($id)
    {
        $imageName = str_replace("_"," ",$id);
        return view('place')->with(['imageName'=>$imageName]);
    }
}
