@extends('layouts.app')

@section('content')

<div class="wrappper pizza-details">
<h1>Order for {{ $pizza->name }} </h1>
<p class="type">Pizza type: {{ $pizza->type }} </p>
<p class="base">Pizza Base: {{ $pizza->base }} </p>
<p class="toppings">Extra Toppings: </p>
<ul> 
    @foreach($pizza->toppings as $topping)
    <li> {{ $topping }} </li>
    @endforeach
</ul>
<form action="{{ route('pizzas.destroy', $pizza->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button>Complete Order</button>
</form>
</div>
<a href="/pizzas" class="back"><-- Back to Pizzas</a>
@endsection
    
