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
    {{-- CODINOME --}}
    <div class="col-md-12">
        <div class="form-group">
            <label for="codigo">Codinome</label>
            <input type="text" name="codigo"
                    class="form-control" 
                    value="{{$objeto->codigo}}">
        </div>
    </div>
    {{-- NOME --}}
    <div class="col-md-12">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome"
                    class="form-control" 
                    value="{{$objeto->nome}}">
        </div>
    </div>
    {{-- TIPO --}}
    <div class="col-md-12">
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" name="tipo"
                    class="form-control" 
                    value="{{$objeto->tipo}}">
        </div>
    </div>
    {{-- SUBORDINAÇÃO --}}
    <div class="col-md-12">
        <div class="form-group">
            <label for="nome_pais">Subordinação</label>
            <select name='nome_pais' id='lista_unidade' class="form-control">
                @if ($objeto->unidade)
                    <option value="{{$objeto->unidade->id}}">{{$objeto->unidade->nome}}</option>                
                @endif
            </select>
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
            $('#lista_unidade').select2({
                placeholder: 'Selecione um Item',
                ajax: {
                    url: '{{route("unidade.ajax")}}',
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

