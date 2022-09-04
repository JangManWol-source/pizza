@extends('layouts.app')

@section('content')
<div class="container">
    @if (count($pizzas) == 0)
        <div>No pizza found</div>
        <a href="/pizza/create">Order Pizza</a>
    @endif
    @foreach ($pizzas as $item)
            <a class="card text-decoration-none p-2 m-1" href="http://127.0.0.1:8000/pizza/{{$item -> id}}">{{$item -> name}} - {{ucfirst($item -> type)}} Pizza
            </a>
    @endforeach
        <br>
        
    <div>
        <a href="/">Back to all pizzas</a>
    </div>
</div>
@endsection
