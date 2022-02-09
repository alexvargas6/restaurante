@extends('layouts.navbar')
@section('titulo')
    TESTIMONIO
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
    @include('administrador.testimonioModal.modalTestimonio')
    <a href="#" data-toggle="modal" data-target="#testimonioAdd" class="btn btn-info btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-camera"></i>
        </span>
        <span class="text">Añadir testimonio</span>
    </a>
    <hr>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">TESTIMONIO</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>PUESTO</th>
                            <th>FOTO</th>
                            <th>TESTIMONIO</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>PUESTO</th>
                            <th>FOTO</th>
                            <th>TESTIMONIO</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($test as $gal)
                            <tr>
                                <td>{{ $gal->id }}</td>
                                <td>{{ $gal->nombre }}</td>
                                <td>{{ $gal->puesto }}</td>
                                <td>{{ $gal->testimonio }}</td>
                                <td>
                                    <img src="{{ asset($gal->foto) }}" alt="{{ $gal->nombre }}"
                                        class="img-fluid img-thumbnail" width="240">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
