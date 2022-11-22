<!-- Formulario de ventas -->
<div class="box box-info padding-1">
    <div class="box-body">
        @php
            date_default_timezone_set('America/El_Salvador');
            $fecha = date('Y-m-d');
        @endphp
        
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    {{ Form::label('Venta')}}
                    {{ Form::text('producto', $venta->producto, ['class' => 'form-control bg-dark text-white' . ($errors->has('venta') ? ' is-invalid' : ''), 'id' => 'input_id', 'placeholder' => 'Ingresar nueva venta', 'autocomplete' => 'off']) }}
                    {!! $errors->first('producto', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mt-2">
                    {{ Form::label('cantidad') }}
                    {{ Form::text('cantidad', $venta->cantidad, ['class' => 'form-control bg-dark text-white' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'id' => 'input_id', 'placeholder' => 'Ingrese la cantidad', 'autocomplete' => 'off']) }}
                    {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mt-2">
                    {{ Form::label('Precio') }}
                    {{ Form::text('precio', $venta->precio, ['class' => 'form-control bg-dark text-white' . ($errors->has('precio') ? ' is-invalid' : ''), 'id' => 'input_id', 'placeholder' => 'Ingrese el precio', 'autocomplete' => 'off']) }}
                    {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-6">
                <div class="form-group mt-2">
                    {{ Form::label('Total venta') }}
                    {{ Form::text('total_venta', $venta->total_venta, ['class' => 'form-control bg-dark text-white' . ($errors->has('total_venta') ? ' is-invalid' : ''), 'id' => 'input_id', 'placeholder' => 'Total de la venta', 'autocomplete' => 'off']) }}
                    {!! $errors->first('total_venta', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mt-2">
                    {{ Form::label('Fecha_venta') }}
                    {{ Form::date('fecha_venta', $venta->fecha_venta, ['class' => 'form-control bg-dark text-white'. ($errors->has('fecha_venta') ? ' is-invalid' : ''), 'id' => 'input_id']) }}
                    {!! $errors->first('fecha_venta', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mt-2">
                    {{ Form::label('Producto') }}
                    {{ Form::select('producto_id', $producto, $venta->producto_id, ['class' => 'form-control bg-dark text-white' . ($errors->has('producto_id') ? ' is-invalid' : ''), 'id' => 'input_id', 'placeholder' => 'Seleccione el producto']) }}
                    {!! $errors->first('producto_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        

    </div>
    <div class="box-footer my-4" style="text-align: center">
        <button type="submit" class="btn btn-dark">Enviar</button>
    </div>
</div>