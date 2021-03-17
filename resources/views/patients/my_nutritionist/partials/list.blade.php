@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h1>Lista de nutriólogos</h1>
                <em>Parece que no tientes un nutriólogo asignado, escoge uno de los muchos dados de alta en Maeth.</em>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th colspan="3">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nutritionists as $nutritionist)
                            <tr>
                                <td>{{ $nutritionist->user->name }}</td>
                                <td>{{ $nutritionist->description }}</td>
                                @can('patient.my_nutritionist.index')
                                    <td>
                                        <a href="{{ asset($nutritionist->curriculum) }}">Descargar currículum</a>
                                    </td>
                                @endcan
                                @can('patient.my_nutritionist.index')
                                    <td>
                                        <a href="{{ route('my_nutritionist.show', $nutritionist->id) }}" class="btn btn-link">
                                            Ver más
                                        </a>
                                    </td>
                                @endcan
                                @can('patient.my_nutritionist.index')
                                    <td>
                                        {!! Form::open(['route' => ['my_nutritionist.choose', $nutritionist->id], 'method' => 'POST']) !!}
                                        <button class="btn btn-sm btn-link">Escoger</button>
                                        {!! Form::close() !!}
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $nutritionists->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
