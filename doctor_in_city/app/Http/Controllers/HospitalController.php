<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospitalController extends Controller
{
  public function index(Hospital $hospital)
  {
    return view('hospital.index', compact('hospital'));
  }
}
