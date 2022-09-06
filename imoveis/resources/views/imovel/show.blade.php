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
                    <input disabled class="form-control"
                    type="text" name="nome" id="nome" value="{{ $objeto->nome }}">
                </div>
                <div class="form-group">
                    <label for="logradouro">Logradouro</label>
                    <input disabled class="form-control"
                    type="text" name="logradouro" id="logradouro" value="{{ $objeto->logradouro }}">
                </div>
                <div class="form-group">
                    <label for="numero">Número</label>
                    <input disabled class="form-control"
                    type="text" name="numero" id="numero" value="{{ $objeto->numero }}">
                </div>

                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input disabled class="form-control"
                    type="text" name="bairro" id="bairro"
                    value="{{ $objeto->bairro->nome }}, {{ $objeto->bairro->cidade->nome}}/{{ $objeto->bairro->cidade->uf->sigla}}">
                </div>

                <div class="form-group">
                    <label for="CEP">CEP</label>
                    <input disabled class="form-control"
                    type="text" name="CEP" id="CEP" value="{{ $objeto->CEP }}">
                </div>

                <div class="form-group">
                    <label for="referencia">Ponto de referência</label>
                    <input disabled class="form-control"
                    type="text" name="referencia" id="referencia" value="{{ $objeto->referencia }}">
                </div>

                <div class="form-group">
                    <label for="complemento">Complemento</label>
                    <input disabled class="form-control"
                    type="text" name="complemento" id="complemento" value="{{ $objeto->complemento }}">
                </div>
                <div class="form-group">
                    <label for="latitude">latitude</label>
                    <input disabled class="form-control"
                    type="text" name="latitude" id="latitude" value="{{ $objeto->latitude }}">
                </div>
                <div class="form-group">
                    <label for="longitude">longitude</label>
                    <input disabled class="form-control"
                    type="text" name="longitude" id="longitude" value="{{ $objeto->longitude }}">
                </div>
                <div class="form-group">
                    <label for="observacao">Observação</label>
                    <textarea disabled class="form-control"
                    name="observacao" id="v" cols="30" rows="5">{{ $objeto->observacao }}</textarea>
                </div>

        </div>
        <div class="card-footer">
                    <a class="btn ml-2 mr-2 btn-outline-primary" href="{{ route('imovel.index')}}">Voltar</a>
                </div>
        </div>
    </div>
@stop

