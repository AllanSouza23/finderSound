<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artista;
use App\Estabelecimento;

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

    // Create Artista
    public function criacaoArtista(Request $request) {
        Artista::create([
            'artista' => $request->artista,
            'genero' => $request->genero,
            'emailArtista' => $request->emailArtista,
            'cidadeArtista' => $request->cidadeArtista,
            'telefoneArtista' => $request->telefoneArtista
        ]);

        return view('cadastro');
    }

    // Create Local
    public function criacaoLocal(Request $request) {
        Estabelecimento::create([
            'proprietario' => $request->proprietario,
            'tipo' => $request->tipo,
            'nomeLocal' => $request->nomeLocal,
            'emailProprietario' => $request->emailProprietario,
            'cidadeLocal' => $request->cidadeLocal,
            'telefoneLocal' => $request->telefoneLocal
        ]);

        return view('cadastro');
    }
}
