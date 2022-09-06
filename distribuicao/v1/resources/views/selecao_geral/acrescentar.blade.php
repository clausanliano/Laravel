@extends('adminlte::page')

@section('title', 'Vagas')


@section('content')
    <div class="container-fluid">
        <div class="row"> &nbsp;        </div>
        <div class="row">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">CONFIRMAÇÃO</h3>
                </div>
                <div class="card-body">
                    <h1>
                        Policial SD <span class="badge badge-primary">{{ $policial->nome }}</span>, matrícula <span class="badge badge-primary">{{ $policial->matricula}}</span>,
                        você confirma sua escolha para servir na OPM <span class="badge badge-primary">{{ $opm->sigla}}</span> na cidade de  <span class="badge badge-primary">{{ $opm->cidade->nome}}</span> ?
                        @isset($mensagem)
                            <div class="alert alert-danger" role="alert">
                                <p>Obs: {{$mensagem}} </p>
                            </div>
                        @endisset
                    </h1>

                    @if ($opm->observacao <> '')
                    <div class="alert alert-danger" role="alert">
                        <h1>{{$opm->observacao}}</h1>
                    </div>

                    @endif
                </div>
                <div class="card-footer">
                    <form action="{{ route('selecao_geral.confirmar', [$opm->id, $policial->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-success">Confirmar</button>
                        <a href="{{ route('selecao_geral.listar') }}"  class="btn btn-danger">Cancelar</a>
                    </form>
                </div>
              </div>
        </div>
    </div>
@stop
