@extends('layouts.main')

@section('container')
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header">
            {{$post->title}}
            </div>
            <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            Category By : {{$post->title}}
            <hr>
            <p class="card-text">{{$post->content}}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
@endsection