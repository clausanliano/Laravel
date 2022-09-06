@extends('adminlte::page')

@section('title', 'Cidade')

@section('content')
    <div class="pt-4">
        <div class="card card-secondary">
            <div class="card-header">
                Formulário de Cadastro de Cidade
            </div>
                @if ($objeto->id == 0)
                    <form action="{{ route('cidade.store')}}" method="POST">
                @else
                    <form action="{{ route('cidade.update', $objeto->id )}}" method="POST">
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
                                <label for="uf_id">UF</label>
                                <select class="form-control @error('uf_id') is-invalid @enderror" name="uf_id" id="uf_id" >
                                    @forelse ($ufs as $uf)
                                        <option @if ($uf->id == $objeto->uf_id) selected @endif value="{{ $uf->id }}">{{ $uf->sigla }}</option>
                                    @empty
                                        <option value="">Não há UFs cadastradas</option>
                                    @endforelse
                                </select>
                                @error('uf_id')
                                    <div class="badge badge-danger" >{{ $message }}</div>
                                @enderror
                            </div>

                    </div>
                    <div class="card-footer">
                        <button class="btn ml-2 mr-2 btn-outline-success" type="submit">Salvar</button>
                        <a class="btn ml-2 mr-2 btn-outline-danger" href="{{ route('cidade.index')}}">Cancelar</a>
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
