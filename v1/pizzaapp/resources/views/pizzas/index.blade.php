@extends('layout.layout')


@section('content')
    <div style="  height: 100vh; display:flex; justify-content:center; align-items:center;">
        <div> {{-- <img src="{{ asset('images/pizza.jpg') }}" alt="pizz"> --}}
            <h1 style="color: purple; text-decoration:underline; font-size:50px">Pizza List</h1><br>
            @foreach ($pizza as $pizza)
                {{-- <div style="border-radius: 5px;">

                    {{ $pizza->name }}- {{ $pizza->type }}- {{ $pizza->base }} <br>
                </div> --}}

                <div
                    style="display:flex; justify-content:center;align-items:center; border: 2px solid #007bff; height:50px; width: 300px; border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); overflow: hidden;">
                    <div style="border-radius: 5px;">

                        {{ $pizza->name }}- {{ $pizza->type }}- {{ $pizza->base }} <br>
                    </div>

                </div>
                <br>
            @endforeach
        </div>
    </div>
@endsection
