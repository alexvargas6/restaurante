<!-- Modal -->
<div class="modal fade" id="especialModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añadir especial</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('guardarEspecial') }}" method="post">
                    <div class="form-group">
                        <select name="id" class="form-select" aria-label="Default select example">
                            <option selected>Selecciona una comida para hacerla especial</option>
                            @foreach ($menu as $comida)
                                <option value="{{ $comida->id }}">{{ $comida->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">GUARDAR</button>
                </form>
                <hr>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>DESCRIPCION</th>
                                <th>FOTO</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>DESCRIPCION</th>
                                <th>FOTO</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($esp as $ss)
                                <tr>
                                    <td>{{ $ss->id }}</td>
                                    <td>{{ $ss->name }}</td>
                                    <td>{{ $ss->descripcion }}</td>
                                    <td>
                                        <img src="{{ asset($ss->foto) }}" alt="{{ $ss->name }}"
                                            class="img-fluid img-thumbnail" width="120">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
