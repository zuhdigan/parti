@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Edit Your Name <small>no problem</small></h1>
    </div>

    <form action="{{ action('ParticipantsController@handleEdit') }}" method="post" role="form">
        <input type="hidden" name="id" value="{{ $participant->id }}">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $participant->name }}" />
        </div>

        <input type="submit" value="Save" class="btn btn-primary" />
        <a href="{{ action('ParticipantsController@index') }}" class="btn btn-link">Cancel</a>
    </form>
@stop