@extends('adminlte::page')

@section('title', 'UF')

@section('content')
    <div class="pt-4 pb-4">
        <div class="card card-dark ">
            <div class="card-header">
                <div class="title">UF</div>
            </div>
            <div class="card-body">
                <table id="tabela" class="table table-striped hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Sigla</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($collection as $item)
                            <tr>
                                <td>{{$item->nome}}</td>
                                <td>{{$item->sigla}}</td>
                                <td width="30%" >
                                    <div class="form-inline" >
                                        <a href="{{ route('uf.show', $item->id)}}" class="btn ml-2 mr-2 btn-outline-primary">Mostrar</a>
                                        <a href="{{ route('uf.edit', $item->id)}}" class="btn ml-2 mr-2 btn-outline-warning">Editar</a>

                                        <form action="{{ route('uf.destroy', $item->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger ml-2 mr-2">Apagar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <td colspan="2">Não há registros cadastrados !!!</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <a class="btn ml-2 mr-2 btn-outline-success" href="{{ route('uf.create')}}">Criar</a>
            </div>
        </div>
    </div>
@stop

@section('plugins.Datatables', true)


@section('js')
    <script>
        $(document).ready(function () {
            $('#tabela').DataTable({
                columnDefs: [
                    {
                        target: 2,
                        orderable: false,
                        searchable: false,
                    },
                ],
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/pt-BR.json',
                },
            });
        });

        $('[data-toggle="tooltip"]').tooltip()
    </script>
@stop
