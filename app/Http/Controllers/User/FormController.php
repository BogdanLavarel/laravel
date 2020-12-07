<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{


    public function index($id)
    {
        return view('user.form', ['id'=>$id]);
    }
    public function indexPost(Request $request)
    {
        $name = $request->post('name');
        $test = $request->post('email');
        dd($name, $test);

    }
}
