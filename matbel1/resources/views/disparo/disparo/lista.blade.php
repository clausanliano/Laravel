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
                        <th>Data Disparo</th>
                        <th>Matrícula</th>
                        <th>Nome Guerra</th>
                        <th>Num Série</th>
                        <th>Modelo</th>
                        <th>Opm Arma</th>
                        <th>Calibre</th>
                        <th>Tipo Munição</th>
                        <th>Motivo Disparo</th>
                        <th>OPM Disparo</th>
                        <th>Quant</th>
                        <th>Obs</th>                        
                        <th id="center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($lista as $item)
{{--                       @if(auth()->user()->opm_id == $item->opm->id)
--}}        
                            <tr>
                                <!-- CAMPOS -->
                                
                                <td>{{date( 'd/m/Y' , strtotime($item->data_hora))}}</td>
                                <td>{{$item->policial->matricula}}</td>
                                <td>{{$item->policial->nome_guerra}}</td>
                                <td>{{$item->arma->numero_serie}}</td>
                                <td>{{$item->arma->modelo_arma->nome}}</td>
                                <td>{{$item->arma->opm->nome}}</td>
                                <td>{{$item->arma->modelo_arma->calibre->nome}}</td>
                                <td>{{$item->tipo_municao->nome}}</td>
                                <td>{{$item->tipo_disparo->nome}}</td>
                                <td>{{$item->opm->nome}}</td>
                                <td>{{$item->quantidade}}</td>
                                <td>{{$item->observacao}}</td>                           
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
                <tfoot>
                        <tr>
                            <th colspan="11" style="text-align:right" >Total: </th>
                            <th { white-space: nowrap; }></th>
                        </tr>
                    </tfoot>
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
   
@stop

@section('js')
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
            $(function () {
                
                $('#tabela').DataTable( {
                       "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
                        "footerCallback": function ( row, data, start, end, display ) {
                            var api = this.api(), data;
                
                            // Remove the formatting to get integer data for summation
                              var intVal = function ( i ) {
                                return typeof i === 'string' ?
                                    i.replace(/[\$,]/g, '')*1 :
                                    typeof i === 'number' ?
                                        i : 0;
                            };
                
                            // Total over all pages
                            total = api
                                .column( 10 )
                                .data()
                                .reduce( function (a, b) {
                                    return intVal(a) + intVal(b);
                                }, 0 );
                
                            // Total over this page
                            pageTotal = api
                                .column( 10, {search: 'applied'} )
                                .data()
                                .reduce( function (a, b) {
                                    return intVal(a) + intVal(b);
                                }, 0 );
                
                            // Update footer
                            $( api.column( 10).footer() ).html(
                                pageTotal +' ( '+ total +' total)'
                            );
                        }
                        
                    } );
    } );
    </script>
@stop