@extends('layouts.app') @extends('layouts.template')

@section('template_title')
    {{ $inventario->name ?? 'Show Inventario' }}
@endsection

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-white bg-dark"">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <div class="float-left">
                                    <span class="card-title"><i class="fa fa-truck fa-lg" aria-hidden="true"></i> Ver Inventario</span>
                                </div>
                            </div>
                            <div class="col-6" style="text-align: end">
                                <a class="btn btn-dark" href="{{ route('inventario.index') }}"> Regresar</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $inventario->producto }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $inventario->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $inventario->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Unidades:</strong>
                            {{ $inventario->unidades }}
                        </div>
                        <div class="form-group">
                            <strong>Costo:</strong>
                            {{ $inventario->costo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
