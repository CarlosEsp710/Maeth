@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h1>{{ $nutritionist->user->name }}</h1>
                <em>¡Conóceme más!</em><br>
                <label class="font-weight-bold">Sobre mi</label>
                <p>{{ $nutritionist->description }}</p>
                <label class="font-weight-bold">Contacto</label>
                <p>{{ $nutritionist->user->email }}</p>
                <p>{{ $nutritionist->phone_number }}</p>
                <label class="font-weight-bold">Datos profesionales</label>
                <p>Cédula profesional: {{ $nutritionist->identification_card }}</p>
                <p>Currículum: <a href="{{ asset($nutritionist->curriculum) }}">Descargar</a></p>
                <a href="javascript:history.back()">Volver</a>
            </div>
        </div>
    </div>
@endsection
