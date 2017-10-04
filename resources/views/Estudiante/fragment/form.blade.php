<div class="form-group">
{!!Form::label('cedula', 'cedula del estudiante')!!}
{!!Form::text('cedula', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('email', 'correo electronico del estudiante')!!}
{!!Form::text('email', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('primer_nombre', 'primer nombre')!!}
{!!Form::text('primer_nombre', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::submit('ENVIAR', ['class'=>'btn btn-primary'])!!}

</div>