@extends('layouts.main')

@section('container')
    <div class="container-fluid mt-4">
        <div class="card text-left">
            <div class="card-header">
                My Blogs | {{$post->category->name}}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->content}}</p>
                <a href="/posts" class="btn btn-primary">Go Main</a>
            </div>
            <div class="card-footer text-muted">
                {{$post->category->created_at}}
            </div>
        </div>
    </div>
@endsection