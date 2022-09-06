<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Models\Opm;
use App\Models\Policial;
use Hamcrest\Type\IsString;
use Illuminate\Http\Request;

class EfetivoPorSexoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $policial = Policial::whereNull('opm_id')->first();
        $collection = array();
        $opms = Opm::all();
        foreach ($opms as $opm) {
            if (isset($policial)){
                if ($policial->sexo == 'Masculino'  && $opm->vagas_masculinas_remanecentes() > 0) {
                    $collection[] = $opm;
                }
                if ($policial->sexo == 'Feminino'  && $opm->vagas_femininas_remanecentes() > 0) {
                    $collection[] = $opm;
                }
            }
        }
        return view('selecao_por_sexo.dashboard')->with(compact('collection', 'policial'));
    }

    public function acrescentar($opm_id, $policial_id)
    {
        $opm = Opm::findOrFail($opm_id);
        $policial = Policial::findOrFail($policial_id);

        $mensagem = null;

        if (
            ($policial->sexo == 'Masculino'  && $opm->vagas_masculinas_remanecentes() <= 0) ||
            ($policial->sexo == 'Feminino' && $opm->vagas_femininas_remanecentes() <= 0)
        ){
            $mensagem = 'Não há vaga para específica para o sexo do policial!!';
        }


        return view('selecao_por_sexo.acrescentar')->with(compact('opm','policial', 'mensagem'));
    }

    public function confirmar($opm_id, $policial_id)
    {
        $opm = Opm::findOrFail($opm_id);
        $policial = Policial::findOrFail($policial_id);

        if ($policial->sexo == 'Masculino'  && $opm->vagas_masculinas_remanecentes() > 0) {
            $policial->opm_id = $opm->id;
            $policial->save();
        }

        if ($policial->sexo == 'Feminino'  && $opm->vagas_femininas_remanecentes() > 0) {
            $policial->opm_id = $opm->id;
            $policial->save();
        }

        return redirect()->route('selecao_por_sexo.listar');
    }

}
