@extends('layouts.app') @extends('layouts.template')

@section('template_title')
    Inventario
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card text-white bg-dark"">
                    <div class=" card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <form method="GET" action="{{ route('inventary.share') }}">
                                    <div class="input-group mb-3">
                                        <input id="input_id" type="text" class="form-control bg-dark" name="buscarI"
                                            placeholder="Buscar" style="color: white">
                                        <button class="btn btn-outline-primary input-group-text" type="submit">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                    </div>
                                </form>
                            </span>

                            <div class="float-right">
                                <div class="row">
                                    <div class="col-3">
                                        <a href="{{ route('inventario.index') }}" class="btn btn-dark btn-sm float-right"
                                            data-placement="left">
                                            {{ __('Mostrar todo') }}
                                        </a>
                                    </div>
                                    <div class="col-5">
                                        <form method="GET" action="{{ route('inventario.report') }}">
                                            <div class="row">
                                                <div class="col-8">
                                                    <input id="input_id fechas" type="date" class="form-control bg-dark"
                                                        name="filterPDF" value="<?php echo date('Y-m-d'); ?>" style="color: white">
                                                </div>
                                                <div class="col-2">
                                                    <button class="btn btn-dark" type="submit">
                                                        PDF
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-4">
                                        <a href="{{ route('inventario.create') }}" class="btn btn-dark btn-sm float-right"
                                            data-placement="left">
                                            {{ __('Nuevo inventario') }}
                                        </a>
                                    </div>
                                </div>
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
                                        <th>No</th>

                                        <th>Inventario</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Unidades</th>
                                        <th>Costo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inventarios as $inventario)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $inventario->producto }}</td>
                                            <td>{{ $inventario->cantidad }}</td>
                                            <td>$ {{ $inventario->precio }} USD</td>
                                            <td>{{ $inventario->unidades }}</td>
                                            <td>$ {{ $inventario->costo }} USD</td>

                                            <td style="text-align: end">
                                                <form action="{{ route('inventario.destroy', $inventario->id) }}"
                                                    method="POST">
                                                    <abbr title="Ver">
                                                        <a class="btn btn-sm btn-dark "
                                                            href="{{ route('inventario.show', $inventario->id) }}"><i
                                                                class="fa fa-fw fa-eye"></i></a>
                                                    </abbr>
                                                    <abbr title="Editar">
                                                        <a class="btn btn-sm btn-dark"
                                                            href="{{ route('inventario.edit', $inventario->id) }}"><i
                                                                class="fa fa-fw fa-edit"></i></a>
                                                    </abbr>
                                                    @csrf
                                                    @method('DELETE')
                                                    <abbr title="Eliminar">
                                                        <button type="submit" class="btn btn-dark btn-sm"><i
                                                                class="fa fa-fw fa-trash"></i></button>
                                                    </abbr>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end">
                            {!! $inventarios->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
