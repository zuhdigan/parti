<?php

// app/controllers/ParticipantsController.php

class ParticipantsController extends BaseController
{
    public function index()
{
    // Show a listing of participants.
    $participants = Participant::all();
    return View::make('index', compact('participants'));
}

    public function create()
    {
        // Show the create participant form.
        return View::make('create');
    }

    public function handleCreate()
    {
        // Handle create form submission.
        $participant = new Participant;
        $participant->name = Input::get('name');
       
        $participant->save();
        return Redirect::action('ParticipantsController@index');

    }

    public function edit(Participant $participant)
    {
        // Show the edit participant form.
        return View::make('edit',compact('participant'));

    }

    public function handleEdit()
    {
        // Handle edit form submission.
        $participant = Participant::findOrFail(Input::get('id'));
        $participant->name = Input::get('name');
        
        $participant->save();

        return Redirect::action('ParticipantsController@index');
    }

    public function delete(Participant $participant)
    {
        // Show delete confirmation page.
        return View::make('delete', compact('participant'));
    }

    public function handleDelete()
    {
        // Handle the delete confirmation.
        $id = Input::get('participant');
        $participant = Participant::findOrFail($id);
        $participant->delete();

        return Redirect::action('ParticipantsController@index');
    }
}