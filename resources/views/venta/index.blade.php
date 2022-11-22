@extends('layouts.app') @extends('layouts.template')

@section('template_title')
    Venta
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card text-white bg-dark">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <form method="GET" action="{{ route('Sales.share') }}">
                                    <div class="input-group mb-3">
                                        <input id="input_id" type="text" class="form-control bg-dark" name="buscarV"
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
                                        <a href="{{ route('ventas.index') }}" class="btn btn-dark btn-sm float-right"
                                            data-placement="left">
                                            {{ __('Mostrar todo') }}
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <form method="GET" action="{{ route('ventas.report') }}">
                                            <div class="row">
                                                <div class="col-8">
                                                    <input id="input_id fechas" type="date" class="form-control bg-dark"
                                                        name="filterPDF" value="<?php echo date('Y-m-d');?>" style="color: white">
                                                </div>
                                                <div class="col-2">
                                                    <button class="btn btn-dark" type="submit">
                                                        PDF
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-3">
                                        <a href="{{ route('ventas.create') }}" class="btn btn-dark btn-sm float-right"
                                            data-placement="left">
                                            {{ __('Nueva venta') }}
                                        </a>
                                    </div>

                                    {{-- <a href="" class="btn btn-dark btn-sm float-right"  data-placement="left">
                                    {{ __('PDF') }}
                                </a> --}}

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

                                        <th>Venta</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Total Venta</th>
                                        <th>Fecha Venta</th>
                                        <th hidden>Producto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ventas as $venta)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $venta->producto }}</td>
                                            <td>{{ $venta->cantidad }}</td>
                                            <td>{{ $venta->precio }}</td>
                                            <td>{{ $venta->total_venta }}</td>
                                            <td>{{ $venta->fecha_venta }}</td>
                                            <td hidden>{{ $venta->Producto->producto }}</td>

                                            <td style="text-align: end">
                                                <form action="{{ route('ventas.destroy', $venta->id) }}" method="POST">
                                                    <abbr title="Ver">
                                                        <a class="btn btn-sm btn-dark"
                                                            href="{{ route('ventas.show', $venta->id) }}"><i
                                                                class="fa fa-fw fa-eye"></i></a>
                                                    </abbr>
                                                    <abbr title="Editar">
                                                        <a class="btn btn-sm btn-dark"
                                                            href="{{ route('ventas.edit', $venta->id) }}"><i
                                                                class="fa fa-fw fa-edit"></i></a>
                                                    </abbr>
                                                    @csrf
                                                    @method('DELETE')
                                                    <abbr title="Eliminar">
                                                        <button type="submit" class="btn btn-sm btn-dark"><i
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
                            {!! $ventas->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
