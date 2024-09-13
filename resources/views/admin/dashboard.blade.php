<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
    <body>
        <h1>Admin Dashboard</h1>
        <h2>Events</h2>
        @foreach($events as $event)
        <div>
            <h3>{{$event->name}}</h3> 
           <p> {{ $event->description }}</p> 
           <p> {{ $event->date }} at {{$event->time }} </p>
            
        </div>
        @endforeach
        <h2>Bookings</h2>
        @foreach($bookings as $booking)
        <div>
            <p>User ID: {{ $booking->user_id }}</p>
            <p>Event ID: {{ $booking->event_id }}</p>
            <p>Booking Date: {{ $booking->booking_date }}</p>
            </div>
            @endforeach
    </body>
</html>