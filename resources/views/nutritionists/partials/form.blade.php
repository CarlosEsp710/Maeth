<div class="form-group">
    {!! Form::label('address', 'Dirección') !!}
    {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Agrega una dirección']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone_number', 'Número de teléfono') !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control', 'placeholder' => 'Agrega un número de teléfono']) !!}
</div>
<div class="form-group">
    {!! Form::label('curriculum', 'Currículum') !!}
    {!! Form::file('curriculum', ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('identiication_card', 'Número de cédula prodesional') !!}
    {!! Form::text('identification_card', null, ['class' => 'form-control']) !!}
</div>
<div>
    {!! Form::label('description', 'Descripción') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3]) !!}
</div>
<hr>
<div class="form-group">
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
</div>
