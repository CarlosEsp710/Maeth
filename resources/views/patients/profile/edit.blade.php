@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                @include('patients.profile.partials.errors')
                <div class="card">
                    <div class="card-header">Editar perfil</div>
                    <div class="card-body">
                        <h5>Datos de usuario</h5>
                        <p><em class="font-weight-bold">Nombre: </em>{{ $patientProfile->user->name }}</p>
                        <p><em class="font-weight-bold">Correo electónico: </em>{{ $patientProfile->user->email }}</p>
                        <p><em class="font-weight-bold">Tipo de usuario: </em>Paciente</p>
                        <hr>
                        <h5>Datos de perfil</h5>
                        {!! Form::model($patientProfile, ['route' => ['patient.profile.update', $patientProfile->id], 'method' => 'PUT']) !!}
                        @include('patients.profile.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
