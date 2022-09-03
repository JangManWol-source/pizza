@extends('layouts.layout')

@section('content')
<div>
    @foreach ($pizzas as $item)
        <div>
            <a href="http://127.0.0.1:8000/pizza/{{$item -> id}}">{{$item -> name}}</a> - {{$item -> price}} - {{$item -> type}} - {{$item -> base}}
        </div>
    @endforeach
</div>
@endsection
