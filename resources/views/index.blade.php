<!DOCTYPE html>
<html>
<head>
    <title>Events</title>
</head>
    <body>
        <h1>Upcoming Events</h1>
        @foreach($events as $event)
        <div>
            <h2>{{$event->name}}</h2> 
           <p> {{ $event->description }}</p> 
           <p> {{ $event->date }} at {{$event->time }} </p>
            <p>{{ $event->location }} </p>
            <form action="{{ route('events.book',$event->id}}" method="POST">
                @csrf
                <button type = "submit">Book Now></button>
            </form>
        </div>
        @endforeach
    </body>
</html>



@extends('layouts.app')

@section('content')
    <h1>{{ $event->name }}</h1>
    <p>{{ $event->description }}</p>
    <p>{{ $event->location }} - {{ $event->date_time }}</p>

    @auth
        <form action="{{ route('events.book', $event->id) }}" method="POST">
            @csrf
            <button type="submit">Book Now</button>
        </form>
    @endauth
    </form>
    @endauth
@endsection
