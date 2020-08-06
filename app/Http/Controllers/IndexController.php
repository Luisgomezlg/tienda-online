<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
class IndexController extends Controller
{
    //
    public function index(){
      $eventos = Evento::all();
      return view('welcome', ['eventos' => $eventos]);
    }
}
