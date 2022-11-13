<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    {{ Form::label('Usuario') }}
                    {{ Form::text('name', $user->name, ['class' => 'form-control bg-dark text-white mt-2' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
                    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    {{ Form::label('Correo electrónico')}}
                    {{ Form::text('email', $user->email, ['class' => 'form-control bg-dark text-white mt-2' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
                    {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

    </div>
    <div class="box-footer my-4" style="text-align: center">
        <button type="submit" class="btn btn-dark">Actualizar</button>
    </div>
</div>