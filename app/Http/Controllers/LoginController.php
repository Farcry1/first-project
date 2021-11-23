<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function view(){


    return view('test');



    }


    public function in(Request $request){


$ta = new Login();
$ta -> name = $request -> input('name');
$ta -> email = $request -> input('email');
$ta -> number = $request -> input('number');
$ta -> text = $request -> input('text');
$ta->save();
return redirect('test');
$ta->$request->all();
dd($ta);




    }
}
