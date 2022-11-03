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
                        <div class="float-left">
                            <span class="card-title">Ver categorías</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary float-right"  data-placement="left" href="{{ route('categoria.index') }}"> 
                            {{ __('Atrás') }}
                            </a>
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
