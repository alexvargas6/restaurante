<!-- Modal -->
<div class="modal fade" id="addWhy" tabindex="-1" role="dialog" aria-labelledby="eventEditLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventEditLabel">¿Porque nosotros?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="user" action="{{ route('guardarMotivo') }}" method="post">
                <div class="modal-body">
                    <!--<div class="modal-content">-->
                    <div class="form-group row">
                        <input type="text" class="form-control form-control-user" name="titulo" placeholder="MOTIVO">
                    </div>
                    <div class="form-group row">
                        <textarea class="form-control form-control-user" placeholder="Descripción del motivo"
                            name="motivo" rows="3"></textarea>
                    </div>
                    <!--</div>-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>
                    <button type="submit" class="btn btn-primary">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
</div>
