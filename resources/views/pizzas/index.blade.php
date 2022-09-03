@extends('layouts.layout')

@section('content')
<div>
    <div>
        <h2> Order for {{$pizza -> name}} </h2>
        <p>{{$pizza -> type}}</p>
        <p>{{$pizza -> base}}</p>
        <p>Php. {{$pizza -> price}}.00</p>
    </div>
</div>
@endsection
