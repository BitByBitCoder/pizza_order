@extends('layout.layout')


@section('content')
    <div style="  height: 100vh; display:flex; justify-content:center; align-items:center;">
        <div> <img src="{{ asset('images/pizza.jpg') }}" alt="pizz">
            {{-- <h1 style="color: purple; text-decoration:underline; font-size:50px">Pizza List</h1><br> --}}
            <a href="/pizzas">
                <h3 style="text-align: center;color: purple; text-decoration:underline; font-size:50px">Order pizza</h3>
            </a>
        </div>
    </div>
@endsection
