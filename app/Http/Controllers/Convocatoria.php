<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\File;

class Convocatoria extends Controller
{
    public function index(){

        $files = File::paginate(1);
        return view('inicio2');
    }
}
