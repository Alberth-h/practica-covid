<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\TipoUsuario;

class TiposUsuarioController extends Controller
{
    public function index() {
        $tiposusuario = TipoUsuario::select('id', 'descripcion')->get();
        return $tiposusuario;
    }
}
