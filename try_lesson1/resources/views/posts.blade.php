@extends('layouts.main')

@section('container')
<div class="container-fluid mt-3">
    <div class="card text-center">
        <div class="card-body">
            <h1 class="card-title">{{$title}}</h1>
            <p class="card-text mb-4">With supporting text below as a natural lead-in to additional content.</p><hr>
            
            {{-- table-data --}}
            <table class="table mt-2">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                @foreach ($posts as $post)
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>{{$post->title}}</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection