<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MaintainController extends Controller
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
    public function getTables()
    {
        $tables = json_decode(json_encode([
            ['table' => 'Continents'],
            ['table' => 'Countries'],
            ['table' => 'Attractions']
            ]
          ));
          return $tables;
    }
    public function insert()
    {
        $tables = $this->getTables();
        return view('dbMaintain.insert')->with(
          ['tables'=> $tables]);
    }
    function select()
       {
        $tables = $this->getTables();
        return view('dbMaintain.select')->with(
            ['tables'=> $tables]);
       }
       function retrieve(Request $request){
        $table = $request->get('table');
        $query = $request->get('query');
        $result = DB::table($table)->select(...$query)->get();  
        echo $result;
       }

       function delete(){
        $tables = $this->getTables();
        return view('dbMaintain.delete')->with(
            ['tables'=> $tables]);
       }

       function update(){
        $tables = $this->getTables();
        return view('dbMaintain.update')->with(
            ['tables'=> $tables]);
       }
}
