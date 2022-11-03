@extends('layouts.app') @extends('layouts.template')

@section('template_title')
    {{ $venta->name ?? 'Show Venta' }}
@endsection

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-white bg-dark"">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-dark" href="{{ route('ventas.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $venta->producto }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $venta->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $venta->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Total Venta:</strong>
                            {{ $venta->total_venta }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Venta:</strong>
                            {{ $venta->fecha_venta }}
                        </div>
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $venta->Producto->producto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
