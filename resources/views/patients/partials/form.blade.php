<div class="form-group">
    {!! Form::label('address', 'Dirección') !!}
    {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Agrega una dirección']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone_number', 'Número de teléfono') !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control', 'placeholder' => 'Agrega un número de teléfono']) !!}
</div>
<div class="form-group">
    {!! Form::label('occupation', 'Ocupación') !!}
    {!! Form::text('occupation', null, ['class' => 'form-control', 'placeholder' => 'Agrega tu ocupación/trabajo']) !!}
</div>
<div class="form-group">
    {!! Form::label('address', 'Escolaridad') !!}
    {!! Form::text('scholarship', null, ['class' => 'form-control', 'placeholder' => 'Agrega tu último grado de estudios']) !!}
</div>
<div class="form-group">
    {!! Form::label('height', 'Estatura') !!}
    {!! Form::text('height', null, ['class' => 'form-control', 'placeholder' => 'Agrega tu estatura en centímetros']) !!}
</div>
<div class="form-group">
    {!! Form::label('weight', 'Peso') !!}
    {!! Form::text('weight', null, ['class' => 'form-control', 'placeholder' => 'Agrega tu peso en kilogramos']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Descripción') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3]) !!}
</div>
<hr>
<div class="form-group">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
</div>
