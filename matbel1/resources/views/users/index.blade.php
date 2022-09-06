@extends('adminlte::page')

@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h2>Administração de Usuários</h2>
    </div>
    <div class="pull-right">
      <a class="btn btn-success" href="{{ route('users.create') }}"> Criar novo Usuário</a>
    </div>
  </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
<table name='tabela' id='tabela' class="table table-bordered">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Email</th>
      <th>OPM</th>
      <th>Funções</th>
      <th width="200px">Ações</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($data as $key => $user)
  <tr>

    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->opm->nome }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
      @foreach($user->getRoleNames() as $v)
      <label class="badge badge-success">{{ $v }}</label>
      @endforeach
      @endif
    </td>
    <td>
    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Exibir</a>
    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Editar</a>
    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
    {!! Form::submit('Deletar', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
  </td>
  </tr>
  @endforeach
  <tbody>
</table>
<div class="pull-right">

<a class="btn btn-primary" href="{{ route('home') }}"> Voltar</a>

</div>

@endsection


@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@stop

@section('js')
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
            $(function () {
                $('#tabela').DataTable({
                        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
                        "language": {
                            "sEmptyTable": "Nenhum registro encontrado",
                            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                            "sInfoPostFix": "",
                            "sInfoThousands": ".",
                            "sLengthMenu": "_MENU_ resultados por página",
                            "sLoadingRecords": "Carregando...",
                            "sProcessing": "Processando...",
                            "sZeroRecords": "Nenhum registro encontrado",
                            "sSearch": "Procurar",
                            "oPaginate": {
                                "sNext": "Próximo",
                                "sPrevious": "Anterior",
                                "sFirst": "Primeiro",
                                "sLast": "Último"
                            },
                            "oAria": {
                                "sSortAscending": ": Ordenar colunas de forma ascendente",
                                "sSortDescending": ": Ordenar colunas de forma descendente"
                            }
                        }
                    });
                } );
    </script>
@stop