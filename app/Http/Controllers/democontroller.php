<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Controllers\HomeController;
use App\Events\HelloEvent;

class democontroller extends Controller
{
    public function index()
    {
        $home  = new HomeController();
        $home->getAll();
    }

    public function event()
    {
        $data = "12345";
        event(new HelloEvent($data));
    }
}
