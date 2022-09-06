@extends('adminlte::page')

@section('title', 'Cidade')

@section('content')
    <div class="pt-4">
        <div class="card card-secondary">
            <div class="card-header">
                Formulário de Cadastro de Cidade
            </div>
                    <div class="card-body">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input disabled class="form-control" type="text" name="nome" id="nome" value="{{ $objeto->nome }}">
                            </div>
                            <div class="form-group">
                                <label for="uf">Uf</label>
                                <input disabled class="form-control
                                type="text" name="uf" id="uf" value="{{ $objeto->uf->sigla }}">
                            </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn ml-2 mr-2 btn-outline-primary" href="{{ route('cidade.index')}}">Voltar</a>
                    </div>
        </div>
    </div>
@stop

