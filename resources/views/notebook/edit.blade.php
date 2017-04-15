@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>Edit Notebook</h1>
        <form method="post" action="/notebook/{{$notebook->id}}">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="form-group">
                <label for="name">Notebook Name:</label>
                <input type="text" class="form-control" id="email" name="name" value="{{$notebook->name}}">
            </div>
            <div class="form-group">
                <label for="des">Description:</label>
                <input type="text" class="form-control" id="des" name="description" value="{{$notebook->description}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection