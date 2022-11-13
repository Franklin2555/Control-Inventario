@extends('layouts.app') @extends('layouts.template')

@section('template_title')
    Update Categorium
@endsection

@section('content')
    <section class="content container">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class ="card text-white bg-dark">
                    <div class="card-header">
                        <span class="card-title"><i class="fa fa-bookmark fa-lg" aria-hidden="true"></i> Editar categoría</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categoria.update', $categorium->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('categorium.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
