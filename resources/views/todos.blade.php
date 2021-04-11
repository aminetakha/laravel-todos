@extends('Layout.layout')

@section('todos')
   <div class="card my-5 mx-auto" style="width: 35rem;">
       <div class="card-header">
           Todos
       </div>
       <ul class="list-group list-group-flush">
           @foreach($todos as $todo)
               <li class="list-group-item">
                   {{ $todo->title }}
                   @if(!$todo->completed)
                       <a class="btn btn-warning float-right ml-2" href="/todo/{{$todo->id}}/complete">Complete</a>
                   @endif
                   <a class="btn btn-primary float-right" href="/todo/{{$todo->id}}/detail">View</a>
               </li>
           @endforeach
       </ul>
   </div>
@endsection
