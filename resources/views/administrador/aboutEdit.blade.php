@extends('layouts.navbar')
@section('titulo')
    ABOUT
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
    @include('administrador.menuModal.aboutModal')
    <div class="container">
        <a href="login.html" class="btn btn-primary btn-user btn-block" data-toggle="modal" data-target="#puntosModal">
            Colocar puntos
        </a>
        <hr>
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!--<div class="col-lg-5 d-none d-lg-block bg-register-image"></div>-->
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Interfaz about</h1>
                            </div>
                            <form action="{{ route('guardarAbout') }}" method="post" class="user" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="hidden" class="form-control form-control-user" name="id"
                                            id="exampleFirstName" placeholder="id" value="{{ $about->id }}">
                                        <input type="text" class="form-control form-control-user" name="titulo"
                                            id="exampleFirstName" placeholder="Titulo" value="{{ $about->titulo }}">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="Sub_titulo"
                                            id="exampleLastName" placeholder="Sub titulo"
                                            value="{{ $about->Sub_titulo }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control form-control-user" name="descripcion"
                                        id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Descripción"> {{ $about->descripcion }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="formFileLg" class="form-label">Imagen que se muestra</label>
                                    <input accept="image/*" class="form-control form-control-lg" id="formFileLg" type="file"
                                        name="foto">
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Guardar
                                </button>
                                <hr>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
