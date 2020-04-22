@extends('layouts.app');

@section('content')
    <div class="container">
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