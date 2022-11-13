@extends('layouts.app') @extends('layouts.template')

@section('template_title')
    {{ $categorium->name ?? 'Show Categorium' }}
@endsection

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-white bg-dark"">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <span class="card-title"><i class="fa fa-bookmark fa-lg" aria-hidden="true"></i> Ver categorías</span>
                            </div>
                            <div class="col-6" style="text-align: end">
                                <a class="btn btn-dark "  data-placement="left" href="{{ route('categoria.index') }}"> 
                                {{ __('Regresar') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoría:</strong>
                            {{ $categorium->categoria }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
