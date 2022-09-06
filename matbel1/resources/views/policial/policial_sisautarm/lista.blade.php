@extends('adminlte::page')

@section('title', $cabecalho)

@section('content_header')
   
@stop

@section('mensagem')
    <!-- Mensagens para o usuário  -->
    @if (\Session::has('message'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('message') !!}</li>
            </ul>
        </div>
    @endif
@endsection

@section('content')
    {{-- CHAMA AS Mensagens --}}
    @yield('mensagem')

    <div class ="panel panel-primary">
        <div class ='panel-heading'>
            {{-- CABEÇALHO DO PANEL --}}
            {{$cabecalho}}
        </div>
        <div class ='panel-body'>
            <table id="tabela" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        {{-- CABEÇALHO DA TABELA --}}
                        <th>Posto Graduação</th>           
                        <th>Nome</th>
                        <th>Matrícula</th>
                        <th>RG</th>
                        <th>OPM</th>
                        <th>Data de Inclusão</th>
                        <th>Com Porte</th>
                        <th id="center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($lista as $item)
                        <tr>
                            <!-- CAMPOS -->
                            <td>{{$item->graduacao}}</td>
                            <td>{{$item->nome}}</td>
                            <td>{{$item->matricula}}</td>
                            <td>{{$item->rg}}</td>
                            <td>{{$item->opm}}</td>
                            <td>{{$item->dt_inc}}</td>
                            <td>{{$item->cautelada}}</td>
                            <td id="center">
                            </td>  
                        </tr>
                    @empty
                        <tr>
                            <td>Nenhum registro encontrado!!</td>      
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- RODAPÉ -->
        <div class ='panel-footer'>
            <a href="{{route($rota.'.create')}}" >
                <span class="btn btn-primary btn-sm">
                <i class="fa fa-pencil"></i> 
                    Adicionar
                </a>    
        </div>
    </div>
@stop

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
                    })
                } )
    </script>
@stop