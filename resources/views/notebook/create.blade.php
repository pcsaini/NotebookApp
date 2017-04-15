@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>Create Notebook</h1>
        @if(count($errors)>0)
            <ul class="alert alert-danger" style="padding: 30px;">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach

            </ul>
        @endif
        <form method="post" action="/notebook">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Notebook Name:</label>
                <input type="text" class="form-control" id="email" name="name">
            </div>
            <div class="form-group">
                <label for="des">Description:</label>
                <input type="text" class="form-control" id="des" name="description">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection