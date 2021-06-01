<div class="card">
    <div class="card-header">Datos del paciente</div>
    <div class="card-body">
        <div class="row align-items-start">
            <div class="col">
                <div class="form-group">
                    {!! Form::label('full_name', 'Nombre completo') !!}
                    {!! Form::text('full_name', $name ?? '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('address', 'Domicilio') !!}
                    {!! Form::text('address', $address ?? '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('phone_number', 'Teléfono') !!}
                    {!! Form::text('phone_nomber', $phone_number ?? '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('job', 'Ocupación') !!}
                    {!! Form::text('job', $job ?? '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('scholarship', 'Escolaridad') !!}
                    {!! Form::text('scholarship', $scholarship ?? '', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('gender', 'Sexo') !!}
                    {!! Form::select('gender', ['- Seleccionar -', 'Masculino', 'Femenino'], $gender ?? null, ['class' => 'form-select']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('age', 'Edad') !!}
                    {!! Form::number('age', $age ?? '', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('status', 'Estado civil') !!}
                    {!! Form::select('status', ['- Seleccionar -', 'Soltero', 'Casado', 'Divorciado', 'Viudo'], $status ?? null, ['class' => 'form-select']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('reason', 'Motivo de consulta') !!}
                    {!! Form::textarea('reason', $reason ?? '', ['class' => 'form-control', 'rows' => '3']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
