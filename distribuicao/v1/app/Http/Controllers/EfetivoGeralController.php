<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Models\Opm;
use App\Models\Policial;
use Illuminate\Http\Request;

class EfetivoGeralController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $policial = Policial::whereNull('opm_id')->first();
        $collection = array();
        $opms = Opm::all()->sortBy("nome");
        foreach ($opms as $opm) {
            if($opm->vagas_unisex_remanecentes() > 0){
                $collection[] = $opm;
            }
        }
        return view('selecao_geral.dashboard')->with(compact('collection', 'policial'));
    }


    public function acrescentar($opm_id, $policial_id)
    {
        $opm = Opm::findOrFail($opm_id);
        $policial = Policial::findOrFail($policial_id);

        $mensagem = null;

        if ( $opm->vagas_unisex_remanecentes() <= 0){
            $mensagem = 'Não há vaga para especpfica para o sexo do policial!!';
        }

        return view('selecao_geral.acrescentar')->with(compact('opm','policial', 'mensagem'));
    }

    public function confirmar($opm_id, $policial_id)
    {
        $opm = Opm::findOrFail($opm_id);
        $policial = Policial::findOrFail($policial_id);

        if ($opm->vagas_unisex_remanecentes() > 0) {
            $policial->opm_id = $opm->id;
            $policial->save();
        }


        return redirect()->route('selecao_geral.listar');
    }

}
