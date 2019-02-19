<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
   public function daftar(Request $req)
   {
   $data = user::where('name','like',"%{$req->keyword}%")->paginate(10);
   return view('admin.pages.user.daftar',['data'=>$data]);
   }
}
