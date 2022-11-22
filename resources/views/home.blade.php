<!-- ............................................................................ -->
@extends('layouts.app') @extends('layouts.template')
@section('content')
<!-- ............................................................................ -->

<!-- ............................................................................ -->
<script>
    /* Función de máscara para el campo de "Filtrado" de ventas */
    function mask_up() {
        let id = document.getElementById("input_id");
        if (id.value.length == 4 || id.value.length == 7) {
            id.value += "-";
        }
    }
</script>
<div class="container">
    <div class="card text-white bg-dark">
        <div class="row card-body">
            <div class="col-9">
                <h4 class="subtitle"><i class="fas fa-book"></i> Información de Ventas</h4>
            </div>
            <div class="col-1">
                <a href="{{ route('filter.index') }}" class="subtitle"  data-placement="left">
                    {{ __('Retornar') }}
                </a>
            </div>
            <div class="col-2">
                <form method="GET" action="{{ route('filter.index') }}">
                    <div class="input-group mb-3">
                        <input id="input_id" type="text" class="form-control bg-dark" name="filtrar" 
                        placeholder="Filtrar" required style="color: white" onkeyup="mask_up()" maxlength="10" autocomplete="off">
                        <button class="btn btn-outline-primary input-group-text" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>        
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
                                @foreach ($detalleVenta as $venta)
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
                        {!! $detalleVenta->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ............................................................................ -->

<!-- ............................................................................ -->
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/masking-input.js" data-autoinit="true"></script>
<script>
    Highcharts.chart('GraficasPorDia', {
        chart: {
        type: 'pie',
        backgroundColor: '#2B2B2C',
        options3d: {
            enabled: true,
            alpha: 50
        }
        },
        title: {
            text: 'Gráfico de Ventas',
        style: {
            color: '#FFF',
        }
        },
        subtitle: {
            text: 'Monitoreo de ventas diarias',
            style: {
            color: '#FFF',
        }
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