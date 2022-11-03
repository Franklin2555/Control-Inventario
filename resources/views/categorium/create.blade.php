@extends('layouts.app') @extends('layouts.template')


@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class ="card text-white bg-dark">
                    <div class="card-header">
                        <span class="card-title">Crear nueva categoría</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categoria.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('categorium.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
