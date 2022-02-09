<div class="modal fade" id="testimonioAdd" tabindex="-1" role="dialog" aria-labelledby="testimonioAdd"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="user" action="{{ route('guardarTestimonio') }}" enctype="multipart/form-data"
            method="post">
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
                            <input type="text" class="form-control form-control-user" id="nombre" placeholder="nombre"
                                name="nombre">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" placeholder="A que se dedica?"
                                name="puesto">
                        </div>
                    </div>
                    <div class="form-group row">
                        <textarea class="form-control" placeholder="TESTIMONIO" name="testimonio"
                            id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group row">
                        <div>
                            <label for="formFileLg" class="form-label">Foto</label>
                            <input class="form-control form-control-lg" id="formFileLg" type="file" name="foto">
                        </div>
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
