<div id="editModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar Materia</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="editar.php">
                    <input type="hidden" name="edit_codigo" id="edit_codigo">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="edit_nombre" id="edit_nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>UV</label>
                        <input type="number" name="edit_uvs" id="edit_uvs" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nota</label>
                        <input type="number" name="edit_nota" id="edit_nota" class="form-control" step="0.01" required>
                    </div>
                    <button type="submit" class="btn btn-success">Guardar cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('.editBtn').on('click', function() {
        var codigo = $(this).data('codigo');
        var nombre = $(this).data('nombre');
        var uv = $(this).data('uv');
        var nota = $(this).data('nota');

        $('#edit_codigo').val(codigo);
        $('#edit_nombre').val(nombre);
        $('#edit_uvs').val(uv);
        $('#edit_nota').val(nota);
        
        $('#editModal').modal('show');
    });
});
</script>
