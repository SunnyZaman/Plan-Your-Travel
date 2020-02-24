<?php

namespace App\Http\Controllers;
use DB;
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
        $place_title = str_replace("_"," ",$id);
        $selected_place = DB::table('selected_places')
        ->where('selected_place',$place_title)
            ->get();
        $reviews = DB::table('reviews')
            ->where('selected_place',$place_title)
                ->get();
        return view('place')->with(['selected_place'=>$selected_place, 'reviews'=>$reviews]);
    }
}
