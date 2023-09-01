<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dentista;

class DentistaController extends Controller
{
    public function index(){
        $dentistas = Dentista::paginate(5)->fragment('dentistas');
        return view('dentistas.index', ['dentistas' => $dentistas]);
    }

    public function cadastro(){
        return view('dentistas.cadastro');
    }

    public function cadastrar(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'cro' => 'required|numeric',
            'cro_uf' => 'required'
        ]);

        $newDentista = Dentista::create($data);

        return redirect(route('dentista.index'))->with('success', 'Dentista cadastrado com sucesso!');

    }

    public function edicao(Dentista $dentista){
        return view('dentistas.edicao', ['dentista' => $dentista]);
    }

    public function editar(Dentista $dentista, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'cro' => 'required|numeric',
            'cro_uf' => 'required'
        ]);

        $dentista->update($data);

        return redirect(route('dentista.index'))->with('success', 'Dentista editado com sucesso!');

    }

    public function excluir(Dentista $dentista){
        $dentista->delete();
        return redirect(route('dentista.index'))->with('success', 'Dentista excluído com sucesso!');
    }

    public function buscar(Request $request) {

        if (request('search')) {
            $dentistas = Dentista::where('name', 'like', '%'.request('search').'%')
            ->orWhere('email', 'like', '%'.request('search').'%')
            ->orWhere('cro', 'like', '%'.request('search').'%')
            ->orWhere('cro_uf', 'like', '%'.request('search').'%')
            ->paginate(5);
        } else {
            $dentistas = Dentista::paginate(5)->fragment('dentistas');
        }

        return view('dentistas.index', ['dentistas' => $dentistas]);

    }

}
