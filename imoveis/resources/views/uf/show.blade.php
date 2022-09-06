@extends('adminlte::page')

@section('title', 'UF')

@section('content')
    <div class="pt-4">
        <div class="card card-secondary">
            <div class="card-header">
                Formulário de Cadastro de UF
            </div>
                    <div class="card-body">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input disabled class="form-control" type="text" name="nome" id="nome" value="{{ $objeto->nome }}">
                            </div>
                            <div class="form-group">
                                <label for="sigla">Sigla</label>
                                <input disabled class="form-control
                                type="text" name="sigla" id="sigla" value="{{ $objeto->sigla }}">
                            </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn ml-2 mr-2 btn-outline-primary" href="{{ route('uf.index')}}">Voltar</a>
                    </div>
        </div>
    </div>
@stop

