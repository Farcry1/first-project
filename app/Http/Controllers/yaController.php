<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class yaController extends Controller
{

public function view(){


return view('home');



}

public function input(Request $request){


$pe = new Person();

$pe -> name = $request -> input('name');
$pe -> email = $request -> input('email');
$pe -> number = $request -> input('number');
$pe -> text = $request -> input('text');
$pe->save();
return redirect('home');
$pe->$request->all();
dd($pe);



}


public function user($product){

$name =[

'apple'=>'apple',
'samsung'=>'samsung',
'nokia'=>'nokia'

];

return view('product',

['products'=>$name[$product]??'your product '.$product.' not founde']) ;



}


}
