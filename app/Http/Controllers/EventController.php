<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class EventController extends Controller
{
    public function index()
    {   
        $Events = Events::all();
        return view('welcome',['events' => $Events]);
    }
    
    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request){
        $event = new Events();
    
        $event->title = $request->title;
        $event->description = $request->description;
        $event->location = $request->location;
        $event->private = $request->private ?? 0; 
    
        $event->save();
        
        return redirect('/')->with('success', 'Evento criado com sucesso!');
    }
        public function contact()
    {
        return view('contact');
    }
}
