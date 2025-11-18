<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   function addUser(Request $req){
    $message=[
      'name.required'=>"Name is mandatory!"
    ];
    $req->validate([
      'name'=> 'required |min:5|max:15 ',
      'email'=> 'required |email ',
      'city'=> 'required',
      'skill'=> 'required',
     
    ],$message);

    return $req;
   }
}
