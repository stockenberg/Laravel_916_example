@extends('layouts.master')

@section('pageTitle', 'Startseite')

@section('main')

    <div class="jumbotron">
        <div class="container">
            <h1>Das ist meine Startseite</h1>
            <p>Contents...</p>
            <p>
                <a class="btn btn-primary btn-lg">Learn more</a>
            </p>
        </div>
    </div>

    @foreach($news as $newsEntry)
        <div class="panel col-md-3 panel-default">
            <section class="panel-body">
                <h2>{{$newsEntry->title}}</h2>
                <p>{{$newsEntry->content}}</p>
                <footer>
                    {{$newsEntry->created_at}}
                    <hr>
                    <a href="{{route('news.delete', ['id' => $newsEntry->id]) }}" class="btn btn-danger">
                        Löschen!
                    </a>
                </footer>
            </section>
        </div>
    @endforeach

    {{$news->links()}}

@stop
