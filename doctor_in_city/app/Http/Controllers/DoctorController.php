<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{
  public function index($slug)
  {
    $doctor = Doctor::where('slug', $slug)->first();
    return view('doctor.index', compact('doctor'));
  }
}
