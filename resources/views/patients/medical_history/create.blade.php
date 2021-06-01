@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center">Historia Clínica</h1>
                {!! Form::open(['route' => 'medical_history.pdf']) !!}
                @include('patients.medical_history.partials.datos_paciente')
                <br>
                @include('patients.medical_history.partials.indicadores_clinicos')
                <br>
                @include('patients.medical_history.partials.antecedentes')
                <br>
                @include('patients.medical_history.partials.estilo_vida')
                <br>
                @include('patients.medical_history.partials.diario_actividades')
                <br>
                @include('patients.medical_history.partials.indicadores_dieteticos')
                <br>
                {!! Form::submit('Enviar', ['class' => 'btn btn-link']) !!}
                <br>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
