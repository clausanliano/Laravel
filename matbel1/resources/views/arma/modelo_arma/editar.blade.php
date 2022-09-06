
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
    {{-- NOME --}}
    <div class="col-md-3">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome"
                    class="form-control" 
                    value="{{$objeto->nome}}">
        </div>
    </div>
    {{-- COMPIRMENTO DO CANO --}}
    <div class="col-md-2">
        <div class="form-group">
            <label for="comprimento_cano">Comprimento (mm)</label>
            <input type="number" name="comprimento_cano"
                    class="form-control" 
                    value="{{$objeto->comprimento_cano}}">
        </div>
    </div>
    {{-- CALIBRE_ID --}}
    <div class="col-md-2">
            <div class="form-group">
                <label for="calibre_id">Calibre</label>
                <select name="calibre_id" class="form-control">
                    <option>-- Selecione --</option>
                    @foreach (App\Models\Arma\Calibre::all() as $item)
                        <option value="{{$item->id}}" @if ($objeto->calibre_id == $item->id  ) SELECTED  @endif >{{$item->nome}}</option>
                    @endforeach
                </select>
        </div>
    </div>
    {{-- TIPO_ARMA_ID --}}
    <div class="col-md-2">
        <div class="form-group">
            <label for="tipo_arma_id">Tipo de Arma</label>
            <select name="tipo_arma_id" class="form-control">
                <option>-- Selecione --</option>
                @foreach (App\Models\Arma\TipoArma::all() as $item)
                    <option value="{{$item->id}}" @if ($objeto->tipo_arma_id == $item->id ) SELECTED  @endif >{{$item->nome}}</option>
                    
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
    {{-- OBSERVAÇÃO --}}
    <div class="col-md-12">
        <div class="form-group">
            <label for="observacao">Observações</label>
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
    
@stop