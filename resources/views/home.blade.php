<!-- ............................................................................ -->
@extends('layouts.app') @extends('layouts.template')
@section('content')
<!-- ............................................................................ -->

<!-- ............................................................................ -->
<div class="container">
    <div class="card text-white bg-dark">
        <div class="row card-body">
            <div class="col-8">
                <h4 class="subtitle"><i class="fas fa-book"></i> Información de Ventas por día</h4>
            </div>
            <div class="col-2">
                <select class="form-control">
                    <option selected disabled readonly>Filtrar</option>
                    @foreach($filtrados as $f)
                    <option value="{{$f['id']}}">{{$f['fecha_venta']}}</option>
                   @endforeach
                  </select>
            </div>
            <div class="col-2" style="text-align: right">
                <a class="nav-link" href="{{ route('graficas.index')}}">
                    <i class="fas fa-chart-pie fa-lg"></i>
                    <span class="routes_name"> Más información </span>
                </a>
            </div>
        
            <div class="border-top my-1"></div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div id="GraficasPorDia">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="table-responsive">
                        <table class="table table-hover table-dark">
                            <thead class="thead">
                                <tr>
                                    <th>N°</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Fecha Ventas</th>
                                    <th>Total Ventas</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ventas as $venta)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $venta->producto }}</td>
                                        <td>{{ $venta->cantidad }}</td>
                                        <td>{{ $venta->fecha_venta }}</td>
                                        <td>$ {{ $venta->total_venta }}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <th colspan="4" style="text-align: center">Suma total</th>
                                    <td>
                                        @php
                                            echo '$ '. $total;
                                        @endphp
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end">
                        {!! $ventas->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ............................................................................ -->

<!-- ............................................................................ -->
<script>
    Highcharts.chart('GraficasPorDia', {
        chart: {
        backgroundColor: '#fff',
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 50
        }
        },
        title: {
            text: 'Gráfico de Ventas',
            color: '#fff',
        },
        subtitle: {
            text: 'Monitoreo de ventas diarias'
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'cantidad',
            data: <?= $data?>,
        }]
    });
</script>
<!-- ............................................................................ -->
@endsection