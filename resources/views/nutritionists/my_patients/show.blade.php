@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h1>Datos del paciente</h1>
                <label class="font-weight-bold">Nombre</label>
                <p>{{ $patientProfile->user->name }}</p>
                <label class="font-weight-bold">Sobre mi</label>
                <p>{{ $patientProfile->description }}</p>
                <label class="font-weight-bold">Contacto</label>
                <p>{{ $patientProfile->user->email }}</p>
                <p>{{ $patientProfile->phone_number }}</p>
                <label class="font-weight-bold">Datos personales: </label><br>
                <label class="font-weight-bold">Ocupación/Trabajo</label>
                <p>{{ $patientProfile->occupation }}</p>
                <label class="font-weight-bold">Escolaridad</label>
                <p>{{ $patientProfile->scholarship }}</p>
                <label class="font-weight-bold">Peso</label>
                <p>{{ "$patientProfile->weight Kg." }}</p>
                <label class="font-weight-bold">Estatura</label>
                <p>{{ "$patientProfile->height cm" }}</p>
            </div>
        </div>
    </div>
@endsection
