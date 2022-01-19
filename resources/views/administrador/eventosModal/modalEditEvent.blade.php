<!-- Modal -->
<div class="modal fade" id="eventEdit-{{$ev->id}}" tabindex="-1" role="dialog" aria-labelledby="eventEditLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventEditLabel">Editar evento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="user" action="{{ route('editarEvent') }}" enctype="multipart/form-data" method="post">
                <div class="modal-body">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-group row">
                                <div class="col">
                                    <input type="hidden" class="form-control form-control-user" value="{{$ev->id}}" id="idEdit" placeholder="ID" name="idEdit">
                                    <input type="text" class="form-control form-control-user" value="{{$ev->tipo}}" id="tituloE" placeholder="Título de evento" name="tipoEdit">
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <textarea class="form-control form-control-user" id="descripcionId" value="" name="descripcionEdit" placeholder="Descripción  del evento" maxlength="230" rows="3">{{$ev->descripcion}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <input type="number" placeholder="$ 00.00" class="form-control form-control-user" id="inlineFormInputGroup" value="{{$ev->precio}}" name="precioEdit" max="900000" placeholder="precio">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div>
                            <label for="formFileLg" class="form-label">Foto</label>
                            <input class="form-control form-control-lg" accept="image/*" id="formFileLg" type="file" name="fotoEdit">
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
