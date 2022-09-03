<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    //
    public function index(){

        $pizzas = Pizza::all();
        // $pizzas = Pizza::where('type', 'Hawaiian Pizza')->get();
        // $pizzas = Pizza::orderBy('name')->get();
        // $pizzas = Pizza::latest()->get();
    return view('pizzas.show', ['pizzas' => $pizzas]);
    }
    public function show($id){
        $pizza = Pizza::find($id);
        return view('pizzas.index', ['pizza' => $pizza]);
    }
    public function create(){
        return view('pizzas.create');
    }
}
