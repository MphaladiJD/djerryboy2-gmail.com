<?php
namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;


class HomeController extends Controller

{
    public function index()
    {
        $events=Event::where('date', '>=', now()->toDateString())
        ->orderBy('date')
        ->orderBy('time')
       ->get();
        
        return view('Home',compact('events'));
    }


}