<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
</head>
    <body>
        <div class="container">
            <div class="row"> 
                <div class="col-sm-12">
                    <div class="card text-white bg-dark"">
                        <div class="card-header">
                            <h1 align="center">Reporte de Inventario</h1>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-dark">
                                    <thead class="thead">
                                        <tr>
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
                                                <td>{{ $inventario->producto }}</td>
                                                <td>{{ $inventario->cantidad }}</td>
                                                <td>${{ $inventario->precio }} USD</td>
                                                <td>{{ $inventario->unidades }}</td>
                                                <td>${{ $inventario->costo }} USD</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>