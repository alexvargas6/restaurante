<div class="modal fade" id="addRev" tabindex="-1" role="dialog" aria-labelledby="addRev" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="user" action="{{ route('reservar') }}" enctype="multipart/form-data" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">AÑADIR TESTIMONIO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="hidden" class="form-control" name="retorno" value="1">
                            <input type="date" class="form-control" name="fecha" data-date-format="mm/dd/yyyy">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="time" id="aper" class="form-control" name="hora">
                            <label for="aper">Hora de llegada</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <textarea class="form-control" placeholder="MENSAJE" name="mensaje"
                            id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group row">
                        <input type="text" class="form-control form-control-user" id="email" placeholder="EMAIL"
                            name="email">
                    </div>
                    <div class="form-group row">
                        <input type="text" class="form-control form-control-user" id="nombre" placeholder="NOMBRE"
                            name="nombre">
                    </div>
                    <div class="form-group row">
                        <input type="number" class="form-control form-control-user" id="telefono" placeholder="TELEFONO"
                            name="telefono">
                    </div>
                    <div class="form-group row">
                        <input type="number" class="form-control form-control-user" id="personas" placeholder="PERSONAS"
                            name="personas">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>
                    <button type="submit" class="btn btn-primary">GUARDAR</button>
                </div>
            </div>
        </form>
    </div>
</div>
