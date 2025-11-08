<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  function userHome(){
    $name= "Nikesh Chaudhari";

    return view ("home",['user'=>$name]);
  }
  function about(){
    return view("about");

  }
}
