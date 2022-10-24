@extends('layouts.app')

@section('template_title')
    Venta
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <form method="GET" action="{{ route('Sales.share') }}">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="buscarV" placeholder="Buscar">
                                        <button class="btn btn-outline-primary input-group-text" type="submit">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                    </div>
                                </form>
                            </span>

                            <div class="float-right">
                                <a href="{{ route('ventas.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    
                                  {{ __('Mostrar todo') }}
                                </a>
                              </div>
                            

                             <div class="float-right">
                                <a href="{{ route('ventas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Venta</th>
										<th>Cantidad</th>
										<th>Precio</th>
										<th>Total Venta</th>
										<th>Fecha Venta</th>
										<th>Producto</th>

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
											<td>{{ $venta->Producto->producto }}</td>

                                            <td>
                                                <form action="{{ route('ventas.destroy',$venta->id) }}" method="POST">
                                                    <abbr title="Ver">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('ventas.show',$venta->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    </abbr>
                                                    <abbr title="Editar">
                                                        <a class="btn btn-sm btn-success" href="{{ route('ventas.edit',$venta->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                    </abbr>
                                                    @csrf
                                                    @method('DELETE')
                                                    <abbr title="Eliminar">
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
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
