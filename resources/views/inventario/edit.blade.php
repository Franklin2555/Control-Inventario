@extends('layouts.app') @extends('layouts.template')

@section('template_title')
    Update Inventario
@endsection

@section('content')
    <section class="content container">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class ="card text-white bg-dark">
                    <div class="card-header">
                        <span class="card-title"><i class="fa fa-truck fa-lg" aria-hidden="true"></i> Edidar Inventario</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('inventario.update', $inventario->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('inventario.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
