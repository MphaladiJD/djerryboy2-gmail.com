<h1>Create Event</h1>
<form action="{{route('events.store')}}" method =" POST">
    @csrf
    <label for="name">Event name</label>
    <input type="text" name="name"><br><br>
    <label for="date">Event Date</label>
    <input type="date" name="date"><br><br>
    <input type="submit" value="Create Event">
</form>