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
                        <th>Nome</th>  
                        <th>Guard Name</th>                        
                        <th id="center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($lista as $item)
                        <tr>
                            <!-- CAMPOS -->
                            <td>{{$item->name}}</td>   
                            <td>{{$item->guard_name}}</td>                       
                            <td id="center">
                            {{-- AÇÕES DA TABELA --}}

                                {{-- EDITAR --}}
                                <a href="{{route($rota.'.edit', $item->id)}}" 
                                        data-toggle="tooltip" 
                                        data-placement="top"
                                        title="Editar">
                                        <i class="fa fa-fw fa-edit"></i>
                                </a>
                                &nbsp;

                                {{-- DELETE --}}
                                <form 
                                    name = "{{ 'form_'. $item->id}}"
                                    style="display: inline-block;" method="POST" 
                                    action="{{route($rota.'.destroy', $item->id)}}"                                                        
                                    data-toggle="tooltip" data-placement="top"
                                    title="Excluir" 
                                    onsubmit="return confirm('Confirma exclusão?')"
                                >
                                    {{method_field('DELETE')}}
                                    {{csrf_field()}}                                                
                                    <a href="javascript:{{ 'form_'. $item->id}}.submit()">
                                        <i class="fa fa-fw fa-trash"></i>
                                    </a>
                                </form>
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