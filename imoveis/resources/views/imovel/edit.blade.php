@extends('adminlte::page')

@section('title', 'Imóvel')

@section('content')
    <div class="pt-4">
        <div class="card card-secondary">
            <div class="card-header">
                Formulário de Cadastro de Imóvel
            </div>
                @if ($objeto->id == 0)
                    <form action="{{ route('imovel.store')}}" method="POST">
                @else
                    <form action="{{ route('imovel.update', $objeto->id )}}" method="POST">
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
                                <label for="logradouro">Logradouro</label>
                                <input class="form-control @error('logradouro') is-invalid @enderror"
                                type="text" name="logradouro" id="logradouro" value="{{ old('logradouro', $objeto->logradouro) }}">
                                @error('logradouro')
                                    <div class="badge badge-danger" >{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="numero">Número</label>
                                <input class="form-control @error('numero') is-invalid @enderror"
                                type="text" name="numero" id="numero" value="{{ old('numero', $objeto->numero) }}">
                                @error('numero')
                                    <div class="badge badge-danger" >{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="bairro_id">Bairro</label>
                                <select class="form-control @error('bairro_id') is-invalid @enderror" name="bairro_id" id="bairro_id" >
                                    @forelse ($bairros as $bairro)
                                        <option @if ($bairro->id == $objeto->bairro_id) selected @endif value="{{ $bairro->id }}">{{ $bairro->nome }}, {{ $bairro->cidade->nome}}/{{ $bairro->cidade->uf->sigla}}</option>
                                    @empty
                                        <option value="">Não há UFs cadastradas</option>
                                    @endforelse
                                </select>
                                @error('bairro_id')
                                    <div class="badge badge-danger" >{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="CEP">CEP</label>
                                <input class="form-control @error('CEP') is-invalid @enderror"
                                type="text" name="CEP" id="CEP" value="{{ old('CEP', $objeto->CEP) }}">
                                @error('CEP')
                                    <div class="badge badge-danger" >{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="referencia">Ponto de referência</label>
                                <input class="form-control @error('referencia') is-invalid @enderror"
                                type="text" name="referencia" id="referencia" value="{{ old('referencia', $objeto->referencia) }}">
                                @error('referencia')
                                    <div class="badge badge-danger" >{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="complemento">Complemento</label>
                                <input class="form-control @error('complemento') is-invalid @enderror"
                                type="text" name="complemento" id="complemento" value="{{ old('complemento', $objeto->complemento) }}">
                                @error('complemento')
                                    <div class="badge badge-danger" >{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="latitude">latitude</label>
                                <input class="form-control @error('latitude') is-invalid @enderror"
                                type="text" name="latitude" id="latitude" value="{{ old('latitude', $objeto->latitude) }}">
                                @error('latitude')
                                    <div class="badge badge-danger" >{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="longitude">longitude</label>
                                <input class="form-control @error('longitude') is-invalid @enderror"
                                type="text" name="longitude" id="longitude" value="{{ old('longitude', $objeto->longitude) }}">
                                @error('longitude')
                                    <div class="badge badge-danger" >{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="observacao">Observação</label>
                                <textarea class="form-control @error('observacao') is-invalid @enderror"
                                name="observacao" id="v" cols="30" rows="5">{{ old('observacao', $objeto->observacao) }}</textarea>
                                @error('observacao')
                                    <div class="badge badge-danger" >{{ $message }}</div>
                                @enderror
                            </div>

                    </div>
                    <div class="card-footer">
                        <button class="btn ml-2 mr-2 btn-outline-success" type="submit">Salvar</button>
                        <a class="btn ml-2 mr-2 btn-outline-danger" href="{{ route('imovel.index')}}">Cancelar</a>
                    </div>
                </form>
        </div>
    </div>
@stop



@section('plugins.Select2', true)

@section('name')
    <script>
        $(document).ready(function() {
            $( '#select-field' ).select2( {
                theme: 'bootstrap-4'
            } );
        });
    </script>
@endsection
