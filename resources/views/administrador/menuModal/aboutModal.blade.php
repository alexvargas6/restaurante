<!-- Modal -->
<div class="modal fade" id="puntosModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('guardarPunto') }}" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">PUNTO</label>
                        <input id="name" type="text" class="form-control" name="punto"
                            placeholder="COLOCA ALGUNA PEQUEÑA DESCRIPCIÓN">
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>PUNTO</th>
                                    <th>REGISTRO</th>
                                    <th>ELIMINAR</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>PUNTO</th>
                                    <th>REGISTRO</th>
                                    <th>ELIMINAR</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($puntos as $pt)
                                    <tr>
                                        <td>{{ $pt->id }}</td>
                                        <td>{{ $pt->punto }}</td>
                                        <td>{{ $pt->created_at }}</td>
                                        <td>
                                            <form action="{{ route('eliminarPunto', $pt->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                @method('DELETE')
                                                <button onclick="return confirm('¿Esta seguro de querer eliminar?')"
                                                    class="btn btn-danger btn-circle btn-lg"> <i
                                                        class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
