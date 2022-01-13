@extends('layouts.navbar')
@section('titulo')
INTERFAZ CONFIG
@endsection
@section('content')
@section('stilo')
<style>
    body {
        margin: 0px;
        height: 100vh;
        background: #1283da;
    }

    .center {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .form-input {
        width: 350px;
        padding: 20px;
        background: #fff;
        box-shadow: -3px -3px 7px rgba(94, 104, 121, 0.377),
            3px 3px 7px rgba(94, 104, 121, 0.377);
    }

    .form-input input {
        display: none;

    }

    .form-input label {
        display: block;
        width: 45%;
        height: 45px;
        margin-left: 25%;
        line-height: 50px;
        text-align: center;
        background: #1172c2;

        color: #fff;
        font-size: 15px;
        font-family: "Open Sans", sans-serif;
        text-transform: Uppercase;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
    }

    .form-input img {
        width: 100%;
        display: none;

        margin-bottom: 30px;
    }
</style>
@endsection
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Control de la interfaz</h6>
    </div>
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
    @foreach($contacto as $cont)
    <div class="card-body">
        <div id="app">
            <form class="user" action="{{ route('upInter') }}" enctype="multipart/form-data" method="post">
                <div class="form-group row">
                    <div class="col-lg-8">
                        <h1>Bienvenido a <span> @{{ name }}</span></h1>
                        <h2>@{{descrip}}</h2>
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input name="nombre" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nombre de tu negocio" maxlength="50" v-model="name">
                        <small id="exampleFirstName" class="form-text text-muted">Este nombre se mostrara en la página principal</small>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="descripcion" class="form-control form-control-user" id="descripcion" placeholder="Una pequeña descripción de tu negocio" maxlength="60" v-model="descrip">
                        <small id="descripcion" class="form-text text-muted">También se mostrara en la página principal</small>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="number" class="form-control form-control-user" id="cel" placeholder="Número de telefono" name="telefono" value="{{$cont->telefono}}" onKeyPress="if(this.value.length==10) return false;">
                        <small id="cel" class="form-text text-muted">A que número quieres que te contacten?</small>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="dir" placeholder="dirección" maxlength="200" name="direccion" value="{{$cont->direccion}}">
                        <small id="dir" class="form-text text-muted">En donde se encuentra tu local?</small>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="email" class="form-control form-control-user" id="correo" placeholder="Email" maxlength="200" name="email" value="{{$cont->email}}">
                        <small id="correo" class="form-text text-muted">El email de tu empresa</small>
                    </div>
                </div>
                <hr>
                <h2>HORARIOS LABORALES</h2>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <div class="md-form mx-5 my-5">
                            <input type="time" id="aper" class="form-control" name="apertura" value="{{$cont->apertura}}">
                            <label for="aper">Hora de apertura</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="md-form mx-5 my-5">
                            <input type="time" id="cierre" class="form-control" name="cierre" value="{{$cont->cierra}}">
                            <label for="cierre">Hora de cierre</label>
                        </div>
                    </div>
                </div>
                <hr>
                <h3>Abrimos de:<span> @{{pdia}}</span> A <span> @{{sdia}}</span></h3>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <select v-model="pdia" class="form-select" aria-label="Default select example" name="primer_dia">
                            <option disabled="disabled">DE</option>
                            <option selected value="LUNES">LUNES</option>
                            <option value="MARTES">MARTES</option>
                            <option value="MIERCOLES">MIERCOLES</option>
                            <option value="JUEVES">JUEVES</option>
                            <option value="VIERNES">VIERNES</option>
                            <option value="SÁBADO">SÁBADO</option>
                            <option value="DOMINGO">DOMINGO</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <select v-model="sdia" class="form-select" aria-label="Default select example" name="ultimo_dia">
                            <option disabled="disabled">A</option>
                            <option selected value="LUNES">LUNES</option>
                            <option value="MARTES">MARTES</option>
                            <option value="MIERCOLES">MIERCOLES</option>
                            <option value="JUEVES">JUEVES</option>
                            <option value="VIERNES">VIERNES</option>
                            <option value="SÁBADO">SÁBADO</option>
                            <option value="DOMINGO">DOMINGO</option>
                        </select>
                    </div>
                </div>
                <hr>
               <!-- <div class="form-group row">
                    <div class="col-sm-6">
                        <h3>IMAGEN DE FONDO</h3>
                        <div class="center">
                            <div class="form-input">
                                <div class="preview">
                                    <img id="file-ip-1-preview" >
                                </div>
                                <label for="file-ip-1">SUBIR IMAGEN</label>
                                <input name="fondo" value="{{ asset($cont->fondo) }}" type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">

                            </div>
                        </div>
                    </div>
                </div>-->
                <div class="form-group row">
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary">GUARDAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection
@section('javas')
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
<!-- Page level plugins -->
<script src="administrador/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="administrador/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="administrador/js/demo/datatables-demo.js"></script>
<script>
    // Time Picker Initialization
    $('#input_starttime').pickatime({});
</script>
<script type="text/javascript">
    function showPreview(event) {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("file-ip-1-preview");
            preview.src = src;
            preview.style.display = "block";
        }
    }
</script>
@foreach($contacto as $cont)
<script>
     var src = "{{ asset($cont->fondo) }}"
            var preview = document.getElementById("file-ip-1-preview");
            preview.src = src;
            preview.style.display = "block";
</script>
@endforeach
@foreach($contacto as $cont)
<script>
    var app = new Vue({
        el: '#app',
        data: {
            name: "{{$cont->nombre}}",
            descrip: "{{$cont->descripcion}}",
            pdia: "{{$cont->primer_dia}}",
            sdia: "{{$cont->ultimo_dia}}",
            img1: "",
            img2: "",
            img3: ""
        }
    })
</script>
@endforeach

@endsection
