@extends('layouts.navbar')
@section('titulo')
    USUARIOS
@endsection
@section('content')
    @include('administrador.modalRegistro')
    <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-info btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-users"></i>
        </span>
        <span class="text">CREAR USUARIO</span>
    </a>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Control Usuarios</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>EMAIL</th>
                            <th>REGISTRO</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>EMAIL</th>
                            <th>REGISTRO</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($usuarios as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
@section('javas')
    <!-- Page level plugins -->
    <script src="administrador/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="administrador/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="administrador/js/demo/datatables-demo.js"></script>
@endsection
