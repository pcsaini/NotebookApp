@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>Edit Note</h1>
        <form method="post" action="{{route('notes.update',$note->id)}}">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="form-group">
                <label for="name">Note Title:</label>
                <input type="text" class="form-control" id="email" name="title" value="{{$note->title}}">
            </div>
            <div class="form-group">
                <label for="des">Body:</label>
                <input type="text" class="form-control" id="des" name="body" value="{{$note->body}}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection