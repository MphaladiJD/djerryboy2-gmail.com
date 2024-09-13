<h1>Book Event</h1>
<form  action ="{{route('bookings.store'}}" method ="POST">

@csrf

<label>Name</label>
<input type="text" name="name" placeholder="Event Name"> 
<label>Email</label>
<input type="email" name="email" ><br><br>
<input type="submit" value="Book Event">
></form>