<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{
  public function index(Doctor $doctor)
  {
    return view('doctor.index');
  }
}
