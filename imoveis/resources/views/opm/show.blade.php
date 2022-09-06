@extends('adminlte::page')

@section('title', 'OPM')

@section('content')
    <div class="pt-4">
        <div class="card card-secondary">
            <div class="card-header">
                Formulário de Cadastro de OPM
            </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="sigla">Sigla</label>
                            <input disabled class="form-control" type="text" name="sigla" id="sigla" value="{{ $objeto->sigla }}">
                        </div>
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input disabled class="form-control" type="text" name="nome" id="nome" value="{{ $objeto->nome }}">
                        </div>
                        <div class="form-group">
                            <label for="imovel">Imóvel</label>
                            <input disabled class="form-control" type="text" name="imovel" id="imovel" value="{{ $objeto->imovel->nome }}">
                        </div>
                        <div class="form-group">
                            <label for="bairro">Bairro</label>
                            <input disabled class="form-control" type="text" name="bairro" id="bairro" value="{{ $objeto->imovel->bairro->nome }}">
                        </div>
                        <div class="form-group">
                            <label for="cidade">Cidade</label>
                            <input disabled class="form-control" type="text" name="cidade" id="cidade" value="{{ $objeto->imovel->bairro->cidade->nome }}">
                        </div>
                        <div class="form-group">
                            <label for="uf">UF</label>
                            <input disabled class="form-control" type="text" name="uf" id="uf" value="{{ $objeto->imovel->bairro->cidade->uf->sigla }}">
                        </div>

                    </div>
                    <div class="card-footer">
                        <a class="btn ml-2 mr-2 btn-outline-primary" href="{{ route('opm.index')}}">Voltar</a>
                    </div>
        </div>
    </div>
@stop

