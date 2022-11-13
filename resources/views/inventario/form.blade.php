<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    {{ Form::label('Inventario') }}
                    {{ Form::text('producto', $inventario->producto, ['class' => 'form-control bg-dark text-white' . ($errors->has('producto') ? ' is-invalid' : ''), 'id' => 'input_id', 'placeholder' => 'Ingresar nuevo inventario']) }}
                    {!! $errors->first('producto', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mt-2">
                    {{ Form::label('cantidad') }}
                    {{ Form::text('cantidad', $inventario->cantidad, ['class' => 'form-control bg-dark text-white ' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'id' => 'input_id', 'placeholder' => 'Ingresar cantidad']) }}
                    {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    {{ Form::label('precio') }}
                    {{ Form::text('precio', $inventario->precio, ['class' => 'form-control bg-dark text-white ' . ($errors->has('precio') ? ' is-invalid' : ''), 'id' => 'input_id', 'placeholder' => 'Ingresar precio']) }}
                    {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group mt-2">
                    {{ Form::label('unidades') }}
                    {{ Form::text('unidades', $inventario->unidades, ['class' => 'form-control bg-dark text-white ' . ($errors->has('unidades') ? ' is-invalid' : ''), 'id' => 'input_id', 'placeholder' => 'Ingresar unidades']) }}
                    {!! $errors->first('unidades', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group mt-2">
            {{ Form::label('costo') }}
            {{ Form::text('costo', $inventario->costo, ['class' => 'form-control bg-dark text-white' . ($errors->has('costo') ? ' is-invalid' : ''),'id' => 'input_id', 'placeholder' => 'Ingresar costo por unidad']) }}
            {!! $errors->first('costo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer my-4" style="text-align: center">
        <button type="submit" class="btn btn-dark">Enviar</button>
    </div>
</div>