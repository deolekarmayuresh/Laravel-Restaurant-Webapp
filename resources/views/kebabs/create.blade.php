@extends('layouts.app')

@section('content')
<div class="wrappper create-pizza">
    <h1>Create your kebabs</h1>
    <form action="/kebabs" method="POST">
        @csrf
        <label for="name">Your name: </label>
        <input type="text" name="name" id="name">
        <label for="type">Choose your kebab type: </label>
        <select name="type" id="type">
            <option value="Paneer Tikka">Paneer Tikka</option>
            <option value="Chicken Tikka">Chicken Tikka</option>
            <option value="Seekh kebab">Seekh Kebab</option>
            <option value="Malai chicken kebab">Malai chicken Kebab</option>
        </select>
            <input type="submit" value="Order Kebab">
    </form>
</div>
@endsection
    
