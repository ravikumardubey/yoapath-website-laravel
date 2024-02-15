<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   function adminlogin()
   {
      return view("admin/index");
   }

   function forgotpassword()
   {
      return view("admin/forgot-password");
   }

   public  function loginUser(Request $request){
      $email= $request->email;
      $password =$request->password;
   }
}
