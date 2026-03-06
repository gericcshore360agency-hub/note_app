@extends('layout.design')

@section('content')

<div class="home-wrapper">

    <div class="start-card">
        <h2>Let's Start Writing!</h2>

        <a href="{{ route('notes.main') }}" class="start-btn" style="text-decoration: none;">Write</a>
</div>

@endsection