@extends('layout')

@section('content')
    <div class="page-header">
        <h1>All Participant <small>Cokilerz</small></h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ action('ParticipantsController@create') }}" class="btn btn-primary">Apply</a>
        </div>
    </div>

    @if ($participants->isEmpty())
        <p>There are no participants! :(</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($participants as $participant)
                <tr>
                    <td>{{ $participant->name }}</td>
                    <td>
                        <a href="{{ action('ParticipantsController@edit', $participant->id) }}" class="btn btn-default">Edit</a>
                        
                        <a href="{{ action('ParticipantsController@delete', $participant->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@stop
