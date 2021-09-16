@extends('layouts.main')

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
@endsection