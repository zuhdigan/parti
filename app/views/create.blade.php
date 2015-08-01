@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Enter your name <small>Cokilerz</small></h1>
    </div>

    <form action="{{ action('ParticipantsController@handleCreate') }}" method="post" role="form">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" />
        </div>
       
        <input type="submit" value="Create" class="btn btn-primary" />
        <a href="{{ action('ParticipantsController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop