<h1>Upcoming Events</h1>
<ul>
    @foreach($events as $event)
    <li>
        {{ $event->name}}({{$event->date}})
    </li>
    @endforeach
</ul>