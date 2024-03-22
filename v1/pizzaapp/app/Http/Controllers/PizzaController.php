<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index() 
    {
    //    $pizza =Pizza::all();
       $pizza = Pizza::orderBy("id","asc")->get();
    //    $pizza = Pizza::where('type','valcano');
    //    $pizza = Pizza::latest()->get()->last();
        return view('pizzas.index',['pizza'=>$pizza]);

        // return $pizza;
    }


    public function store(Request $request) {}

    public function show($id)
    
    {

        return view("pizzas.show",["id"=>$id]);


    }
}
