<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event()
    {
        return view('event');
    }

    public function index(){
        return view('events');
    }
}
