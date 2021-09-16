{{-- @extends('layouts.main')

@section('container')
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <div class="container mt-2">
                    <h5 class="card-title">{{$title}}</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Author</th>
                            <th scope="col">Title</th>
                            <th scope="col">Subtitle</th>
                            <th scope="col">Account</th>
                            </tr>
                        </thead>
                        @php
                            $no = 1;
                        @endphp

                        @foreach ($posts as $post)
                        <tbody>
                            <tr>
                            <th scope="row">{{$no++}}</th>
                            <th><a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a></th>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->slug}}" class="text-decoration-none">{{$post->title}}</a></td>
                            <td><a href="/authors/{{$post->author->name}}">{{$post->author->email}}</a></td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

@extends('layouts.main')

@section('container')
    
    {{-- if exits post --}}
    @if ($posts->count())
    
    <div class="container-fluid mt-4">
        <div class="card">
            
            <div class="card-body text-center">
                <img src="https://source.unsplash.com/1600x400/?{{$posts[0]->category->name}}" class="card-img-top" alt="...">
                <h5 class="card-title mt-4"><a href="/posts/{{$posts[0]->slug}}" class="none-text-decotation text-dark">{{$posts[0]->title}}</a></h5><hr>
                <small class="card-title text-muted">Writter By : <a href="/authors/{{$posts[0]->author->username}}">{{$posts[0]->author->username}}</a> in <a href="/categories/{{$posts[0]->category->slug}}">{{$posts[0]->category->name}}</a> {{$posts[0]->created_at->diffForHumans()}} </small>
                <p class="card-text">{{$posts[0]->summary}}</p>
                <a href="#" class="btn btn-primary btn-sm">Read more ...</a>
            </div>
        </div>
    </div>

    @else
        <p class="text-center fs-4">No post Found</p>
    @endif
@endsection