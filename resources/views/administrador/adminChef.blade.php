@extends('layouts.navbar')
@section('titulo')
CHEF
@endsection
@section('content')
@include('administrador.chefsModal.addModalChef')

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

<a href="#" data-toggle="modal" data-target="#chefsAdd" class="btn btn-info btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-users"></i>
    </span>
    <span class="text">Agregar empleado</span>
</a>
<hr>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Chefs</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>PUESTO</th>
                        <th><i class="fab fa-facebook-square"></i></th>
                        <th><i class="fab fa-twitter-square"></i></th>
                        <th><i class="fab fa-instagram"></i></th>
                        <th><i class="fab fa-linkedin"></i></th>
                        <th>FOTO</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>PUESTO</th>
                        <th><i class="fab fa-facebook-square"></i></th>
                        <th><i class="fab fa-twitter-square"></i></th>
                        <th><i class="fab fa-instagram"></i></th>
                        <th><i class="fab fa-linkedin"></i></th>
                        <th>FOTO</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($chef as $chefes)
                    <tr>
                        <td>{{ $chefes->id }}</td>
                        <td>{{ $chefes->name }}</td>
                        <td>{{ $chefes->puesto }}</td>
                        <td>{{$chefes->facebook}}</td>
                        <td>{{$chefes->twitter}}</td>
                        <td>{{$chefes->instagram}}</td>
                        <td>{{$chefes->linkedin}}</td>
                        <td><img src="{{ asset($chefes->foto) }}" alt="{{ $chefes->name }}" class="img-fluid img-thumbnail" width="240"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
