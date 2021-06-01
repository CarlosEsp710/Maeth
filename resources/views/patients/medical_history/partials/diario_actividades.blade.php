<div class="card">
    <div class="card-header">Diario de actividades</div>
    <div class="card-body">
        <div class="row">
            <div class="col-3">
                <h6>Hora</h6>
                <div class="form-group">
                    {!! Form::text('hora_1', $hora_1 ?? '', ['class' => 'form-control', 'placeholder' => '5:00 am']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('hora_2', $hora_2 ?? '', ['class' => 'form-control', 'placeholder' => '7:00 am']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('hora_3', $hora_3 ?? '', ['class' => 'form-control', 'placeholder' => '3:00 pm']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('hora_4', $hora_4 ?? '', ['class' => 'form-control', 'placeholder' => '8:30 pm']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('hora_5', $hora_5 ?? '', ['class' => 'form-control', 'placeholder' => '10:00 pm']) !!}
                </div>
            </div>
            <div class="col">
                <h6>Principal actividad realizada</h6>
                <div class="form-group">
                    {!! Form::text('despierta', $despierta ?? '', ['class' => 'form-control', 'placeholder' => 'Se despierta']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('desayuna', $desayuna ?? '', ['class' => 'form-control', 'placeholder' => 'Desayuna']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('come', $come ?? '', ['class' => 'form-control', 'placeholder' => 'Come']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('cena', $cena ?? '', ['class' => 'form-control', 'placeholder' => 'Cena']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('duerme', $duerme ?? '', ['class' => 'form-control', 'placeholder' => 'Duerme']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
