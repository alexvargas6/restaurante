<div class="modal fade" id="categorias" tabindex="-1" role="dialog" aria-labelledby="alimentosModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('addCat') }}" method="post">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Categoria de alimentos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">NOMBRE DEL TIPO DE PLATILLO</label>
                    <input id="name" type="text" class="form-control" name="name"
                        placeholder="NOMBRE DE LA CATEGORÍA DEL ALIMENTO">
                </div>
                <hr>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>REGISTRO</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>REGISTRO</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($cat as $cats)
                                <tr>
                                    <td>{{ $cats->id }}</td>
                                    <td>{{ $cats->platillos }}</td>
                                    <td>{{ $cats->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>
                <button type="submit" class="btn btn-primary">AGREGAR CATEGORIA</button>
            </div>
            </form>
        </div>
    </div>
</div>
