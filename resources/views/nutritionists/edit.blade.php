@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                @include('nutritionists.partials.errors')
                <div class="card">
                    <div class="card-header">Editar perfil</div>
                    <div class="card-body">
                        <h5>Datos de usuario</h5>
                        <p><em class="font-weight-bold">Nombre: </em>{{ $nutritionistProfile->user->name }}</p>
                        <p><em class="font-weight-bold">Correo electónico: </em>{{ $nutritionistProfile->user->email }}
                        </p>
                        <p><em class="font-weight-bold">Tipo de usuario: </em>Nutriólogo</p>
                        <hr>
                        <h5>Datos de perfil</h5>
                        {!! Form::model($nutritionistProfile, ['route' => ['nutritionist.profile.update', $nutritionistProfile->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
                        @include('nutritionists.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
