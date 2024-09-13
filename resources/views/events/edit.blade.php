<h1>Edit Event</h1>
<form method="POST"
action="{{route('events.update',
$event->$id)}}">
@csrf
@method('PUT')
<label>Name</label>
<input type="text" name="name" 
value="{{$event->name}}"><br><br>
<label>Date:</label>
<input type="date" name="date" 
value="{{$event->date}}"><br><br>
<label>Location:</label>
<input type="text" name="location" 
value="{{$event->location}}"><br><br>
<input type="submit" value="Update Event"> 



</form>