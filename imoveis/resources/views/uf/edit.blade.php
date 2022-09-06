@extends('adminlte::page')

@section('title', 'UF')

@section('content')
    <div class="pt-4">
        <div class="card card-secondary">
            <div class="card-header">
                Formulário de Cadastro de UF
            </div>
                @if ($objeto->id == 0)
                    <form action="{{ route('uf.store')}}" method="POST">
                @else
                    <form action="{{ route('uf.update', $objeto->id )}}" method="POST">
                    @method('PUT')
                @endif
                    @csrf
                    <div class="card-body">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input class="form-control @error('nome') is-invalid @enderror"
                                type="text" name="nome" id="nome" value="{{ old('nome', $objeto->nome) }}">
                                @error('nome')
                                    <div class="badge badge-danger" >{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="sigla">Sigla</label>
                                <input class="form-control @error('sigla') is-invalid @enderror"
                                type="text" name="sigla" id="sigla" value="{{ old('sigla', $objeto->sigla) }}">
                                @error('sigla')
                                    <div class="badge badge-danger" >{{ $message }}</div>
                                @enderror
                            </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn ml-2 mr-2 btn-outline-success" type="submit">Salvar</button>
                        <a class="btn ml-2 mr-2 btn-outline-danger" href="{{ route('uf.index')}}">Cancelar</a>
                    </div>
                </form>
        </div>
    </div>
@stop

