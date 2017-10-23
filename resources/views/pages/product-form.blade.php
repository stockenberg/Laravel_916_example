@extends('layouts.master')

@section('pageTitle', 'Neues Produkt erstellen')


@section('main')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="@yield('action')" method="post" role="form">
        <legend>Neues Produkt erstellen</legend>

        {{csrf_field()}}

        <div class="form-group">
            <label for="">Titel</label>
            <input type="text" class="form-control" name="title" id="" placeholder="Input..." value="@yield('title')">
        </div>

        <div class="form-group">
            <label for="">Preis</label>
            <input type="number" class="form-control" name="price" id="" placeholder="Input..." value="@yield('price')">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @stop