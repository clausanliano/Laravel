@extends('adminlte::page')

@section('title', 'Vagas')


@section('content')
    <div class="container-fluid">
        <div class="row"> &nbsp;        </div>
        <div class="col-12 ">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">OPMs</h3>
                </div>
                <div class="card-body">
                    <table id="tabela" class="stripe" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Sigla</th>
                                <th>Cidade</th>
                                <th>Vagas Masculinas</th>
                                <th>Vagas Femininas</th>
                                <th>Total de Vagas</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)
                                <tr>
                                    <td>{{ $item->nome }}</td>
                                    <td>{{ $item->sigla }}</td>
                                    <td>{{ $item->cidade->nome }}</td>
                                    <td>{{ $item->vagas_masculinas }}</td>
                                    <td>{{ $item->vagas_femininas }}</td>
                                    <td>{{ $item->vagas_unisex }}</td>
                                    <td>
                                        <div class="row btn-group">
                                            <a href="teste"  class="btn  ">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="" method="post"   class="btn">
                                                @csrf
                                                @method('delete')
                                                <i class="fas fa-trash"></i>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{ route('opms.create') }}" class="btn btn-success">Novo</a>
                </div>
              </div>
        </div>
    </div>
@stop

@section('plugins.Datatables', true)

@section('js')
    <script>
        $(document).ready( function () {
            $('#tabela').DataTable();
        } );
    </script>
@endsection
