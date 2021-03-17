@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                @include('nutritionists.profile.partials.info')
                <div class="card">
                    <div class="card-header">Perfil</div>
                    <div class="card-body">
                        <h5>Datos de usuario</h5>
                        <p><em class="font-weight-bold">Nombre: </em>{{ $nutritionistProfile->user->name }}</p>
                        <p><em class="font-weight-bold">Correo electónico: </em>{{ $nutritionistProfile->user->email }}
                        </p>
                        <p><em class="font-weight-bold">Tipo de usuario: </em>Nutriólogo</p>
                        <hr>
                        <h5>Datos de perfil</h5>
                        <p><em class="font-weight-bold">Dirección:
                            </em>{{ $nutritionistProfile->address ?? 'Agrega una dirección' }}</p>
                        <p><em class="font-weight-bold">Número de teléfono:
                            </em>{{ $nutritionistProfile->phone_number ?? 'Agrega un número de teléfono' }}</p>
                        <p><em class="font-weight-bold">Descripción:
                            </em>{{ $nutritionistProfile->description ?? 'Agrega una descripción sobre ti' }}</p>
                        <p><em class="font-weight-bold">Número de cédula profesional:
                            </em>{{ $nutritionistProfile->identification_card }}</p>
                        <p><em class="font-weight-bold">Currículum:
                            </em><a href="{{ asset('storage/' . $nutritionistProfile->curriculum) }}">Descargar</a></p>
                        <hr>
                        <div class="row">
                            <div class="col-3">
                                @can('nutritionist.profile.destroy')
                                    {!! Form::open(['route' => ['nutritionist.profile.destroy', $nutritionistProfile->id], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-link">Eliminar mi cuenta</button>
                                    {!! Form::close() !!}
                                @endcan
                            </div>
                            <div class="col">
                                @can('nutritionist.profile.edit')
                                    <a href="{{ route('nutritionist.profile.edit', $nutritionistProfile->id) }}"
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
