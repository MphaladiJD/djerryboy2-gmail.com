Public function handle($request, Closure $next)
{
    If (auth()->user() && auth()->user()->role === 'admin') {
        Return $next($request);
    }
    Return redirect('/')->with('error', 'You are not authorized.');
}

<h1>Admin Dashboard</h1>
<h2>Events</h2>
@foreach($events as $event)
    <p>{{ $event->name }}</p>
@endforeach

<h2>Bookings</h2>
@foreach($bookings as $booking)
    <p>Booking ID: {{ $booking->id }} – User: {{ $booking->user->name }} – Event: {{ $booking->event->name }}</p>
@endforeach
<form action="{{ route('events.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Event Name”">
    <textarea name="description" placeholder="Event Description"></textarea>
    <input type="text" name="location"placeholder="Location">
    <input type="datetime-local" name="date_time">
    <input type="number" name="max_attendees" placeholder="Max Attendees">
    <button type="submit">Create Event</button>
</form>
@foreach($events as $event)
    <h2>{{ $event->name }}</h2>
    <p>{{ $event->description }}</p>
    <p>{{ $event->location }}</p>
    <p>{{ $event->date_time }}</p>
    <form action="{{ route('events.book', $event) }}" method="POST">
        @csrf
        <button type="submit">Book</button>
    </form>
@endforeach
