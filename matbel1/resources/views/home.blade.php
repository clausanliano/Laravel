
@extends('adminlte::page')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@section('content')
    <!-- conteúdo da Pagina -->
    @inject('user', 'App\User')
    @inject('opm', 'App\Models\Opm\Opm')

    @can('user-list')
            
    <!-- Main content -->
    <section class="content">
      <div class="col-lg-12 col-6">
        <div class="card m-b-20">
           <div class="card-body">
              <h4 class="mt-0 header-title mb-2">Gráficos</h4>
              <hr>
          <div class="inbox-wid">
            <div class="inbox-item">
                <canvas id="myChart" width="1000" height="400"></canvas>
            </div>
          </div>
        </div>
      </div>
    </section>
      
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            
            <div class="small-box bg-info">
              <div class="inner">
                
                <h3>{{$user->count()}}</h3>

                <p>Lista de Usuários</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="{{route('users.index')}}" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
            
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                @inject('permission', 'App\Models\Permission\Permission')
                    <h3>{{$permission->count()}}</h3>

                <p>Lista de Permissões</p>
              </div>
              <div class="icon">
                <i class="fas fa-key"></i>
              </div>
              <a href="{{route('permission.index')}}" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- /.container-fluid -->
      </section>
    @endcan
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                @inject('arma', 'App\Models\Arma\Arma')
                    <h3>{{$arma->count()}}</h3>
                <p>Lista de Armas</p>
              </div>
              <div class="icon">
                <i class="fas fa-crosshairs"></i>
              </div>
              <a href="{{route('arma.index')}}" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                @inject('calibre', 'App\Models\Arma\Calibre')
                @inject('user', 'App\User')
                @inject('opm', 'App\Models\Opm\Opm')

                <h3>{{$calibre->count()}}</h3>

                <p>Lista de Calibres</p>
              </div>
              <div class="icon">
                <i class="fas fa-bullseye"></i>
              </div>
              <a href="{{route('calibre.index')}}" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                @inject('tipo_arma', 'App\Models\Arma\TipoArma')
                @inject('user', 'App\User')
                @inject('opm', 'App\Models\Opm\Opm')

                <h3>{{$tipo_arma->count()}}</h3>

                <p>Lista de Tipos</p>
              </div>
              <div class="icon">
                <i class="fas fa-list-ul"></i>
              </div>
              <a href="{{route('tipo_arma.index')}}" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                @inject('fabricante', 'App\Models\Arma\Fabricante')
                @inject('user', 'App\User')
                @inject('opm', 'App\Models\Opm\Opm')

                <h3>{{$fabricante->count()}}</h3>

                <p>Lista de Fabricante de Armas</p>
              </div>
              <div class="icon">
                <i class="fas fa-copyright"></i>
              </div>
              <a href="{{route('fabricante.index')}}" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        </div><!-- /.container-fluid -->

    </section>
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                @inject('colete', 'App\Models\Colete\Colete')
                @inject('user', 'App\User')
                @inject('opm', 'App\Models\Opm\Opm')

                <h3>{{$colete->count()}}</h3>

                <p>Lista de Coletes</p>
              </div>
              <div class="icon">
                <i class="fas fa-crosshairs"></i>
              </div>
              <a href="{{route('colete.index')}}" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                @inject('genero_colete', 'App\Models\Colete\GeneroColete')
                @inject('user', 'App\User')
                @inject('opm', 'App\Models\Opm\Opm')

                <h3>{{$genero_colete->count()}}</h3>

                <p>Lista de Generos de Colete</p>
              </div>
              <div class="icon">
                <i class="fas fa-venus-mars"></i>
              </div>
              <a href="{{route('genero_colete.index')}}" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                @inject('nivel_colete', 'App\Models\Colete\NivelColete')
                @inject('user', 'App\User')
                @inject('opm', 'App\Models\Opm\Opm')

                <h3>{{$nivel_colete->count()}}</h3>

                <p>Lista de Níveis de Colete</p>
              </div>
              <div class="icon">
                <i class="fas fa-signal"></i>
              </div>
              <a href="{{route('nivel_colete.index')}}" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          @inject('tamanho_colete', 'App\Models\Colete\TamanhoColete')
          @inject('user', 'App\User')
          @inject('opm', 'App\Models\Opm\Opm')

          <!-- ./col -->

          <div class="col-lg-3 col-6">


            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h3>{{$tamanho_colete->count()}}</h3>

                <p>Lista de Tamanho de Coletes</p>
              </div>
              <div class="icon">
                <i class="fas fa-heartbeat"></i>
              </div>
              <a href="{{route('tamanho_colete.index')}}" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                @inject('situacao_colete', 'App\Models\Colete\SituacaoColete')
                @inject('user', 'App\User')
                @inject('opm', 'App\Models\Opm\Opm')

                <h3>{{$situacao_colete->count()}}</h3>

                <p>Lista de Situação de Coletes</p>
              </div>
              <div class="icon">
                <i class="fas fa-heartbeat"></i>
              </div>
              <a href="{{route('situacao_colete.index')}}" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>

        </div>

        </div><!-- /.container-fluid -->

    </section>

    <section class="content">
    </section>

    <!-- /.content -->
  </div>
      
</div>--}}
@endsection
@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@stop

@section('js')

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 1000],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
@stop