@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Delete {{ $participant->name }} <small>Are you sure?</small></h1>
    </div>
    <form action="{{ action('ParticipantsController@handleDelete') }}" method="post" role="form">
        <input type="hidden" name="participant" value="{{ $participant->id }}" />
        <input type="submit" class="btn btn-danger" value="Yes" />
        <a href="{{ action('ParticipantsController@index') }}" class="btn btn-default">No way!</a>
    </form>
@stop