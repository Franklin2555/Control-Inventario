@extends('layouts.app') @extends('layouts.template')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content') 
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-white bg-dark"">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <span class="card-title"><i class="fa fa-burger fa-lg" aria-hidden="true"></i> Ver producto</span>
                            </div>
                            <div class="col-6" style="text-align: end">
                                <a class="btn btn-dark" href="{{ route('producto.index') }}"> Regresar</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $producto->producto }}
                        </div>
                        <div class="form-group">
                            <strong>Tiempo:</strong>
                            {{ $producto->tiempo }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $producto->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $producto->categorium->categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Inventario:</strong>
                            {{ $producto->inventario->producto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
