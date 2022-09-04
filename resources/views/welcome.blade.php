@extends('layouts.app')

@section('content')
<div class="container text-center ">
    <div class="content">

<div class="banner">
    <h1>Welcome to Joe's Pizza</h1>
</div>
        <p>{{session('mssg')}}</p>
        <div>
            <a href="/pizza/create">Order a Pizza</a>
        </div>
        <div>
            <a href="/pizzas">View all Pizza
            </a>
        </div>
    </div>
</div>

@endsection
