<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('categoría') }}
            {{ Form::text('categoria', $categorium->categoria, ['class' => 'form-control' . ($errors->has('categoria') ? ' is-invalid' : ''), 'placeholder' => 'Categoría']) }}
            {!! $errors->first('categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-dark">Enviar</button>
    </div>
</div>