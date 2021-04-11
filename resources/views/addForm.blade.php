@extends('Layout.layout')

@section('todos')
    <form method="POST" action="/todo/add-confirm" class="my-5 mx-auto" style="width: 700px;">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea class="form-control" rows="5" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
@endsection
