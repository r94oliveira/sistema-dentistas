<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidade;

class EspecialidadeController extends Controller
{
    public function index(){
        $especialidades = Especialidade::paginate(5)->fragment('especialidades');
        return view('especialidades.index', ['especialidades' => $especialidades]);
    }

    public function cadastro(){
        return view('especialidades.cadastro');
    }

    public function cadastrar(Request $request){
        $data = $request->validate([
            'nome' => 'required'
        ]);

        $newEspecialidade = Especialidade::create($data);

        return redirect(route('especialidade.index'))->with('success', 'Especialidade cadastrada com sucesso!');

    }

    public function edicao(Especialidade $especialidade){
        return view('especialidades.edicao', ['especialidade' => $especialidade]);
    }

    public function editar(Especialidade $especialidade, Request $request){
        $data = $request->validate([
            'nome' => 'required'
        ]);

        $especialidade->update($data);

        return redirect(route('especialidade.index'))->with('success', 'Especialidade editada com sucesso!');

    }

    public function excluir(Especialidade $especialidade){
        $especialidade->delete();
        return redirect(route('especialidade.index'))->with('success', 'Especialidade excluída com sucesso!');
    }

    public function buscar(Request $request) {

        if (request('search')) {
            $especialidades = Especialidade::where('nome', 'like', '%'.request('search').'%')
            ->paginate(5);
        } else {
            $especialidades = Especialidade::paginate(5)->fragment('especialidades');
        }

        return view('especialidades.index', ['especialidades' => $especialidades]);

    }
   
}
