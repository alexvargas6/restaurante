<div class="modal fade" id="chef-{{ $chefes->id }}" tabindex="-1" role="dialog" aria-labelledby="chef-{{ $chefes->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="user" action="{{ route('chefEdit') }}" enctype="multipart/form-data" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $chefes->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="nombreIdEdit" value="{{ $chefes->name }}" placeholder="Nombre" name="name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="puestoIdEdit" value="{{ $chefes->puesto }}" placeholder="Puesto" name="puesto">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="fbIdEdit" value="{{$chefes->facebook}}" placeholder="Link Facebook" name="facebook">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="ttIdEdit" value="{{$chefes->twitter}}" placeholder="Link twitter" name="twitter">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="itIdEdit" value="{{$chefes->instagram}}" placeholder="Link Instagram" name="instagram">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="lkIdEdit" value="{{$chefes->linkedin}}" placeholder="Link Linkedin" name="linkedin">
                        </div>
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
