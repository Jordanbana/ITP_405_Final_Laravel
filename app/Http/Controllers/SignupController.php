<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use DB;

class SignupController extends Controller
{
  public function index()
  {
      return view('signup');
  }

  public function signup()
  {
      $user = new User();
      $user->email = request('email');
      $user->password = Hash::make(request('password'));
      // $user->save();
      DB::table('users')->insert([
          'email' => request('email'),
          'password' => Hash::make(request('password'))
      ]);

      return redirect('/login');
  }
}
