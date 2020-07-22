@extends('layouts.app')

@section('content')

<div class="wrappper pizza-details">
<h1>Order for {{ $kebab->name }} </h1>
<p class="type">Kebab type: {{ $kebab->type }} </p>

<form action="{{ route('kebabs.destroy', $kebab->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button>Complete Order</button>
</form>
</div>
<a href="/kebabs" class="back"><-- Back to Kebabs</a>
@endsection
    
