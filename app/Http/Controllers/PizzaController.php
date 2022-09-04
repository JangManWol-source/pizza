<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    //
    public function index()
    {

        $pizzas = Pizza::all();
        // $pizzas = Pizza::where('type', 'Hawaiian Pizza')->get();
        // $pizzas = Pizza::orderBy('name')->get();
        // $pizzas = Pizza::latest()->get();
        return view('pizzas.show', ['pizzas' => $pizzas]);
    }
    public function show($id)
    {
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.index', ['pizza' => $pizza]);
    }
    public function create()
    {
        return view('pizzas.create');
    }

    public function store()
    {
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->price = 200;
        $pizza->toppings = request('toppings');


        $pizza->save();
        return redirect('/')->with('mssg', 'Ordered Successfully!');
    }

    public function delete($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
