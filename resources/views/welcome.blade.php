@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <img src="/images/mdchef.png" alt="MD's kitchen logo">
        <div class="title m-b-md">
            MD's Kitchen <br />
            The flavours of India
        </div>
        <p class="msg"> {{ session('msg') }} </p>
        <a href="{{ route('pizzas.create') }}">Order your Pizza</a> &nbsp;
        <a href="{{ route('kebabs.create') }}">Order your Kebabs</a>

    </div>
</div>
@endsection
