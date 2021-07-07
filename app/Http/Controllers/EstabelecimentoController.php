<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estabelecimento;

class EstabelecimentoController extends Controller
{
    // Create Local
    public function createLocal(Request $request) {
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

    // Visualizar dados do Local
    public function show($id) {
        $user = Estabelecimento::findOrFail($id);
        return view('funcoes.editLocal', ['user' => $user]);
    }

    // Atualizar dados do Local
    public function updateLocal(Request $request, $id) {
        $user = Estabelecimento::findOrFail($id);

        $user->update([
            'proprietario' => $request->proprietario,
            'tipo' => $request->tipo,
            'nomeLocal' => $request->nomeLocal,
            'emailProprietario' => $request->emailProprietario,
            'cidadeLocal' => $request->cidadeLocal,
            'telefoneLocal' => $request->telefoneLocal
        ]);

        return view('cadastro');
    }

    // Deletar dados Local
    public function deleteLocal($id) {
        $user = Estabelecimento::findOrFail($id);
        return view('funcoes.deleteLocal', ['user' => $user]);
    }

    public function destroy($id) {
        $user = Estabelecimento::findOrFail($id);
        $user->delete();
        return view('cadastro');
    }
}
