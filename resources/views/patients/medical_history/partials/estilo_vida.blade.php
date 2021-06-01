<div class="card">
    <div class="card-header">Estilo de vida</div>
    <div class="card-body">
        <label class="fw-bold">Actividad física</label>
        <div class="row">
            <div class="col">
                <div class="form check">
                    {!! Form::label('actividad', 'Muy ligera', ['class' => 'form-check-label']) !!}
                    {!! Form::radio('actividad', 'Muy ligera', ['class' => 'form-check-input']) !!}
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    {!! Form::label('actividad', 'Ligera', ['class' => 'form-check-label']) !!}
                    {!! Form::radio('actividad', 'Ligera', ['class' => 'form-check-input']) !!}
                </div>
            </div>
            <div class="col">
                <div class="form check">
                    {!! Form::label('actividad', 'Moderada', ['class' => 'form-check-label']) !!}
                    {!! Form::radio('actividad', 'Moderada', ['class' => 'form-check-input']) !!}
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    {!! Form::label('actividad', 'Pesada', ['class' => 'form-check-label']) !!}
                    {!! Form::radio('actividad', 'Pesada', ['class' => 'form-check-input']) !!}
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    {!! Form::label('actividad', 'Excepcional', ['class' => 'form-check-label']) !!}
                    {!! Form::radio('actividad', 'Excepcional', ['class' => 'form-check-input']) !!}
                </div>
            </div>
        </div>
        <br>
        <label class="fw-bold">Ejercicio</label>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    {!! Form::label('tipo', 'Tipo') !!}
                    {!! Form::select('tipo', ['- Seleccionar -', 'Ninguno', 'Caridio', 'Pesas'], $tipo ?? null, ['class' => 'form-select']) !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('dias', 'Días') !!}
                    {!! Form::select('dias', ['- Seleccionar -', '0', '1', '2', '3', '4', '5', '6', '7'], $dias ?? null, ['class' => 'form-select']) !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('tiempo', 'Tiempo') !!}
                    {!! Form::text('tiempo', $tiempo ?? '', ['class' => 'form-control', 'placeholder' => 'Ej. *De 0 a 30 minutos*']) !!}
                </div>
            </div>
        </div>
        <br>
        <label class="fw-bold">Consumo de... (Frecuencia y cantidad)</label>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    {!! Form::label('alcohol', 'Alcohol') !!}
                    {!! Form::select('acohol', ['- Seleccionar -', 'Nunca', 'Casi nunca', 'Frecuentemente', 'Muy frecuentemente', 'En exceso'], $alcohol ?? null, ['class' => 'form-select']) !!}
                    <br>
                    {!! Form::text('alcohol_esp', $alcohol_esp ?? '', ['class' => 'form-control', 'placeholder' => 'Ej. *Una copa al día*']) !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('tabaco', 'Tabaco') !!}
                    {!! Form::select('tabaco', ['- Seleccionar -', 'Nunca', 'Casi nunca', 'Frecuentemente', 'Muy frecuentemente', 'En exceso'], $tabaco ?? null, ['class' => 'form-select']) !!}
                    <br>
                    {!! Form::text('tabaco_esp', $tabaco_esp ?? '', ['class' => 'form-control', 'placeholder' => 'Ej. *Una cajetilla al día*']) !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('cafe', 'Café') !!}
                    {!! Form::select('cafe', ['- Seleccionar -', 'Nunca', 'Casi nunca', 'Frecuentemente', 'Muy frecuentemente', 'En exceso'], $cafe ?? null, ['class' => 'form-select']) !!}
                    <br>
                    {!! Form::text('cafe_esp', $cafe_esp ?? '', ['class' => 'form-control', 'placeholder' => 'Ej. *Dos tazas al día*']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
