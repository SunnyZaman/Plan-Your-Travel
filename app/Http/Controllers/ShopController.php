<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ShopController extends Controller
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
    public function index()
    {
        $plan_list = DB::table('packages')
        ->get();
        $package_includes = json_decode($plan_list[0]->package_includes,true);
    return view('shop')->with(
      ['plan_list'=> $plan_list, 
      'package_includes'=>$package_includes]);
    }
}
