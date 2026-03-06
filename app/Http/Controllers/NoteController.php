<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view("pages.main", compact("notes"));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Note::create([
             "title"=> $request->title,
             "body" => $request->body,
             "author" => $request->author,
        ]);

       return redirect()->route("notes.main");
    }


    public function show(Note $note)
    {
        //
    }

    public function edit(Note $note)
    {
        //
    }

    public function update(Request $request, Note $note)
    {
        //
    }

    public function destroy(Note $note)
    {
        Note::destroy($note->id);

        return redirect()->route("notes.main");
    }
}
