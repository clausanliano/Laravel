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
    {{-- DATA_HORA --}}
    <div class="col-md-2">
        <div class="form-group">
            <label for="data_hora">Data Disparo</label>
            <input type="date" name="data_hora"
                    class="form-control" 
                    value="{{$objeto->data_hora}}">
        </div>
    </div>
    {{-- QUANTIDADE --}}
    <div class="col-md-2">
        <div class="form-group">
            <label for="quantidade">Quant</label>
            <input type="number" name="quantidade"
                    class="form-control" 
                    value="{{$objeto->quantidade}}">
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
    {{-- POLICIAL_ID --}}
    <div class="col-md-6">
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
    <div class="col-md-2">
        <div class="form-group">
            <label for="arma_id">Número de Série</label>
            <select name='arma_id' id='lista_arma' class="form-control">
                @if ($objeto->arma)
                    <option value="{{$objeto->arma->id}}">{{$objeto->arma->numero_serie}}</option>                
                @endif
            </select>
        </div>
    </div>
    {{-- TIPO_MUNICAO_ID --}}
    <div class="col-md-2">
        <div class="form-group">
        <label for="tipo_municao_id">Tipo de Munição</label>
                <select name="tipo_municao_id" class="form-control">
                    <option>-- Selecione --</option>
                    @foreach (App\Models\Disparo\TipoMunicao::all() as $item)
                        <option value="{{$item->id}}" @if ($objeto->tipo_municao_id == $item->id  ) SELECTED  @endif >{{$item->nome}}</option>
                    @endforeach
                </select>
        </div>
    </div>
    {{-- TIPO_DISPARO_ID --}}
    <div class="col-md-2">
        <div class="form-group">
        <label for="tipo_disparo_id">Tipo Disparo</label>
                <select name="tipo_disparo_id" class="form-control">
                    <option>-- Selecione --</option>
                    @foreach (App\Models\Disparo\TipoDisparo::all() as $item)
                        <option value="{{$item->id}}" @if ($objeto->tipo_disparo_id == $item->id  ) SELECTED  @endif >{{$item->nome}}</option>
                    @endforeach
                </select>
        </div>
    </div>
    {{-- OBSERVAÇÃO --}}
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
            minimumInputLength: 3,
            ajax: {
                url: '{{route("policial.ajax")}}',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results:  $.map(data, function (item) {
                            return {
                                text: [item.matricula,' - ', item.cpf,' - ', item.nome], 
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
            minimumInputLength: 3,
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