<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class HomeController extends Controller
{
  public function index()
{
  $user_id = auth()->user()->id;
  $user = User::find($user_id);
  return view('home')->with('posts', $user->posts);
}
}
