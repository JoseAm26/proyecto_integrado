<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $tarjeta->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_tarjeta') }}
            {{ Form::text('numero_tarjeta', $tarjeta->numero_tarjeta, ['class' => 'form-control' . ($errors->has('numero_tarjeta') ? ' is-invalid' : ''), 'placeholder' => 'Numero Tarjeta']) }}
            {!! $errors->first('numero_tarjeta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ccv') }}
            {{ Form::text('ccv', $tarjeta->ccv, ['class' => 'form-control' . ($errors->has('ccv') ? ' is-invalid' : ''), 'placeholder' => 'Ccv']) }}
            {!! $errors->first('ccv', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>