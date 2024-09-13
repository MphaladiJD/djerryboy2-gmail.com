
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Booking;

class AdminController extends Controller
{
    public function dashboard()
    {
        $events=Event::all();
        $bookings=Booking::all();
        return view('admin.dashboard', compact('eventsCount','bookingsCount'));
    }

}


Public function handle($request, Closure $next)
{
    If(auth()->check() && auth()->user()->role === 'admin') {
        return $next($request);
    }

    return redirect('/')->with('error', 'Unauthorized access');
}

