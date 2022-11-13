@extends('layouts.app') @extends('layouts.template')

@section('template_title')
    Update Producto
@endsection

@section('content')
    <section class="content container">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class ="card text-white bg-dark">
                    <div class="card-header">
                        <span class="card-title"><i class="fa fa-burger fa-lg" aria-hidden="true"></i> Editar producto</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('producto.update', $producto->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('producto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
