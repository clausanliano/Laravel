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
    {{-- ID DA REGRA--}}

    <div class="col-md-12">
        <div class="form-group">
            <label for="role_id">Nome da Regra</label>
            <select name='role_id' id='lista_role' class="form-control">
            @if ($objeto->role)
                    <option value="{{$objeto->role->id}}">{{$objeto->role->name}}</option>                
                @endif
            </select>
        </div>
    </div>

    {{-- TIPO DE REGRA--}}
    <div class="col-md-12">
        <div class="form-group">
            <label for="model_type">Regra Usuario</label>
            <option>App\User</option>
            <input type="text" name="model_type"
                    class="form-control" 
                    value="{{$objeto->model_type}}">
        </div>
    </div>
    {{-- ID DE USUARIO --}}
    <div class="col-md-12">
        <div class="form-group">
        <label for="model_id">Usuario</label>
            <select name='model_id' id='lista_user' class="form-control">
                @if ($objeto->user)
                    <option value="{{$objeto->user->id}}">{{$objeto->user->name}}</option>                
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
    
@stop

<script>
    $(document).ready(function() {
        /* Lista de Usuarios */
        $('#lista_user').select2({
            placeholder: 'Selecione um Item',
            ajax: {
                url: '{{route("user.ajax")}}',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results:  $.map(data, function (item) {
                            return {
                                text: [item.name,' - ', item.email], 
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            }
        });
        /* Lista de Regras */
        $('#lista_role').select2({
            placeholder: 'Selecione um Item',
            ajax: {
                url: '{{route("role.ajax")}}',
                dataType: 'json',
                delay: 250,
                processResults: function (data) {
                    return {
                        results:  $.map(data, function (item) {
                            return {
                                text: ['Papel: ', item.name,' - Gerência: ', item.guard_name], 
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
