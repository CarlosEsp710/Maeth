<div class="card">
    <div class="card-header">Antecedentes Familiares</div>
    <div class="card-body">
        <div class="form-check">
            {!! Form::label('obesidad', 'Obesidad', ['class' => 'form-check-label']) !!}
            {!! Form::checkbox('obesidad', 'Obesidad', $obesidad ?? null, ['class' => 'form-check-input']) !!}
            {!! Form::text('esp1', $esp1 ?? '', ['class' => 'form-control', 'placeholder' => 'Especifique...']) !!}
        </div>
        <div class="form-check">
            {!! Form::label('diabetes', 'Diabetes', ['class' => 'form-check-label']) !!}
            {!! Form::checkbox('diabetes', 'Diabetes', $diabetes ?? null, ['class' => 'form-check-input']) !!}
            {!! Form::text('esp2', $esp2 ?? '', ['class' => 'form-control', 'placeholder' => 'Especifique...']) !!}
        </div>
        <div class="form-check">
            {!! Form::label('hta', 'HTA', ['class' => 'form-check-label']) !!}
            {!! Form::checkbox('hta', 'HTA', $hta ?? null, ['class' => 'form-check-input']) !!}
            {!! Form::text('esp3', $esp3 ?? '', ['class' => 'form-control', 'placeholder' => 'Especifique...']) !!}
        </div>
        <div class="form-check">
            {!! Form::label('cancer', 'Cáncer', ['class' => 'form-check-label']) !!}
            {!! Form::checkbox('cancer', 'Cáncer', $cancer ?? null, ['class' => 'form-check-input']) !!}
            {!! Form::text('esp4', $esp4 ?? '', ['class' => 'form-control', 'placeholder' => 'Especifique...']) !!}
        </div>
        <div class="form-check">
            {!! Form::label('hipercolesterolemia', 'Hipercolesterolemia', ['class' => 'form-check-label']) !!}
            {!! Form::checkbox('hipercolesterolemia', 'Hipercolesterolemia', $hipercolesterolemia ?? null, ['class' => 'form-check-input']) !!}
            {!! Form::text('esp5', $esp5 ?? '', ['class' => 'form-control', 'placeholder' => 'Especifique...']) !!}
        </div>
        <div class="form-check">
            {!! Form::label('hipertrigliceridemia', 'Hipertrigliceridemia', ['class' => 'form-check-label']) !!}
            {!! Form::checkbox('hipertrigliceridemia', 'Hipertrigliceridemia', $hipertrigliceridemia ?? null, ['class' => 'form-check-input']) !!}
            {!! Form::text('esp6', $esp6 ?? '', ['class' => 'form-control', 'placeholder' => 'Especifique...']) !!}
        </div>
    </div>
</div>

<br>

<div class="card">
    <div class="card-header">Antecedentes Ginecológicos</div>
    <div class="card-body">
        <div class="form-check">
            {!! Form::label('embarazo', 'Embarazo actual', ['class' => 'form-check-label']) !!}
            {!! Form::checkbox('embarazo', 'Embarazo actual', $embarazo ?? null, ['class' => 'form-check-input']) !!}
            {!! Form::text('esp7', $esp7 ?? '', ['class' => 'form-control', 'placeholder' => 'Especifique...']) !!}
        </div>
        <div class="form-check">
            {!! Form::label('anticonceptivos', 'Anticonceptivos orales', ['class' => 'form-check-label']) !!}
            {!! Form::checkbox('anticonceptivos', 'Anticonceptivos orales', $anticonceptivos ?? null, ['class' => 'form-check-input']) !!}
            {!! Form::text('esp8', $esp8 ?? '', ['class' => 'form-control', 'placeholder' => 'Especifique...']) !!}
        </div>
        <div class="form-check">
            {!! Form::label('climaterio', 'Climaterio', ['class' => 'form-check-label']) !!}
            {!! Form::checkbox('climaterio', 'Climaterio', $climaterio ?? null, ['class' => 'form-check-input']) !!}
            {!! Form::text('esp9', $esp9 ?? '', ['class' => 'form-control', 'placeholder' => 'Especifique...']) !!}
        </div>
        <div class="form-check">
            {!! Form::label('reemplazo', 'Reemplazo hormonal', ['class' => 'form-check-label']) !!}
            {!! Form::checkbox('reemplazo', 'Reemplazo hormonal', $reemplazo ?? null, ['class' => 'form-check-input']) !!}
            {!! Form::text('esp10', $esp10 ?? '', ['class' => 'form-control', 'placeholder' => 'Especifique...']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('observations2', 'Observaciones') !!}
            {!! Form::textarea('observations2', $observations2 ?? '', ['class' => 'form-control', 'rows' => '2']) !!}
        </div>
    </div>
</div>
