<?php

Namespace App\Http\Controllers;

Use App\Models\Booking;
Use App\Models\Event;
Use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;

Class BookingController extends Controller
{
    // Book an event
    Public function store(Request $request, Event $event)
    {
        $user = Auth::user();

        // Check if the event is fully booked
        If ($event->bookings()->count() >= $event->max_attendees) {
            return redirect()->back()->with('error', 'Event is fully booked.');
        }

        // Create booking
        Booking:: create([
            'user_id' => $user->id,
            'event_id'=> $event->id,
        ]);

    return redirect()->route('events.show', $event->id)
            ->with('success', 'Booking confirmed!');
    }
}
