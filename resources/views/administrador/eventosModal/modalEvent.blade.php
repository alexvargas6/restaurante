<!-- Modal -->
<div class="modal fade" id="eventAdd" tabindex="-1" role="dialog" aria-labelledby="eventAddLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventAddLabel">Añadir evento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="user" action="{{ route('storeEvent') }}" enctype="multipart/form-data" method="post">
                <div class="modal-body">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-group row">
                                <div class="col">
                                    <input type="text" class="form-control form-control-user" id="tituloE" placeholder="Título de evento" name="tipo">
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <textarea class="form-control form-control-user" id="descripcionId" name="descripcion" placeholder="Descripción  del evento" maxlength="230" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <input type="number" placeholder="$ 00.00" class="form-control form-control-user" id="inlineFormInputGroup" name="precio" max="900000" placeholder="precio">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div>
                            <label for="formFileLg" class="form-label">Foto</label>
                            <input class="form-control form-control-lg" accept="image/*" id="formFileLg" type="file" name="foto">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>
                    <button type="submit" class="btn btn-primary">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
</div>
