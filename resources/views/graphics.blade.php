@extends("layouts.app") @extends('layouts.template')
@section('content')

<div class="container">
    <div class="card text-white bg-dark">
        <div class="col-8">
            <h4 class="subtitle"><i class="fas fa-book"></i> Información de Ventas por totales</h4>
        </div>
        <div class="border-top my-1"></div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div id="TodasLasGraficas">
                    
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
                            @foreach ($ventas as $Todasventa)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $Todasventa->producto }}</td>
                                    <td>{{ $Todasventa->cantidad }}</td>
                                    <td>{{ $Todasventa->fecha_venta }}</td>
                                    <td>$ {{ $Todasventa->total_venta }}</td>
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
<script>
    Highcharts.chart('TodasLasGraficas', {
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
                },
                subtitle: {
                text: 'Monitoreo de ventas'
                },
            plotOptions: {
                pie: {
                    innerSize: 100,
                    depth: 45
                }
            },
            series: [{
                name: 'cantidad',
                data: <?= $datos?>,
        }]
    });
</script>
@endsection