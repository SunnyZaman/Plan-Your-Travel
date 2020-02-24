<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ReviewController extends Controller
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
       function store(Request $request){
        $selected_place = $request->get('selected_place');
        $title = $request->get('title');
        $rating = $request->get('rating');
       $description = $request->get('description');
        $review_date = $request->get('review_date');
        DB::table('reviews')->insert([
            'selected_place' => $selected_place,
            'title' => $title,
            'rating' => $rating,
            'description' => $description,
            'review_date' => $review_date
        ]);
       }
}
