@extends('layouts.app') @extends('layouts.template')

@section('template_title')
    Producto
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card text-white bg-dark"">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <form method="GET" action="{{ route('product.share') }}">
                                    <div class="input-group mb-3">
                                        <input id="input_id" type="text" class="form-control bg-dark" name="buscarP" placeholder="Buscar" style="color: white">
                                        <button class="btn btn-outline-light input-group-text" type="submit">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                    </div>
                                </form>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('producto.index') }}" class="btn btn-dark float-right"  data-placement="left">
                                    {{ __('Mostrar todo') }}
                                  </a>
&nbsp;
                                <a href="{{ route('producto.report') }}" class="btn btn-dark float-right"  data-placement="left">
                                    {{ __('PDF') }}
                                </a>
&nbsp;
                                <a href="{{ route('producto.create') }}" class="btn btn-dark float-right"  data-placement="left">
                                  {{ __('Nuevo producto') }}
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
                                        <th>No</th>
                                        
										<th>Producto</th>
										<th>Tiempo</th>
										<th>Precio</th>
										<th>Categoría</th>
										<th>Inventario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $producto->producto }}</td>
											<td>{{ $producto->tiempo }}</td>
											<td>{{ $producto->precio }}</td>
											<td>{{ $producto->categorium->categoria }}</td>
											<td>{{ $producto->inventario->producto }}</td>

                                            <td>
                                                <form action="{{ route('producto.destroy',$producto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-dark" href="{{ route('producto.show',$producto->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a class="btn btn-sm btn-dark" href="{{ route('producto.edit',$producto->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-dark btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end">
                            {!! $productos->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
