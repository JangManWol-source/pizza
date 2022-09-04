@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a new Pizza</h1>

    <form action="/pizzas" method="POST">
        @csrf
        <div class="pizza_form d-flex flex-column">
            <div class="p-2">
                <input type="text" id="name" name="name" placeholder="Your name">
            </div>
                <div class="p-2">
                    <label for="type">Choose pizza type:</label>
                <select name="type" id="type">
                    <option value="margarita">Margarita</option>
                    <option value="hawaiian">Hawaiian</option>
                    <option value="italian">Italian</option>
                    <option value="american">American</option>
                </select>
                </div>
                <div class="p-2">
                    <label for="base">Choose base type:</label>
                    <select name="base" id="type">
                        <option value="soft">Soft Crust</option>
                        <option value="crunchy">Crunchy Crust</option>
                        <option value="chessy">Chessy Crust</option>
                        <option value="garlic">Garlic Crust</option>
                    </select>
                   </div>
        </div>

        <div class="p-2">
            <fieldset>
                <input type="checkbox" value="cheese" name="toppings[]"> Cheese <br>
                <input type="checkbox" value="cabbage" name="toppings[]"> Cabbage <br>
                <input type="checkbox" value="tuna" name="toppings[]"> Tuna <br>
                <input type="checkbox" value="hotdog_meat" name="toppings[]"> Hotdogs and Meat <br>
                <input type="checkbox" value="cheese" name="toppings[]"> Pineapple <br>
            </fieldset>
        </div>
        <input class="form-control btn btn-outline-primary" type="submit" name="" value="Order Pizza">
    </form>
</div>


@endsection
