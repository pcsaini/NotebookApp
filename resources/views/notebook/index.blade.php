@extends('layouts.base')

@section('content')

<!-- Main component for call to action -->
<div class="container text-center">
    <!-- heading -->
    <h1 class="pull-xs-left">
        Your Notebooks
    </h1>
    <div class="pull-xs-right">
        <a class="btn btn-primary" href="/notebook/create" role="button">
            New NoteBook +
        </a>
    </div>

    <div class="clearfix">
    </div>
    <br>

    <!-- ================ Notebooks==================== -->
    <!-- notebook1 -->
    @foreach($notebook as $notebooks)
    <div class="col-sm-6 col-md-3">
        <div class="card">
            <div class="card-block">
                <a href="{{route('notebook.show',$notebooks->id)}}">
                    <h4 class="card-title">
                        {{$notebooks->name}}
                    </h4>
                </a>
            </div>
            <a href="#">
                <img alt="Responsive image" class="img-fluid" src="{{asset('dist/img/notebook.jpg')}}"/>
            </a>
            <div class="card-block">
                <a class="card-link" href="{{route('notebook.edit',$notebooks->id)}}">
                    Edit Notebook
                </a>
                <form action="/notebook/{{$notebooks->id}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!-- /container -->

@endsection