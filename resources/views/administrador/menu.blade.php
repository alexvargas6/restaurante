@extends('layouts.navbar')
@section('titulo')
    MENÚ
@endsection
@section('content')
    <!-- Modal -->
    @include('administrador.menuModal.modalAlimentos')
    @include('administrador.menuModal.modalCat')
    <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#alimentosModal">
        <span class="icon text-white-50">
            <i class="fas fa-hamburger"></i>
        </span>
        <span class="text">Agregar alimento</span>
    </a>
    <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#categorias">
        <span class="icon text-white-50">
            <i class="fas fa-folder"></i>
        </span>
        <span class="text">Agregar categoría de alimento</span>
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
                            <th>PRECIO</th>
                            <th>DESCRIPCIÓN</th>
                            <th>TIPO</th>
                            <th>REGISTRO</th>
                            <th>FOTO</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>PRECIO</th>
                            <th>DESCRIPCIÓN</th>
                            <th>TIPO</th>
                            <th>REGISTRO</th>
                            <th>FOTO</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($menu as $comida)
                            <tr>
                                <td>{{ $comida->id }}</td>
                                <td>{{ $comida->nombre }}</td>
                                <td>$ {{ $comida->precio }}</td>
                                <td>{{ $comida->ingredientes }}</td>
                                <td>{{ $comida->getTipo->platillos }}</td>
                                <td>{{ $comida->created_at }}</td>
                                <td><img src="{{ asset($comida->foto) }}" alt="{{ $comida->nombre }}"
                                        class="img-fluid img-thumbnail" width="120"></td>
                                <td>
                                    <form action="{{ route('eliminarMenu', $comida->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <button onclick="return confirm('¿Esta seguro de querer eliminar?')"
                                            class="btn btn-danger">Eliminar</button>
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
@section('javas')
    <!-- Page level plugins -->
    <script src="administrador/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="administrador/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="administrador/js/demo/datatables-demo.js"></script>
@endsection
