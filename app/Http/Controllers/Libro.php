<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Libro extends Controller
{
    public function index(){
        $libros=DB::table('libro')->get();
        return view('libro.listado', ['li'=>$libros]);
     }
}