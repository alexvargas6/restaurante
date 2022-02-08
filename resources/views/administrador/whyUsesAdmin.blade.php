@extends('layouts.navbar')
@section('titulo')
    Why
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
    @include('administrador.why.whyUsModal')
    <a href="#" data-toggle="modal" data-target="#addWhy" class="btn btn-info btn-icon-split">
        <span class="icon text-white-50">
            <i class="fa-solid fa-plus"></i>
        </span>
        <span class="text">Añadir motivo</span>
    </a>
    <hr>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Sobre nosotros</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TITULO</th>
                            <th>MOTIVO</th>
                            <th>CREACIÓN</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>TITULO</th>
                            <th>MOTIVO</th>
                            <th>CREACIÓN</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($whyus as $why)
                            <tr>
                                <td>{{ $why->id }}</td>
                                <td>{{ $why->titulo }}</td>
                                <td>{{ $why->motivo }}</td>
                                <td>{{ $why->created_at }}</td>
                                <td>
                                    <form action="{{ route('eliminarMotivo', $why->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <button onclick="return confirm('¿Esta seguro de querer eliminar?')"
                                            class="btn btn-danger btn-circle btn-lg"> <i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
