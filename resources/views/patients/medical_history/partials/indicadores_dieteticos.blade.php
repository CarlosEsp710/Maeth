<div class="card">
    <div class="card-header">Indicadores dietéticos</div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    {!! Form::label('num_comidas', '¿Cuántas comidas hace al día?') !!}
                    {!! Form::number('num_comidas', $num_comidas ?? '', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('prep_comida', '¿Quién prepara su comida?') !!}
                    {!! Form::text('prep_comida', $prep_comida ?? '', ['class' => 'form-control', 'placeholder' => 'Yo mismo, mi esposa, ect.']) !!}
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    {!! Form::label('casa', 'Comidas en casa') !!}
                    {!! Form::number('entre_casa', $entre_casa ?? '', ['class' => 'form-control', 'placeholder' => 'Entre semana']) !!}
                    {!! Form::number('fin_casa', $fin_casa ?? '', ['class' => 'form-control', 'placeholder' => 'Fin de semana']) !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('fuera', 'Comidas fuera') !!}
                    {!! Form::number('entre_fuera', $entre_fuera ?? '', ['class' => 'form-control', 'placeholder' => 'Entre semana']) !!}
                    {!! Form::number('fin_fuera', $fin_fuera ?? '', ['class' => 'form-control', 'placeholder' => 'Fin de semana']) !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('hora_comida', 'Horarios de comida') !!}
                    {!! Form::text('hora_entre', $hora_entre ?? '', ['class' => 'form-control', 'placeholder' => '2:30 - 3:20 pm']) !!}
                    {!! Form::text('hora_fin', $hora_fin ?? '', ['class' => 'form-control', 'placeholder' => '4:00 - 4:30 pm']) !!}
                </div>
            </div>
        </div>
        <hr>
        <label>Apetito</label>
        <div class="row">
            <div class="col">
                <div class="form-check">
                    {!! Form::label('apetito', 'Bueno', ['class' => 'form-check-label']) !!}
                    {!! Form::radio('apetito', 'Bueno', ['class' => 'form-check-input']) !!}
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    {!! Form::label('apetito', 'Regular', ['class' => 'form-check-label']) !!}
                    {!! Form::radio('apetito', 'Regular', ['class' => 'form-check-input']) !!}
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    {!! Form::label('apetito', 'Malo', ['class' => 'form-check-label']) !!}
                    {!! Form::radio('apetito', 'Malo', ['class' => 'form-check-input']) !!}
                </div>
            </div>
        </div>
        <br>
        <label>¿En qué horario tiene más hambre?</label>
        <div class="row">
            <div class="col">
                <div class="form-check">
                    {!! Form::radio('horario', 'Mañana', ['class' => 'form-check-input']) !!}
                    {!! Form::label('horario', 'Mañana', ['class' => 'form-check-label']) !!}
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    {!! Form::label('horario', 'Tarde', ['class' => 'form-check-label']) !!}
                    {!! Form::radio('horario', 'Tarde', ['class' => 'form-check-input']) !!}
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    {!! Form::label('horario', 'Noche', ['class' => 'form-check-label']) !!}
                    {!! Form::radio('horario', 'Noche', ['class' => 'form-check-input']) !!}
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            {!! Form::label('especifique', 'Especifique...') !!}
            {!! Form::text('apetito_esp', $apetito_esp ?? '', ['class' => 'form-control']) !!}
        </div>
        <hr>
        <label>Alimentos y características</label>
        <div class="form-group">
            {!! Form::label('alimentos_pref', 'Alimentos preferidos (Separados por coma)') !!}
            <br>
            {!! Form::text('alimentos_pref', $alimentos_pref ?? '', ['class' => 'form-control', 'data-role' => 'tagsinput']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('alimentos_no', 'Alimentos que no le agradan / no acostumbra (Separados por coma)') !!}
            <br>
            {!! Form::text('alimentos_no', $alimentos_no ?? '', ['class' => 'form-control', 'data-role' => 'tagsinput']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('alimentos_malestar', 'Alimentos que le causan malestar (Separados por coma)') !!}
            <br>
            {!! Form::text('alimentos_malestar', $alimentos_malestar ?? '', ['class' => 'form-control', 'data-role' => 'tagsinput']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('alergia', '¿Alérgico o intolerante a algún alimento? (Separados por coma)') !!}
            <br>
            {!! Form::text('alergia', $alergia ?? '', ['class' => 'form-control', 'data-role' => 'tagsinput']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('suplemento', '¿Toma usted algún suplemento alimenticio? (Separados por coma)') !!}
            <br>
            {!! Form::text('suplemento', $suplemento ?? '', ['class' => 'form-control', 'data-role' => 'tagsinput']) !!}
        </div>
        <hr>
        <label>Consumo y variantes</label>
        <div class="row">
            <div class="col">
                <div class="form-check">
                    {!! Form::label('sal', '¿Agrega "sal" a las comidas ya preparadas?', ['class' => 'form-check-label']) !!}
                    {!! Form::checkbox('sal', 'Sal', $sal ?? null, ['class' => 'form-check-input']) !!}
                </div>
                <br>
                <div class="form-check">
                    {!! Form::label('dieta', '¿Ha llevado alguna dieta especial?', ['class' => 'form-check-label']) !!}
                    {!! Form::checkbox('dieta', 'Dieta', $dieta ?? null, ['class' => 'form-check-input']) !!}
                </div>
                <div class="form-check">
                    {!! Form::label('tratamiento', '¿Ha utilizado algún tratamiento para bajar de peso?', ['class' => 'form-check-label']) !!}
                    {!! Form::checkbox('tratamiento', 'Tratamiento', $dieta ?? null, ['class' => 'form-check-input']) !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::text('sal_esp', $sal_esp ?? '', ['class' => 'form-control', 'placeholder' => 'Especifique...']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('dieta_esp', $dieta_esp ?? '', ['class' => 'form-control', 'placeholder' => 'Especifique...']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('tratamiento_esp', $tratamiento_esp ?? '', ['class' => 'form-control', 'placeholder' => 'Especifique...']) !!}
                </div>
            </div>
        </div>
        <hr>
        <label>Dieta habitual</label>
        <div class="form-group">
            {!! Form::label('dieta_desayuno', 'Desayuno', ['class' => 'fw-bold']) !!}
            {!! Form::textarea('dieta_desayuno', $dieta_desayuno ?? '', ['class' => 'form-control', 'rows' => '2']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('colacion1', 'Colación', ['class' => 'fw-bold']) !!}
            {!! Form::textarea('colacion1', $colacion1 ?? '', ['class' => 'form-control', 'rows' => '2']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('dieta_comida', 'Comida', ['class' => 'fw-bold']) !!}
            {!! Form::textarea('dieta_comida', $dieta_comida ?? '', ['class' => 'form-control', 'rows' => '2']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('colacion2', 'Colación', ['class' => 'fw-bold']) !!}
            {!! Form::textarea('colacion2', $colacion1 ?? '', ['class' => 'form-control', 'rows' => '2']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('dieta_cena', 'Cena', ['class' => 'fw-bold']) !!}
            {!! Form::textarea('dieta_cena', $dieta_cena ?? '', ['class' => 'form-control', 'rows' => '2']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('colacion3', 'Colación', ['class' => 'fw-bold']) !!}
            {!! Form::textarea('colacion3', $colacion3 ?? '', ['class' => 'form-control', 'rows' => '2']) !!}
        </div>
    </div>
</div>
