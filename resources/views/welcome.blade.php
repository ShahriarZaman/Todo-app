@extends('layouts.main');
@push('head')
<title>Todo List</title>
    
@endpush

@section('main-section')
<div class="container"> 
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">All Todo</div>
        <a href="{{route("todo.create")}}" class="btn btn-primary btn-lg">Add Todo</a>
    </div>
    <table class="table table-stripped table-dark">
        <tr>
            <th>Name</th>
            <th>Work</th>
            <th>Due Work</th>
            <th>Action</th>
        </tr>
        @foreach ($todo as $todos )
        <tr>
           <td>{{$todos->name}}</td>
           <td>{{$todos->work}}</td>
           <td>{{$todos->dueDate}}</td>
           <td>
            <a href="{{route("todo.update", $todos->id)}}" class="btn btn-success">Update</a>
        
           <a href="{{route("todo.delete", $todos->id)}}" class="btn btn-danger">Delete</a>
        </td>
        </tr>
            
        @endforeach
   
</div>

@endsection