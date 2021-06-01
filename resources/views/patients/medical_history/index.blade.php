@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Historias clínicas</h1>
        <div class="row">
            <div class="col-md-4">
                <h4>Añadir nueva historia clínica</h4>
                <em>Tu nutiólogo podrá tener acceso a esta información</em>
                <a href="{{ route('medical_history.create') }}" class="btn btn-primary">Añadir</a>
            </div>
            <div class="col md-8">
                <h4>Registro de historias clínicas</h4>
            </div>
        </div>
    </div>
@endsection
