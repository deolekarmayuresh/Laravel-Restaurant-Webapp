<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kebab;

class KebabController extends Controller
{
    public function index() {
        $kebabs = Kebab::all();
        $name = request('name');
        return view('kebabs.index', ['kebabs' => $kebabs, 'name' => $name]);
    }

     public function show($id) {
        $kebab = Kebab::findOrFail($id);

        return view('kebabs.show',['kebab'=>$kebab]);

    }

    public function create() {
        return view('kebabs.create');
    }

    public function store() {

        $kebab = new Kebab();

        $kebab->name = request('name');
        $kebab->type = request('type');
       

        //error_log($kebab);
        //return request('type');
        $kebab->save();

        return redirect('/')->with('msg','Thanks for your order');

    }

    public function destroy($id) {
        $kebab = Kebab::findOrFail($id);
        $kebab->delete();

        return redirect('/kebabs');
    }

    
}
