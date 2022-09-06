@extends('adminlte::page')

@section('title', 'Bairro')

@section('content')
    <div class="pt-4">
        <div class="card card-secondary">
            <div class="card-header">
                Formulário de Cadastro de Bairro
            </div>
                @if ($objeto->id == 0)
                    <form action="{{ route('bairro.store')}}" method="POST">
                @else
                    <form action="{{ route('bairro.update', $objeto->id )}}" method="POST">
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
                                <label for="cidade_id">Cidade</label>
                                <select class="form-control @error('cidade_id') is-invalid @enderror" name="cidade_id" id="cidade_id" >
                                    @forelse ($cidades as $cidade)
                                        <option @if ($cidade->id == $objeto->cidade_id) selected @endif  value="{{ $cidade->id }}">{{ $cidade->nome }}/{{ $cidade->uf->sigla }}</option>
                                    @empty
                                        <option value="">Não há Cidades cadastradas</option>
                                    @endforelse
                                </select>
                                @error('cidade_id')
                                    <div class="badge badge-danger" >{{ $message }}</div>
                                @enderror
                            </div>

                    </div>
                    <div class="card-footer">
                        <button class="btn ml-2 mr-2 btn-outline-success" type="submit">Salvar</button>
                        <a class="btn ml-2 mr-2 btn-outline-danger" href="{{ route('bairro.index')}}">Cancelar</a>
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
