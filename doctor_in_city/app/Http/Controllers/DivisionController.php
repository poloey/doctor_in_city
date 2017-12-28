<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;

class DivisionController extends Controller
{
  public function index(Division $division)
  {
    return view('division.index', compact('division'));
  }
}
