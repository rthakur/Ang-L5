<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Todos;

class TodosController extends Controller
{
    
    public function getIndex(){
		return Todos::orderBy('id','desc')->get();
   }
   
   
    public function getSave(Request $request){
		$todo = new Todos;
		$todo->title = $request->title;
		$todo->save();
		return Todos::orderBy('id','desc')->get();
   }
}
