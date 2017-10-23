@extends('pages.product-form')

@section('action'){{route('products.update', ['id' => $product->id ])}}@stop

@section('title', $product->title)
@section('price', $product->price)

