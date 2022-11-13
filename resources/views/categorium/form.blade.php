<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('categoría') }}
            {{ Form::text('categoria', $categorium->categoria, ['class' => 'form-control bg-dark text-white mt-2' . ($errors->has('categoria') ? ' is-invalid' : ''), 'id' => 'input_id' , 'placeholder' => 'Ingresa una nueva categoría']) }}
            {!! $errors->first('categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer my-4">
        <button type="submit" class="btn btn-dark">Enviar</button>
    </div>
</div>