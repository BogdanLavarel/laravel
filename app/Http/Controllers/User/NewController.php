<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class NewController extends Controller
{
    public function add()
    {
        return view('user.new');
    }
}