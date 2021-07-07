<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    // Navegação para o index
    public function verIndex() {
        return view('index');
    }

    // Navegação para objetivo
    public function verObjetivos() {
        return view('objetivos');
    }

    // Navegação para cadastro
    public function verFormulario() {
        return view('cadastro');
    }
}
