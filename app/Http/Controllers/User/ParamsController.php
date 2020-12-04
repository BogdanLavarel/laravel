<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParamsController extends Controller
{
    public function index($id)
    {
        return view('user.main', ['id'=>$id]);
    }

    public function indexPost(Request $request)
    {
        $name = $request->post('name');
        $test = $request->post('test');
        dd($name, $test);

    }
}
