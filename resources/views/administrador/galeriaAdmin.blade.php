@extends('layouts.navbar')
@section('titulo')
    FOTOS
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
    @include('administrador.galeriaModal.fotoModal')
    <a href="#" data-toggle="modal" data-target="#fotoAdd" class="btn btn-info btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-camera"></i>
        </span>
        <span class="text">Añadir foto</span>
    </a>
    <hr>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">GALERIA</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>FOTO</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>FOTO</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($galeria as $gal)
                            <tr>
                                <td>{{ $gal->id }}</td>
                                <td>{{ $gal->name }}</td>
                                <td>
                                    <img src="{{ asset($gal->foto) }}" alt="{{ $gal->name }}"
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
