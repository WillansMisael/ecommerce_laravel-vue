@extends('layouts.app');

@section('content')
    <div class="container">
        <h1>{{ $shopping_cart->id }}</h1>
        <div class="">
            <products-component></products-component>
        </div>
        <div class="row">
        </div>
        <div class="actions text-center">
            {{ $prodPag->links() }}
        </div>
    </div>
@endsection