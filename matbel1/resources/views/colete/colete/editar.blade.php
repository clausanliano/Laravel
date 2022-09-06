
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
    {{-- GENERO_COLETE --}}
    <div class="col-md-3"> 
        <div class="form-group">
            <label for="genero_colete_id">Gênero</label>
            <select name="genero_colete_id" class="form-control">
                <option>-- Selecione --</option>
                @foreach (App\Models\Colete\GeneroColete::all() as $item)
                    <option value="{{$item->id}}" @if ($objeto->genero_colete_id == $item->id ) SELECTED  @endif >{{$item->nome}}</option>
                @endforeach
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
            <label for="tombo">Núm. Tombo</label>
            <input type="text" name="tombo"
                    class="form-control" 
                    value="{{$objeto->tombo}}">
        </div>
    </div>
    {{-- VALIDADE --}}
    <div class="col-md-3">
        <div class="form-group">
            <label for="validade">Validade</label>
            <input type="date" name="validade"
                    class="form-control" 
                    value="{{$objeto->validade}}">
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
    <div class="col-md-4">
        <div class="form-group">
            <label for="subunidade">Subunidade</label>
            <input type="text" name="subunidade"
                    class="form-control" 
                    value="{{$objeto->subunidade}}">
        </div>
    </div>
    {{-- TAMANHO_COLETE --}}
    <div class="col-md-3"> 
        <div class="form-group">
            <label for="tamanho_colete_id">Tamanho</label>
            <select name="tamanho_colete_id" class="form-control">
                <option>-- Selecione --</option>
                @foreach (App\Models\Colete\TamanhoColete::all() as $item)
                    <option value="{{$item->id}}" @if ($objeto->tamanho_colete_id == $item->id ) SELECTED  @endif >{{$item->nome}}</option>
                @endforeach
            </select>
        </div>
    </div>                    
    {{-- NIVEL_COLETE --}}
    <div class="col-md-3"> 
        <div class="form-group">
            <label for="nivel_colete_id">Nível</label>
            <select name="nivel_colete_id" class="form-control">
                <option>-- Selecione --</option>
                @foreach (App\Models\Colete\NivelColete::all() as $item)
                    <option value="{{$item->id}}" @if ($objeto->nivel_colete_id == $item->id ) SELECTED  @endif >{{$item->nome}}</option>
                @endforeach
            </select>
        </div>
    </div>                    
    {{-- SITUACAO_COLETE --}}
    <div class="col-md-3"> 
        <div class="form-group">
            <label for="situacao_colete_id">Situação</label>
            <select name="situacao_colete_id" class="form-control">
                <option>-- Selecione --</option>
                @foreach (App\Models\Colete\SituacaoColete::all() as $item)
                    <option value="{{$item->id}}" @if ($objeto->situacao_colete_id == $item->id ) SELECTED  @endif >{{$item->nome}}</option>
                @endforeach
            </select>
        </div>
    </div>                    
    {{-- FABRICANTE --}}
    <div class="col-md-3"> 
        <div class="form-group">
            <label for="fabricante_id">Fabricante</label>
            <select name="fabricante_id" class="form-control">
                <option>-- Selecione --</option>
                @foreach (App\Models\Arma\Fabricante::all() as $item)
                    <option value="{{$item->id}}" @if ($objeto->fabricante_id == $item->id ) SELECTED  @endif >{{$item->nome}}</option>
                @endforeach
            </select>
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
           
        });
</script>
    
@stop