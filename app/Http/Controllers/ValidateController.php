<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;

class ValidateController extends Controller
{
  public function liberar()
    {

    $nombre=User::all();
    return view('adminlte::home');
    }


}
