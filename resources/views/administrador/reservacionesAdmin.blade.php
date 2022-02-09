@extends('layouts.navbar')
@section('titulo')
    RESERVACIONES
@endsection
@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
    @if (\Session::has('ERROR'))
        <div class="alert alert-warning">
            <ul>
                <li>{!! \Session::get('ERROR') !!}</li>
            </ul>
        </div>
    @endif
    @include('administrador.reservModal.reservModal')
    <a href="#" data-toggle="modal" data-target="#addRev" class="btn btn-info btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-calendar-week"></i>
        </span>
        <span class="text">Añadir reservación</span>
    </a>
    <hr>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">RESERVACIONES</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>EMAIL</th>
                            <th>MENSAJE</th>
                            <th>TELEFONO</th>
                            <th>PERSONAS</th>
                            <th>HORA</th>
                            <th>FECHA</th>
                            <th>ACCIÓN</th>
                            <th>CREACIÓN</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>EMAIL</th>
                            <th>MENSAJE</th>
                            <th>TELEFONO</th>
                            <th>PERSONAS</th>
                            <th>HORA</th>
                            <th>FECHA</th>
                            <th>ACCIÓN</th>
                            <th>CREACIÓN</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($rev as $reserv)
                            <tr>
                                <td>{{ $reserv->id }}</td>
                                <td>{{ $reserv->nombre }}</td>
                                <td>{{ $reserv->email }}</td>
                                <td>{{ $reserv->mensaje }}</td>
                                <td>{{ $reserv->telefono }}</td>
                                <td>{{ $reserv->personas }}</td>
                                <td>{{ $reserv->hora }}</td>
                                <td>{{ $reserv->fecha }}</td>
                                <td>
                                    @if ($reserv->visto == 0)
                                        <form action="{{ route('ejecutarVisto') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{ $reserv->id }}">
                                            <button onclick="return confirm('¿Ya se comunico con el cliente?')"
                                                class="btn btn-danger">Ya he contactado al cliente</button>
                                        </form>
                                    @endif
                                </td>
                                <td>{{ $reserv->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
