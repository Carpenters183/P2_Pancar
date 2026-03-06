<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashC extends Controller
{
  public function admin()
  {
    return view('backend.dash');
  }

  public function agent()
  {
    return view('backend.dashboard.agen');
  }

  public function jemaah()
  {
    return view('backend.dashboard.jemaah');
  }
}
