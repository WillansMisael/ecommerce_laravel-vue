@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card padding">
            <header>
                <h2>Mi carrito de compras </h2>
            </header>
            <div class="card-body">
                <products-shopping-component></products-shopping-component>
            </div>
        </div>
    </div>
@endsection