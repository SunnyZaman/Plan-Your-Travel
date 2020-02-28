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
        $query ="Insert";
        return view('dbMaintain')->with(
            ['tables'=> $tables,'query'=>$query]);
    }
    function select()
       {
        $tables = $this->getTables();
        $query ="Select";
        return view('dbMaintain')->with(
            ['tables'=> $tables,'query'=>$query]);
       }
       function retrieve(Request $request){
        $table = $request->get('table');
        $query = $request->get('query');
        $result = DB::table($table)->select(...$query)->get();  
        echo $result;
       }

       function delete(){
        $tables = $this->getTables();
        $query ="Delete";
        return view('dbMaintain')->with(
            ['tables'=> $tables,'query'=>$query]);
       }
       function deleteRow(Request $request){
        $table = $request->get('table');
        $column = $request->get('column');
        $value = $request->get('value');
        $data = DB::table($table)->where($column, '=', $value)->delete();
        echo $data;
       }
       function table(Request $request){
        $table = $request->get('table');
        $result = DB::table($table)->get();  
        echo $result;
       }

       function update(){
        $tables = $this->getTables();
        $query ="Update";
        return view('dbMaintain')->with(
            ['tables'=> $tables,'query'=>$query]);
       }
}
