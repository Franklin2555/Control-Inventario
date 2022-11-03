@extends('layouts.app')

@section('template_title')
    Update Categorium
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class ="card text-white bg-dark">
                    <div class="card-header">
                        <span class="card-title">Editar categoría</span>
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
