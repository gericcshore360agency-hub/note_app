@extends('layout.design')

@section('content')

<style>
.page{
    width:70%;
    margin:auto;
    font-family: Arial, Helvetica, sans-serif;
}

/* FORM CARD */
.form-card{
    background:white;
    padding:20px;
    margin-top:30px;
    border-radius:8px;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
}

.form-card h2{
    margin-bottom:15px;
}

input, textarea{
    width:100%;
    padding:10px;
    margin-top:10px;
    border-radius:5px;
    border:1px solid #ccc;
}

textarea{
    height:120px;
    resize:none;
}

button{
    margin-top:15px;
    padding:10px 20px;
    border:none;
    border-radius:6px;
    background:#4CAF50;
    color:white;
    cursor:pointer;
}

button:hover{
    background:#45a049;
}

/* NOTES LIST */

.notes{
    margin-top:30px;
}

.note-card{
    background:white;
    padding:20px;
    margin-top:15px;
    border-radius:8px;
    box-shadow:0 3px 8px rgba(0,0,0,0.1);
}

.note-header{
    display:flex;
    flex-direction:column;
}

.note-title{
    font-weight:bold;
    font-size:20px;
}

.note-author{
    font-size:13px;
    color:gray;
    margin-left:15px;
}

.note-body{
    margin-top:15px;
    text-align:center;
    font-size:15px;
}
</style>


<div class="page">

<!-- CREATE NOTE FORM -->
<div class="form-card">

    <h2>Create Note</h2>

        <form action="{{ route('notes.store') }}" method="POST">
        @csrf

        <input type="text" name="title" placeholder="Title" required>

        <textarea name="body" placeholder="Write your note..." required></textarea>

        <input type="text" name="author" placeholder="Author" required>

        <button type="submit">Save Note</button>

        </form>

</div>


<!-- NOTES DISPLAY -->
<div class="notes">

    <h2>Your Notes</h2>

    @foreach($notes as $note)

        <div class="note-card">

        <div class="note-header">
        <div class="note-title">{{ $note->title }}</div>
        <div class="note-author">- {{ $note->author }}</div>
        </div>

        <div class="note-body">
        {{ $note->body }}
        </div>

        <form action="{{ route('notes.delete',$note->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete this note</button>
        </form>
        </div>

    @endforeach

</div>

</div>

@endsection