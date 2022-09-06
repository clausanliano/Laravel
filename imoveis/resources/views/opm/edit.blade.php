@extends('adminlte::page')

@section('title', 'OPM')

@section('content')
    <div class="pt-4">
        <div class="card card-secondary">
            <div class="card-header">
                Formulário de Cadastro de OPM
            </div>
                @if ($objeto->id == 0)
                    <form action="{{ route('opm.store')}}" method="POST">
                @else
                    <form action="{{ route('opm.update', $objeto->id )}}" method="POST">
                    @method('PUT')
                @endif
                    @csrf
                    <div class="card-body">
                            <div class="form-group">
                                <label for="sigla">Sigla</label>
                                <input class="form-control @error('sigla') is-invalid @enderror"
                                type="text" name="sigla" id="sigla" value="{{ old('sigla', $objeto->sigla) }}">
                                @error('sigla')
                                    <div class="badge badge-danger" >{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input class="form-control @error('nome') is-invalid @enderror"
                                type="text" name="nome" id="nome" value="{{ old('nome', $objeto->nome) }}">
                                @error('nome')
                                    <div class="badge badge-danger" >{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="opm_id">OPM</label>
                                <select class="form-control @error('opm_id') is-invalid @enderror" name="opm_id" id="opm_id" >
                                    <option value="">- - Escola uma opção - -</option>
                                    @forelse ($opms as $opm)
                                        @if ($opm->id != $objeto->id) {{-- OPM não pode ser pai dela mesma --}}
                                            <option @if ($opm->id == $objeto->opm_id) selected @endif  value="{{ $opm->id }}">{{ $opm->sigla }}, {{ $opm->imovel->bairro->cidade->nome}}/{{ $opm->imovel->bairro->cidade->uf->sigla}} </option>
                                        @endif
                                    @empty
                                        <option value="">Não há OPMs cadastradas</option>
                                    @endforelse
                                </select>
                                @error('opm_id')
                                    <div class="badge badge-danger" >{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="imovel_id">Imóvel</label>
                                <select class="form-control @error('imovel_id') is-invalid @enderror" name="imovel_id" id="imovel_id" >
                                    @forelse ($imoveis as $imovel)
                                        <option @if ($imovel->id == $objeto->imovel_id) selected @endif  value="{{ $imovel->id }}">{{ $imovel->nome }}, {{ $imovel->bairro->cidade->nome }}/{{ $imovel->bairro->cidade->uf->sigla }}</option>
                                    @empty
                                        <option value="">Não há Cidades cadastradas</option>
                                    @endforelse
                                </select>
                                @error('imovel_id')
                                    <div class="badge badge-danger" >{{ $message }}</div>
                                @enderror
                            </div>





                    </div>
                    <div class="card-footer">
                        <button class="btn ml-2 mr-2 btn-outline-success" type="submit">Salvar</button>
                        <a class="btn ml-2 mr-2 btn-outline-danger" href="{{ route('opm.index')}}">Cancelar</a>
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
