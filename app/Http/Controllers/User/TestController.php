<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function show()
    {
        return view('user.test');
    }
}