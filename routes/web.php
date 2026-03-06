<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

route::get('/notes/main', [NoteController::class,'index'])->name('notes.main');

route::post('/notes/store', [NoteController::class,'store'])->name('notes.store');

route::delete('notes/{note}', [NoteController::class,'destroy'])->name('notes.delete');