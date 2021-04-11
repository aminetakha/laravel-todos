@extends('Layout.layout')

@section('todos')
    <div class="card my-5 mx-auto" style="width: 35rem;">
        <h5 class="card-header">Todo Detail</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $todo->title }}</h5>
            <p class="card-text text-justify">{{ $todo->description }}</p>
            <a class="btn btn-success btn-block" href="/todo/{{$todo->id}}/update" role="button">Update</a>
            <a class="btn btn-danger btn-block" href="/todo/{{$todo->id}}/delete" role="button">Delete</a>
        </div>
    </div>
@endsection
