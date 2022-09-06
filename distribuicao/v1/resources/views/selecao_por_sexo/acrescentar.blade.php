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
                        Policial SD {{ $policial->nome }}, matrícula {{ $policial->matricula}},
                        você confirma sua escolha para servir na OPM {{ $opm->sigla}}?
                        @isset($mensagem)
                            <div class="alert alert-danger" role="alert">
                                <p>Obs: {{$mensagem}} </p>
                            </div>
                        @endisset
                    </h1>
                </div>
                <div class="card-footer">
                    @if ($mensagem == '')
                        <form action="{{ route('selecao_por_sexo.confirmar', [$opm->id, $policial->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success">Confirmar</button>
                            <a href="{{ route('selecao_por_sexo.listar') }}"  class="btn btn-danger">Cancelar</a>
                        </form>
                    @else
                        <a href="{{ route('selecao_por_sexo.listar') }}"  class="btn btn-danger">Cancelar</a>
                    @endif
                </div>
              </div>
        </div>
    </div>
@stop
