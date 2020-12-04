<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function main()
    {
        return view('user.main', ['name' => 'Inna', 'arr' => ['Bogdan', "Alex", "Petr"],
            'html' => '<h2>Заголовок</h2>']);
    }
}
