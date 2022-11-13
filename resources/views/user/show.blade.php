@extends('layouts.app') @extends('layouts.template')

@section('template_title')
    {{ $user->name ?? 'Show User' }}
@endsection

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card text-white bg-dark"">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <div class="float-left">
                                    <span class="card-title"><i class="fas fa-user-tie"></i> Ver Usuario</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div style="text-align: end">
                                    <a class="btn btn-dark" href="{{ route('user.index') }}"> Regresar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre de usuario: </strong>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Electrónico:  </strong>
                            {{ $user->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
