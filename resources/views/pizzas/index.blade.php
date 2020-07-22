@extends('layouts.app')

@section('content')
<div class="warapper pizza-index">
    <h1>Pizza Orders</h1>

        {{-- @for($i = 0; $i < count($pizzas); $i++) 
            <p>{{ $pizzas[$i]['type'] }}</p>
        @endfor --}}

@foreach($pizzas as $pizza)
    <div class="pizza-item">
        <img src="/images/pizza.png" alt="pizza icon">
        <h4><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></h4>
    </div>
    @endforeach
</div>
@endsection
    
