<div class="modal fade" id="alimentosModal" tabindex="-1" role="dialog" aria-labelledby="alimentosModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="user" action="{{ route('addAlimento') }}" enctype="multipart/form-data" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Comida al menú</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                placeholder="Nombre de la comida" name="nombre">
                        </div>
                        <div class="col-sm-6">
                            <input type="number" class="form-control form-control-user" id="exampleLastName"
                                placeholder="$ 00.00" name="precio">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control form-control-user" id="exampleFormControlTextarea1"
                            rows="3" placeholder="ingredientes, como esta hecho, etc..." name="ingredientes"></textarea>
                    </div>
                    <div class="form-group">
                        <select name="tipo" class="form-select" aria-label="Default select example">
                            <option selected>Categoria</option>
                            @foreach ($cat as $cats)
                                <option value="{{ $cats->id }}">{{ $cats->platillos }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formFileLg" class="form-label">FOTO DE LA COMIDA</label>
                        <input name="foto" accept="image/*" class="form-control form-control-lg" id="formFileLg"
                            type="file">
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
