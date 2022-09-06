@extends('adminlte::page')

@section('title', 'Vagas')

@section('content_header')
    <h1 class="m-0 text-dark">SD {{$policial->nome}}, matrícula {{$policial->matricula}}.</h1>
@stop

@section('content')
        @foreach ($collection as $item)
            @if( $item->vagas_unisex_remanecentes() > 0)
                @if ( $loop->index % 4 == 0)
                <div class="row">
                @endif
                    <div class="col-lg-3 col-6">
                        <div class="small-box {{ ['bg-primary', 'bg-secondary', 'bg-success', 'bg-warning', 'bg-danger', 'bg-light', 'bg-dark'][$loop->index % 7] }}">
                            <div class="inner">
                                <h3>{{ $item->sigla}}</h3>
                                {{--
                                <p>{{ $item->cidade->nome}}</p>
                                <p>Vagas Masculinas: {{ $item->vagas_masculinas}}</p>
                                <p>Vagas Femininas: {{ $item->vagas_femininas}}</p>
                                --}}

                                <p>Vagas:
                                    @if ( $item->vagas_masculinas_remanecentes() > 0 && $item->vagas_femininas_remanecentes() > 0 )
                                        {{ $item->vagas_masculinas_remanecentes() }} masculinas e {{ $item->vagas_femininas_remanecentes() }} femininas
                                    @elseif ($item->vagas_masculinas_remanecentes() > 0)
                                        {{ $item->vagas_masculinas_remanecentes() }} masculinas
                                    @elseif ($item->vagas_masculinas_remanecentes() > 0)
                                        {{ $item->vagas_femininas_remanecentes() }} femininas
                                    @endif
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="{{ route('acrescentar', [$item->id, $policial->id]) }}" class="small-box-footer">Acrescentar <i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                @if ( $loop->index % 4 == 3)
                </div>
                @endif
            @endif

        @endforeach
@stop
