<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospital;

class HospitalController extends Controller
{
  public function index($slug)
  {
    $hospital = Hospital::where('slug', $slug)->first();
    return view('hospital.index', compact('hospital'));
  }
}
