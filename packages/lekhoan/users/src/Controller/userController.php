<?php

namespace lekhoan\users\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        dd(config('roles.le'));
        return view('users::baby.xinchao');
    }
}
