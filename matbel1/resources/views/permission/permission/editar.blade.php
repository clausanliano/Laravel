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
    {{-- NOME DA PERMISSAO--}}
    <div class="col-md-12">
        <div class="form-group">
            <label for="name">Nome da Permissão</label>
            <option>modelo_de_permissao-list</option>
            <option>modelo_de_permissao-edit</option>
            <option>modelo_de_permissao-create</option>
            <option>modelo_de_permissao-delete</option>
            <input type="text" name="name"
                    class="form-control" 
                    value="{{$objeto->name}}">
        </div>
    </div>
    {{-- GUARDNAME--}}
    <div class="col-md-12">
        <div class="form-group">
            <label for="guard_name"></label>
            <option>web</option>
             <input type="text" name="guard_name"
                    class="form-control" 
                    value="{{$objeto->guard_name}}">
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