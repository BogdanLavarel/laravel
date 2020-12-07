<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function index($id){
        return view('user.form', ['id'=>$id]);

    }
    public function indexPost(Request $request){
        $name = $request->post('name');
        $email = $request->post('email');
        $password = $request->post('password');
        $repeat_password = $request->post('repeat_password');
        dd($name, $email, $repeat_password, $password);

    }
}
