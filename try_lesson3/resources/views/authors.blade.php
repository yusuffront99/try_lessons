@extends('layouts.main')

@section('container')
    <div class="container-fluid mt-4">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$name}}</h5>
                <h5 class="card-title text-muted">{{$email}}</h5>
                <p class="card-text">{{$posts}}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
@endsection