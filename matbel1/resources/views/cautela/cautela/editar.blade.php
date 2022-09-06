@extends('adminlte::page')

@section('title', $cabecalho)

@section('content_header')
@stop

@section('mensagem')
    <!-- Mensagem de Erro-->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection

@section('campos')

    {{-- USUARIO --}}
    <div class="col-md-8">
        <div class="form-group">
            <label for="usuario">Usuario</label>
                <select name='usuario' id='lista_usuario' class="form-control">
                    @if ($objeto->policial)
                        <option value="{{$objeto->policial->id}}">{{$objeto->policial->matricula}}</option>                
                    @endif
                </select>
        </div>
    </div>
    {{-- DATA_CAUTELA --}}
    <div class="col-md-4">
        <div class="form-group">
            <label for="dt_cautela">Data Cautela</label>
            <input type="date" name="dt_cautela"
                    class="form-control" 
                    value="{{$objeto->dt_cautela}}">
        </div>
    </div>
    {{-- POLICIAL_ID --}}
    <div class="col-md-8">
        <div class="form-group">
            <label for="policial_id">Policial</label>
            <select name='policial_id' id='lista_policial' class="form-control">
                @if ($objeto->policial)
                    <option value="{{$objeto->policial->id}}">{{$objeto->policial->matricula}}</option>                
                @endif
            </select>
        </div>
    </div>
    {{-- ARMA_ID --}}
    <div class="col-md-4">
        <div class="form-group">
            <label for="arma_id">Número de Série</label>
            <select name='arma_id' id='lista_arma' class="form-control">
                @if ($objeto->arma)
                    <option value="{{$objeto->arma->id}}">{{$objeto->arma->numero_serie}}</option>                
                @endif
            </select>
        </div>
    </div>
    {{-- OPM_ID --}}
    <div class="col-md-8">
        <div class="form-group">
            <label for="opm_id">OPM</label>
            <select name='opm_id' id='lista_opm' class="form-control">
                @if ($objeto->opm)
                    <option value="{{$objeto->opm->id}}">{{$objeto->opm->nome}}</option>                
                @endif
            </select>
        </div>
    </div>
    {{-- QUANTIDADE --}}
    <div class="col-md-2">
        <div class="form-group">
            <label for="quantidade">Quant. Munição</label>
            <input type="number" name="quantidade"
                    class="form-control" 
                    value="{{$objeto->quantidade}}">
        </div>
    </div>
    {{-- DATA_DEVOLUCAO --}}
    <div class="col-md-3">
        <div class="form-group">
            <label for="dt_exclusao">Data Devolução</label>
            <input type="date" name="dt_exclusao"
                    class="form-control" 
                    value="{{$objeto->dt_exclusao}}">
        </div>
    </div>
    {{-- CAUTELA --}}
    <div class="col-md-2">
        <div class="form-group">
            <label for="cautela">Cautela</label>
            <input type="bin" name="cautela"
                    class="form-control" 
                    value="{{$objeto->cautela}}">
        </div>
    </div>
    {{-- OBSERVACAO --}}
    <div class="col-md-12">
        <div class="form-group">
            <label for="observacao">Observacao</label>
            <textarea class="form-control" name="observacao" rows="5" cols="33" value=''>{{$objeto->observacao}}</textarea>
        </div>
    </div>
@endsection

@section('content')
    {{-- CHAMA MENSAGENS --}}
    @yield('mensagem')
    
    <!-- Formulário -->
    <div class ="panel panel-primary">
        <div class ='panel-heading'>
            {{$cabecalho}}
        </div>

        @if ( $objeto->id == 0)
            <form method="post" action="{{route($rota.'.store')}}" enctype="multipart/form-data">
        @else
            <form method="post" action="{{route($rota.'.update', $objeto->id)}}"  enctype="multipart/form-data">
            {!! method_field('put') !!}
        @endif   
            {{ csrf_field() }}

        <div class ='panel-body'>
            @yield('campos')
        </div>
        <div class ='panel-footer'>
                <div class="form-group">        
                        <button type="submit" class="btn btn-success" id="black">
                            Salvar
                        </button>      
                        &nbsp;                             
                        <a class="btn btn-danger" href="{{route($rota.'.index')}}">
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

@section('css')
    
@stop

@section('js')
    
<script>
    $(document).ready(function() {
        /* Lista de OPM's */
        $('#lista_opm').select2({
            placeholder: 'Selecione um Item',
            ajax: {
                url: '{{route("opm.ajax")}}',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results:  $.map(data, function (item) {
                            return {
                                text: item.nome_pais, 
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            }
        });
        
        /* Lista de Policiais */
        $('#lista_policial').select2({
            placeholder: 'Selecione um Item',
            ajax: {
                url: '{{route("policial.ajax")}}',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results:  $.map(data, function (item) {
                            return {
                                text: [item.matricula, ' - ', item.cpf, ' - ', item.nome],
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            }
        });
        /* Lista de Policiais */
        $('#lista_usuario').select2({
            placeholder: 'Selecione um Item',
            ajax: {
                url: '{{route("policial.ajax")}}',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results:  $.map(data, function (item) {
                            return {
                                text: [item.matricula, ' - ', item.cpf, ' - ', item.nome],
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            }
        });

        /* Lista de Numeros de Serie */
        $('#lista_arma').select2({
            placeholder: 'Selecione um Item',
            ajax: {
                url: '{{route("arma.ajax")}}',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results:  $.map(data, function (item) {
                            return {
                                text: item.numero_serie, 
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            }
        });
    });
</script>

@stop