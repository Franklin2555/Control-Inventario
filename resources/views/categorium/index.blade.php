@extends('layouts.app') @extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card text-white bg-dark">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            <form method="GET" action="{{ route('category.share') }}">
                                <div class="input-group mb-3">
                                    <input id="input_id" type="text" class="form-control bg-dark" 
                                        name="buscarC" placeholder="Buscar" style="color: white">
                                    <button class="btn btn-outline-primary input-group-text" type="submit">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                            </form>
                        </span>

                        <div class="float-right">

                            <a href="{{ route('categoria.index') }}" class="btn btn-dark btn-sm float-right" data-placement="left">
                                {{ __('Mostrar todo') }}
                            </a>
                            &nbsp;
                            <a href="{{ route('categoria.report') }}" class="btn btn-dark btn-sm float-right" data-placement="left">
                                {{ __('PDF') }}
                            </a>
                            &nbsp;
                            <a href="{{ route('categoria.create') }}" class="btn btn-dark btn-sm float-right" data-placement="left">
                                {{ __('Nueva Categoría') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-dark">
                            <thead class="thead">
                                <tr>
                                    <th>N°</th>

                                    <th>Categoria</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categoria as $categorium)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $categorium->categoria }}</td>

                                    <td style="text-align: end">
                                        <form action="{{ route('categoria.destroy',$categorium->id) }}" method="POST">
                                            <abbr title="Ver">
                                                <a class="btn btn-sm btn-dark" id="ver" href="{{ route('categoria.show',$categorium->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                            </abbr>
                                            <abbr title="Editar">
                                                <a class="btn btn-sm btn-dark" id="editar" href="{{ route('categoria.edit',$categorium->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                            </abbr>
                                            @csrf
                                            @method('DELETE')
                                            <abbr title="Eliminar">
                                                <button type="submit" class="btn btn-dark btn-sm" id="eliminar"><i class="fa fa-fw fa-trash"></i></button>
                                            </abbr>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end">
                        {!! $categoria->links() !!}
                    </div>
                </div>
                <p id="resultado">

                </p>
            </div>
        </div>
    </div>
</div>
@endsection
