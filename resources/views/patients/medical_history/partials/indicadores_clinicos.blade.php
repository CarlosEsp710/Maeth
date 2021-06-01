<div class="card">
    <div class="card-header">Indicadores clínicos</div>
    <div class="card-body">
        <h6 class="text-center fw-bold">Antecedentes/salud - Enfermedad</h6>
        <div class="row align-items-lg-start">
            <div class="col-3">
                <div class="form-check">
                    {!! Form::label('diarrea', 'Diarrea', ['class' => 'form-check-label']) !!}
                    {!! Form::checkbox('diarrea', 'Diarrea', $diarrea ?? null, ['class' => 'form-check-input']) !!}
                </div>
                <div class="form-check">
                    {!! Form::label('estreñimiento', 'Estreñimiento', ['class' => 'form-check-label']) !!}
                    {!! Form::checkbox('estreñimiento', 'Estreñimiento', $estreñimiento ?? null, ['class' => 'form-check-input']) !!}
                </div>
                <div class="form-check">
                    {!! Form::label('gastritis', 'Gastritis', ['class' => 'form-check-label']) !!}
                    {!! Form::checkbox('gastritis', 'Gastritis', $gastritis ?? null, ['class' => 'form-check-input']) !!}
                </div>
                <div class="form-check">
                    {!! Form::label('ulcera', 'Úlcera', ['class' => 'form-check-label']) !!}
                    {!! Form::checkbox('ulcera', 'Úlcera', $ulcera ?? null, ['class' => 'form-check-input']) !!}
                </div>
            </div>
            <div class="col-3">
                <div class="form-check">
                    {!! Form::label('nauseas', 'Náuseas', ['class' => 'form-check-label']) !!}
                    {!! Form::checkbox('nauseas', 'Náuseas', $nauseas ?? null, ['class' => 'form-check-input']) !!}
                </div>
                <div class="form-check">
                    {!! Form::label('pirosis', 'Pirosis', ['class' => 'form-check-label']) !!}
                    {!! Form::checkbox('pirosis', 'Pirosis', $pirosis ?? null, ['class' => 'form-check-input']) !!}
                </div>
                <div class="form-check">
                    {!! Form::label('vomito', 'Vómito', ['class' => 'form-check-label']) !!}
                    {!! Form::checkbox('vomito', 'Vómito', $vomito ?? null, ['class' => 'form-check-input']) !!}
                </div>
                <div class="form-check">
                    {!! Form::label('colitis', 'Colitis', ['class' => 'form-check-label']) !!}
                    {!! Form::checkbox('colitis', 'Colitis', $colitis ?? null, ['class' => 'form-check-input']) !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('diseases', 'Alguna enfermedad diagnosticada (Separadas por coma)', ['class' => 'fw-bold']) !!}
                    {!! Form::text('diseases', $diseases ?? '', ['class' => 'form-control', 'data-role' => 'tagsinput']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('medicines', 'Toma algún medicamento (Separados por coma)', ['class' => 'fw-bold']) !!}
                    {!! Form::text('medicines', $medicines ?? '', ['class' => 'form-control', 'data-role' => 'tagsinput']) !!}
                </div>
            </div>
        </div>
        <div>
            <label class="fw-bold">¿Consume actualemnte alguno de estos productos?</label>
            <div class="row">
                <div class="col">
                    <div class="form-check">
                        {!! Form::label('laxantes', 'Laxantes', ['class' => 'form-check-label']) !!}
                        {!! Form::checkbox('laxantes', 'Laxantes', $laxantes ?? null, ['class' => 'form-check-input']) !!}
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        {!! Form::label('diureticos', 'Diuréticos', ['class' => 'form-check-label']) !!}
                        {!! Form::checkbox('diureticos', 'Diuréticos', $diureticos ?? null, ['class' => 'form-check-input']) !!}
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        {!! Form::label('antiacidos', 'Antiácidos', ['class' => 'form-check-label']) !!}
                        {!! Form::checkbox('antiacidos', 'Antiácidos', $antiacidos ?? null, ['class' => 'form-check-input']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="form-group">
                {!! Form::label('observations', 'Observaciones', ['class' => 'fw-bold']) !!}
                {!! Form::textarea('observations', $observations ?? '', ['class' => 'form-control', 'rows' => '2']) !!}
            </div>
        </div>
    </div>
</div>
