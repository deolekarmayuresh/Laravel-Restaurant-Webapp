@extends('layouts.app')

@section('content')
<div class="wrappper create-pizza">
    <h1>Create your pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your name: </label>
        <input type="text" name="name" id="name">
        <label for="type">Choose your pizza type: </label>
        <select name="type" id="type">
            <option value="Italian">Italian</option>
            <option value="American">American</option>
            <option value="MD Supreme">MD Supreme</option>
            <option value="Chicken Farmhouse">Chicken Farmhouse</option>
        </select>
        <select name="base" id="base">
            <option value="Garlic crust">Garlic crust</option>
            <option value="Cheesy crust">Cheesy crust</option>
            <option value="Double crust">Double cheese burst</option>
            <option value="Thin crust">Thin crust</option>
        </select>
        <fieldset>
            <label>Extra Toppings: </label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br />
            <input type="checkbox" name="toppings[]" value="olives">Olives<br />
            <input type="checkbox" name="toppings[]" value="paneer">Paneer<br />
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection
    
