<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

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
        $locations = json_decode($plan_list[0]->locations,true);
        $attractions =  json_decode($plan_list[0]->attractions,true);
    return view('shop')->with(
      ['plan_list'=> $plan_list, 
      'package_includes'=>$package_includes,
      'locations'=>$locations,
      'attractions'=>$attractions]);
    }
    public function plan(Request $request)
    {
        $plan = $request->get('plan');
        $user_email = Auth::user()->email;
        $plans = DB::table('plans')
        ->where('plan',$plan)
        ->where('user_email',$user_email)
        ->get();
        echo $plans;
    }

    public function purchase(Request $request)
    {
        $plan = $request->get('plan');
        $number_of_travellers = $request->get('number_of_travellers');
        $ages = $request->get('ages');
        $total_cost = $request->get('total_cost');
        $user_email = Auth::user()->email;
        DB::table('plans')->insert([
            'plan' => $plan,
            'user_email' => $user_email,
            'number_of_travellers' => $number_of_travellers,
            'ages' => $ages,
            'total_cost' => $total_cost,
        ]);
    }
}