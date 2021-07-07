<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artista;

class ArtistaController extends Controller
{
    // Create Artista
    public function createArtista(Request $request) {
        Artista::create([
            'artista' => $request->artista,
            'genero' => $request->genero,
            'emailArtista' => $request->emailArtista,
            'cidadeArtista' => $request->cidadeArtista,
            'telefoneArtista' => $request->telefoneArtista
        ]);

        return view('cadastro');
    }

    // Visualizar dados do Artista
    public function show($id) {
        $user = Artista::findOrFail($id);
        return view('funcoes.editArtista', ['user' => $user]);
    }

    // Atualizar dados do Artista
    public function updateArtista(Request $request, $id) {
        $user = Artista::findOrFail($id);

        $user->update([
            'artista' => $request->artista,
            'genero' => $request->genero,
            'emailArtista' => $request->emailArtista,
            'cidadeArtista' => $request->cidadeArtista,
            'telefoneArtista' => $request->telefoneArtista
        ]);

        return view('cadastro');
    }

    // Deletar dados Artista
    public function deleteArtista($id) {
        $user = Artista::findOrFail($id);
        return view('funcoes.deleteArtista', ['user' => $user]);
    }

    public function destroy($id) {
        $user = Artista::findOrFail($id);
        $user->delete();
        return view('cadastro');
    }
}
