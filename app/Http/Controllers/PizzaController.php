<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        $pizzas = Pizza::all();
        //$pizzas = Pizza::orderBy('name','desc')->get();
        //$pizzas = Pizza::where('type','MD_Supreme')->get();
        //$pizzas = Pizza::latest()->get();

        /*  $pizzas = [
            ['type' => 'Italian', 'base' => 'garlic burst', 'price'=> 10],
            ['type' => 'American', 'base' => 'cheese burst', 'price'=> 20],
            ['type' => 'MD supreme', 'base' => 'double cheese burst', 'price'=> 40]
        ]; */
    
        $name = request('name');
    
        return view('pizzas.index', [
            'pizzas' => $pizzas,
            'name' => $name] 
            //'age' => request('age')]
        );
    }

    public function show($id) 
    {
        $pizza = Pizza::findOrFail($id);

        return view('pizzas.show',['pizza'=>$pizza]);
    }

    public function create() {
        return view('pizzas.create');
    }

    public function store() {
        //error_log(request('name'));

        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        //error_log($pizza);
        //return request('toppings');
        $pizza->save();

        return redirect('/')->with('msg','Thanks for your order');
    }

    public function destroy($id) {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
