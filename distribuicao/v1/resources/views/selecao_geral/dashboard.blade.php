@extends('adminlte::page')

@section('title', 'Vagas')

@section('content_header')
<div class="alert alert-danger" role="alert">
        @if(isset($policial))
            <h1>{{$policial->classificacao}}º - SD {{$policial->nome}}, matrícula {{$policial->matricula}}.</h2>
        @else
            <h3>PROCESSO CONCLUÍDO!!!</h3>
        @endif
    </div>
@stop

@section('content')
    @isset($policial)
        @foreach ($collection as $item)
            @if( $item->vagas_unisex_remanecentes() > 0)
                @if ( $loop->index % 6 == 0)
                <div class="row">
                @endif
                    <div class="col-lg-2 col-6">
                        <div class="small-box {{ ['bg-secondary', 'bg-light'][$loop->index % 2] }}">
                            <div class="inner">
                                <h3>{{ $item->sigla }}
                                    @if ( $item->vagas_unisex_remanecentes() > 0 )
                                       {{'('.$item->vagas_unisex_remanecentes().' vgs)' }}
                                    @endif
                                </h3>
                                    {{--
                                @if ( $item->vagas_unisex_remanecentes() > 0 )
                                <h4>{{ $item->vagas_unisex_remanecentes() }} vagas</h4>
                                @endif
                                --}}

                                    <h4>{{ $item->cidade->nome }}</h4>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="{{ route('selecao_geral.acrescentar', [$item->id, $policial->id]) }}" class="small-box-footer">Acrescentar <i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                @if ( $loop->index % 6 == 6-1)
                </div>
                @endif
            @endif
        @endforeach
    @endisset
@stop
