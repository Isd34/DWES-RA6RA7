<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

    class HolaController extends Controller{
        public function index(){
            $mensaje = "Hello World from MVC!";
            return view('hola', compact ('mensaje'));
        }
    }

?>