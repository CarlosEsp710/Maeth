@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                @include('patients.profile.partials.info')
                <div class="card">
                    <div class="card-header">Perfil</div>
                    <div class="card-body">
                        <h5>Datos de usuario</h5>
                        <p><em class="font-weight-bold">Nombre: </em>{{ $patientProfile->user->name }}</p>
                        <p><em class="font-weight-bold">Correo electónico: </em>{{ $patientProfile->user->email }}</p>
                        <p><em class="font-weight-bold">Tipo de usuario: </em>Paciente</p>
                        <hr>
                        <h5>Datos de perfil</h5>
                        <p><em class="font-weight-bold">Dirección:
                            </em>{{ $patientProfile->address ?? 'Agrega una dirección' }}</p>
                        <p><em class="font-weight-bold">Número de teléfono:
                            </em>{{ $patientProfile->phone_number ?? 'Agrega un número de teléfono' }}</p>
                        <p><em class="font-weight-bold">Ocupación:
                            </em>{{ $patientProfile->occupation ?? 'Agrega tu ocupación/trabajo' }}</p>
                        <p><em class="font-weight-bold">Escolaridad:
                            </em>{{ $patientProfile->scholarship ?? 'Agrega tu último grado de estudios' }}</p>
                        <p><em class="font-weight-bold">Altura:
                            </em>{{ $patientProfile->weight ? "$patientProfile->weight cm" : 'Agrega altura' }}</p>
                        <p><em class="font-weight-bold">Peso:
                            </em>{{ $patientProfile->height ? "$patientProfile->height Kg" : 'Agrega tu peso' }}</p>
                        <p><em class="font-weight-bold">Descripción:
                            </em>{{ $patientProfile->description ?? 'Agrega una descripción sobre ti' }}</p>
                        <hr>
                        <div class="row">
                            <div class="col-3">
                                @can('patient.profile.destroy')
                                    {!! Form::open(['route' => ['patient.profile.destroy', $patientProfile->id], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-link">Eliminar mi cuenta</button>
                                    {!! Form::close() !!}
                                @endcan
                            </div>
                            <div class="col">
                                @can('patient.profile.edit')
                                    <a href="{{ route('patient.profile.edit', $patientProfile->id) }}"
                                        class="btn btn-sm btn-link">Editar perfil</a>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
