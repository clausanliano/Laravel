@extends('adminlte::page')

@section('title', 'Vagas')

@section('content_header')
    <div class="alert alert-danger" role="alert">
        @if(isset($policial))
            <h3>{{$policial->classificacao}}º - SD {{$policial->nome}}, matrícula {{$policial->matricula}}.</h3>
        @else
            <h3>PROCESSO CONCLUÍDO</h3>
        @endif
    </div>
@stop

@section('content')
    @isset($policial)
        @foreach ($collection as $item)
            @if( $item->vagas_unisex_remanecentes() > 0)
                @if ( $loop->index % 4 == 0)
                <div class="row">
                @endif
                    <div class="col-lg-3 col-6">
                        <div class="small-box {{ ['bg-secondary', 'bg-light'][$loop->index % 2] }}">
                            <div class="inner">
                                <h3>{{ $item->sigla }} / {{ $item->cidade->nome }}</h3>
                                    @if ( $item->vagas_masculinas_remanecentes() > 0 && $item->vagas_femininas_remanecentes() > 0 )
                                        <h4>Vagas: {{ $item->vagas_masculinas_remanecentes() }} masc. e {{ $item->vagas_femininas_remanecentes() }} fem.</h4>
                                    @elseif ($item->vagas_masculinas_remanecentes() > 0)
                                        <h4>Vagas: {{ $item->vagas_masculinas_remanecentes() }} masc.</h4>
                                    @elseif ($item->vagas_masculinas_remanecentes() > 0)
                                        <h4>Vagas: {{ $item->vagas_femininas_remanecentes() }} fem.</h4>
                                    @endif
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="{{ route('selecao_por_sexo.acrescentar', [$item->id, $policial->id]) }}" class="small-box-footer">Acrescentar <i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                @if ( $loop->index % 4 == 3)
                </div>
                @endif
            @endif
        @endforeach
    @endisset
@stop
