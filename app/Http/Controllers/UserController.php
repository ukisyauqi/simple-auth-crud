<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function register(Request $request) {
    $incomingField = $request->validate([
      'name' => ['required', 'min:3', 'max:10'],
      'email' => ['required','email'],
      'password' => ['required', 'min:8', 'max:100'],
    ]);
    dd($incomingField);
  }
}
