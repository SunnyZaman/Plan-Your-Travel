<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        $continent_list = DB::table('continents')
            ->get();
        return view('home')->with('continent_list', $continent_list);
       }
       function fetch(Request $request)
       {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $table = $request->get('table');
        $data = DB::table($table)
          ->where($select,$value)
          ->get();
        $output = '<option value="">Select '.ucfirst($dependent).'</option>';
        foreach($data as $row)
        {
         $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
        }
        echo $output;
       }
}
