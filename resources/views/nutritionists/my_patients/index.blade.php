@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h1>Lista de pacientes</h1>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th colspan="2">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($patients as $patient)
                            <tr>
                                <td>{{ $patient->name }}</td>
                                <td>
                                    <a class="btn btn-sm btn-link"
                                        href="{{ route('my_patient.show', $patient->id) }}">Ver perfil</a>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-link"
                                        href="{{ route('my_patient.conversation', $patient->id) }}">Conversar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $patients->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
