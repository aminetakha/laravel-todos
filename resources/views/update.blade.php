@extends('Layout.layout')

@section('todos')
    <form method="POST" action="/todo/update-confirm" class="my-5 mx-auto" style="width: 700px;">
        @csrf
        <div class="form-group">
            <input type="hidden" name="id" value={{ $todo->id }}>
            <label>Title</label>
            <input type="text" class="form-control" name="title" value={{ $todo->title }}>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea class="form-control" rows="5" name="description">{{ $todo->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
@endsection
