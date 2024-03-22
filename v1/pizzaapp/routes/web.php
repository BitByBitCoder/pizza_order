<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

route::get("/", function()
{
    return view("welcome");
    
});


Route::get('/pizzas',[PizzaController::class,'index']);
Route::get('/pizzas/{id}',[PizzaController::class,'show']);
