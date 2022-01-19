@extends('layouts.navbar')
@section('titulo')
EVENTOS
@endsection
@section('content')
@include('administrador.eventosModal.modalEvent')
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
<a href="#" data-toggle="modal" data-target="#eventAdd" class="btn btn-info btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-calendar-week"></i>
    </span>
    <span class="text">Añadir evento</span>
</a>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">EVENTOS DISPONIBLES</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TIPO</th>
                        <th>DESCRIPCIÓN</th>
                        <th>PRECIO</th>
                        <th>FOTO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>TIPO</th>
                        <th>DESCRIPCIÓN</th>
                        <th>PRECIO</th>
                        <th>FOTO</th>
                        <th>ACCIONES</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($evento as $ev)
                    @include('administrador.eventosModal.modalEditEvent')
                    <tr>
                        <td>{{$ev->id}}</td>
                        <td>{{$ev->tipo}}</td>
                        <td>{{$ev->descripcion}}</td>
                        <td>${{$ev->precio}}</td>
                        <td><img src="{{ asset($ev->foto) }}" alt="{{$ev->tipo}}" class="img-fluid img-thumbnail" width="120"></td>
                        <td><a href="#" data-toggle="modal" data-target="#eventEdit-{{$ev->id}}" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-edit"></i>
                                </span>
                                <span class="text">EDITAR</span>
                            </a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
