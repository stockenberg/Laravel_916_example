@extends('layouts.master')

@section('pageTitle', 'Produkte')

@section('main')

    <div class="jumbotron">
        <div class="container">
            <h1>Das ist meine Produktseite</h1>
            @if(session('status'))
                <p>{{session('status')}}</p>
            @endif
            <p>
                <a class="btn btn-primary btn-lg">Learn more</a>
            </p>
        </div>
    </div>

    @foreach($products as $product)
        <div class="panel col-md-3 panel-default">
            <section class="panel-body">
                <h2>{{$product->title}}</h2>
                <p>{{$product->price}}</p>
                <footer>{{$product->created_at}}
                    <hr>
                    <a href="{{route('products.delete', ['id' => $product->id]) }}" class="btn btn-danger">
                        Löschen!
                    </a>
                    <a href="{{route('products.edit', ['id' => $product->id])}}" class="btn btn-warning">Edit!</a>
                </footer>
            </section>
        </div>
    @endforeach

@stop
