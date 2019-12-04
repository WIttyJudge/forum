<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends BaseController
{
    /**
     * Display a main page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('event.index');
    }
}
