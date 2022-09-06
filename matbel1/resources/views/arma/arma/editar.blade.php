
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
    {{-- MODELO_ARMA --}}
    <div class="col-md-3">
        <div class="form-group">
            <label for="modelo_arma_id">Modelo</label>
            <select name='modelo_arma_id' id='lista_modelo_arma' class="form-control">
                @if ($objeto->modelo_arma)
                    <option value="{{$objeto->modelo_arma->id}}">{{$objeto->modelo_arma->nome}}</option>                
                @endif
            </select>
        </div>
    </div>
    {{-- NUMERO_SERIE --}}
    <div class="col-md-3">
        <div class="form-group">
            <label for="numero_serie">Núm. de Série</label>
            <input type="text" name="numero_serie"
                    class="form-control" 
                    value="{{$objeto->numero_serie}}">
        </div>
    </div>
    {{-- NUMERO_TOMBO --}}
    <div class="col-md-3">
        <div class="form-group">
            <label for="numero_tombo">Núm. Tombo</label>
            <input type="text" name="numero_tombo"
                    class="form-control" 
                    value="{{$objeto->numero_tombo}}">
        </div>
    </div>
    {{-- CARREGADOR --}}
    <div class="col-md-2">
        <div class="form-group">
            <label for="carregador">Carregador</label>
            <input type="text" name="carregador"
                    class="form-control" 
                    value="{{$objeto->carregador}}">
        </div>
    </div>
    {{-- SITUACAO --}}
    <div class="col-md-2"> 
        <div class="form-group">
            <label for="situacao_id">Situação</label>
            <select name="situacao_id" class="form-control">
                <option>-- Selecione --</option>
                @foreach (App\Models\Arma\Situacao::all() as $item)
                    <option value="{{$item->id}}" @if ($objeto->situacao_id == $item->id ) SELECTED  @endif >{{$item->nome}}</option>
                @endforeach
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
    {{-- SUBUNIDADE --}}
    <div class="col-md-3">
        <div class="form-group">
            <label for="subunidade">Subunidade</label>
            <input type="text" name="subunidade"
                    class="form-control" 
                    value="{{$objeto->subunidade}}">
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
           
            /* Lista de Modelos de Armas */
            $('#lista_modelo_arma').select2({
                placeholder: 'Selecione um Item',
                ajax: {
                    url: '{{route("modelo_arma.ajax")}}',
                    dataType: 'json',
                    delay: 250,
                    processResults: function (data) {
                        return {
                            results:  $.map(data, function (item) {
                                return {
                                    text: item.nome, 
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