<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplineController extends Controller
{
  /**
   * showing all disciplines
   * @return view;
   */
  public function index()
  {
    $disciplines = Discipline::all();
    return view('discipline.index', compact('disciplines'));
  }

  /**
   * showing single discipline
   * @param String $slug 
   * @return view  
   */
  public function show($slug)
  {
    $division = Discipline::where('slug', $slug)->first();
    return view('discipline.show', compact('division'));
  }
}
