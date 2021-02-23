<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function home(){
      return view ('home');
    }

    public function students(){
      return view ('students');
    }

    public function class(){
      return view ('class');
    }
}
