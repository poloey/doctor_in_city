<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;

class DivisionController extends Controller
{
  public function index($slug)
  {
    $division = Division::where('slug', $slug)->first();
    return view('division.index', compact('division'));
  }
}
