@extends('adminlte::page')

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Criar Novo Usuário</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('users.index') }}"> Voltar</a>

        </div>

    </div>

</div>


@if (count($errors) > 0)

  <div class="alert alert-danger">

    <strong>Opa!!!</strong> Há um problema com o valor inserido.<br><br>

    <ul>

       @foreach ($errors->all() as $error)

         <li>{{ $error }}</li>

       @endforeach

    </ul>

  </div>

@endif



{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Nome:</strong>

            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Email:</strong>

            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}

        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>OPM:</strong>
            <select name='opm_id' id='lista_opm' class="form-control">
            </select>

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Senha:</strong>

            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Confirmação de Senha:</strong>

            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-6 col-sm-12 col-md2">

        <div class="form-group">

            <strong>Permissões:</strong>
            
            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">Salvar</button>

    </div>

</div>

{!! Form::close() !!}


@endsection

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