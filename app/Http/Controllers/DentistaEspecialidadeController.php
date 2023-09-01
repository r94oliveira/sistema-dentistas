<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dentista;
use App\Models\Especialidade;
use App\Models\DentistaEspecialidade;

class DentistaEspecialidadeController extends Controller
{

    public function index(Dentista $dentista)
    {

        $dentistaEspecialidades = Dentista::find($dentista->id)->especialidade;
        $dentista = Dentista::find($dentista->id);
        $especialidades = Especialidade::orderBy('nome', 'asc')->get();
        return view('dentistasEspecialidades.index', ['dentistaEspecialidades' => $dentistaEspecialidades, 'especialidades' => $especialidades, 'dentista' => $dentista]);
    }

    public function adicionar(Especialidade $especialidade, Dentista $dentista, Request $request)
    {
        $dentistaEspecialidades = Dentista::find($dentista->id)->especialidade;
        $ids = [$dentista->id, $request->input('especialidade_id')];

        if ($dentistaEspecialidades->contains('id', $request->input('especialidade_id'))) {
            return $this->index($dentista);
        }
        $dentista->especialidade()->attach($ids);
        return $this->index($dentista);
    }

    public function remover(Especialidade $especialidade, Dentista $dentista, Request $request)
    {
        $dentistaEspecialidades = Dentista::find($dentista->id)->especialidade;
        $ids = [$dentista->id, $request->input('especialidade_id')];
        $dentista->especialidade()->detach($ids);
        return $this->index($dentista);
    }
}
