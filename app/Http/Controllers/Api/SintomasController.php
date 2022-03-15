<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sintoma;

class SintomasController extends Controller
{
    public function index() {
        //pedir datos especificos
        $sintomas = Sintoma::select('id', 'sintoma')->get();
        return $sintomas;
    }
}
