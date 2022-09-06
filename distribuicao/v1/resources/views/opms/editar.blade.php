
@extends('adminlte::page')

@section('title', 'OPMs')

@section('content_header')
@stop

@section('mensagem')
    <!-- Mensagem de Erro-->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection

@section('content')
    <div class="row">&nbsp;</div>
    {{-- CHAMA MENSAGENS --}}
    @yield('mensagem')

    <!-- Formulário -->
    <div class ="card card-secondary">
        <div class ='card-header'>
            <div class ='card-title'>
                OPMs
            </div>
        </div>

        @if ( $objeto->id == 0)
            <form method="post" action="{{route('opms.store')}}" >
        @else
            <form method="post" action="{{route('opms.update', $objeto->id)}}" >
            {!! method_field('put') !!}
        @endif
            {{ csrf_field() }}

        <div class ='card-body'>
        </div>
        <div class ='card-footer'>
                <div class="form-group">
                        <button type="submit" class="btn btn-success" id="black">
                            Salvar
                        </button>
                        &nbsp;
                        <a class="btn btn-danger" href="{{route('opms.index')}}">
                            Cancelar
                        </a>
                        &nbsp;
                        <button type="reset" class="btn btn-warning">
                            Resetar
                        </button>
                    </div>
        </div>
        </form>
    </div>
@stop
