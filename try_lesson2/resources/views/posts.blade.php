@extends('layouts.main')

@section('container')
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header">
            <h2>{{$title}}</h2>
            </div>
            <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

            <div class="container mt-2">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($posts as $post)
                    <tbody>
                        <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$post->title}}</td>
                        <td><a href="/posts/{{$post->slug}}">{{$post->slug}}</a></td>
                        <td>@mdo</td>
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