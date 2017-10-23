@extends('pages.product-form')

@section('action'){{route('products.store')}}@stop

@section('title', old('title'))
@section('price', old('price'))