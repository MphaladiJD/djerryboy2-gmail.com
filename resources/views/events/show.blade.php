@extends('layouts.app')

@section('content')
    <h1>{{ $event->name }}</h1>
    <p>{{ $event->description }}</p>
    <p>{{ $event->location }} - {{ $event->date_time }}</p>

    @auth
        <form action="{{ route('events.book', $event->id) }}" method="POST">
            @csrf
            <button type="submit">Book Now</button>
