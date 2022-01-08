@extends('layouts.navbar')
@section('titulo')
INTERFAZ CONFIG
@endsection
@section('content')
@section('stilo')

@endsection
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Control de la interfaz</h6>
    </div>
    <div class="card-body">
        <div id="app">
            <div class="form-group row">
                <div class="col-lg-8">
                    <h1>Bienvenido a <span> @{{ name }}</span></h1>
                    <h2>@{{descrip}}</h2>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nombre de tu negocio" maxlength="50" v-model="name">
                    <small id="exampleFirstName" class="form-text text-muted">Este nombre se mostrara en la página principal</small>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="descripcion" placeholder="Una pequeña descripción de tu negocio" maxlength="60" v-model="descrip">
                    <small id="descripcion" class="form-text text-muted">También se mostrara en la página principal</small>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <input type="number" class="form-control form-control-user" id="cel" placeholder="Número de telefono" onKeyPress="if(this.value.length==10) return false;">
                    <small id="cel" class="form-text text-muted">A que número quieres que te contacten?</small>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="dir" placeholder="dirección" maxlength="200">
                    <small id="dir" class="form-text text-muted">En donde se encuentra tu local?</small>
                </div>
            </div>
            <hr>
            <h2>HORARIOS LABORALES</h2>
            <div class="form-group row">
                <div class="col-sm-6">
                    <div class="md-form mx-5 my-5">
                        <input type="time" id="aper" class="form-control">
                        <label for="aper">Hora de apertura</label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="md-form mx-5 my-5">
                        <input type="time" id="cierre" class="form-control">
                        <label for="cierre">Hora de cierre</label>
                    </div>
                </div>
            </div>
            <hr>
            <h3>Abrimos de:<span> @{{pdia}}</span> A <span> @{{sdia}}</span></h3>
            <div class="form-group row">
                <div class="col-sm-6">
                    <select v-model="pdia" class="form-select" aria-label="Default select example">
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
                    <select v-model="sdia" class="form-select" aria-label="Default select example">
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

        </div>
    </div>
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
  function showPreview(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-1-preview");
    preview.src = src;
    preview.style.display = "block";
  }
}
</script>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            name: "",
            descrip: "",
            pdia: "",
            sdia: "",
            img1: "",
            img2: "",
            img3: ""
        }
    })
</script>
@endsection
