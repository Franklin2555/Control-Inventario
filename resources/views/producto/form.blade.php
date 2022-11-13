<div class="box box-info padding-1">
    <div class="box-body"> 
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    {{ Form::label('Productos') }}
                    {{ Form::text('producto', $producto->producto, ['class' => 'form-control bg-dark text-white' . ($errors->has('producto') ? ' is-invalid' : ''), 'id' => 'input_id', 'placeholder' => 'Ingresar nuevo producto']) }}
                    {!! $errors->first('producto', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mt-2">
                    {{ Form::label('tiempo') }}
                    {{ Form::text('tiempo', $producto->tiempo, ['class' => 'form-control bg-dark text-white' . ($errors->has('tiempo') ? ' is-invalid' : ''), 'id' => 'input_id', 'placeholder' => 'Ingresar el tiempo']) }}
                    {!! $errors->first('tiempo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    {{ Form::label('Precio') }}
                    {{ Form::text('precio', $producto->precio, ['class' => 'form-control bg-dark text-white' . ($errors->has('precio') ? ' is-invalid' : ''), 'id' => 'input_id', 'placeholder' => 'Ingresar el precio']) }}
                    {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mt-2">
                    {{ Form::label('Categoría') }}
                    {{ Form::select('categoria_id', $categorias, $producto->categoria_id, ['class' => 'form-control bg-dark text-white' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'id' => 'input_id', 'placeholder' => 'Selecciona la categoria']) }}
                    {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group mt-2">
            {{ Form::label('Inventario') }}
            {{ Form::select('inventario_id', $inventario, $producto->inventario_id, ['class' => 'form-control bg-dark text-white' . ($errors->has('inventario_id') ? ' is-invalid' : ''), 'id' => 'input_id', 'placeholder' => 'Selecciona el producto del Inventario']) }}
            {!! $errors->first('inventario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer my-4" style="text-align: center">
        <button type="submit" class="btn btn-dark">Enviar</button>
    </div>
</div>