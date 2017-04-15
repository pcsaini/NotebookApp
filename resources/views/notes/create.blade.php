@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>Create Notes</h1>

        @if(count($errors)>0)
            <ul class="alert alert-danger" style="padding: 30px;">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach

            </ul>
        @endif

        <form method="post" action="{{route('notes.store')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Notes Title:</label>
                <input type="text" class="form-control" id="email" name="title">
            </div>
            <div class="form-group">
                <label for="des">Notes Body:</label>
                <input type="text" class="form-control" id="des" name="body">
            </div>
            <input type="hidden" name="notebook_id" value="{{$id}}">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection