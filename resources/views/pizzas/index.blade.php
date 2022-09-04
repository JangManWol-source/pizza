@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <h2> Order for {{$pizza -> name}} </h2>
        <h4>Pizza Type</h4>
        <p>- {{ucfirst($pizza -> type)}}</p>
        <h4>Pizza Base</h4>
        <p>- {{ucfirst($pizza -> base)}}</p>
        <h4>Toppings</h4>
        <ul>
            @foreach ($pizza->toppings as $each)
                <li>{{$each}}</li>
            @endforeach
        </ul>

        <form action="/pizza/{{ $pizza -> id}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-dark">Complete the Order</button>
        </form>
    </div>
    <br>
    <div>
        <a href="/pizzas">Back to all pizzas</a>
    </div>
</div>
@endsection
