<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
 
class UserController extends Controller
{
  public function func() {
    return view('user/top');
  }

  public function login() {
    return view('user/login');
  }

  public function register() {
    return view('user/register');
  }


}