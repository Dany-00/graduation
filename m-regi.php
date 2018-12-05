<div class="modal" id="modal-regi" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-tile">Registro</h4>
            </div>
            <form action="transacciones.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName">Apellido</label>
                                <input type="text" name="lastName" id="lastName" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                   
                    <div class="form-group">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" name="contrasena" id="contrasena" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="avatar">Avatar</label>
                        <input type="file" name="avatar" class="btn btn-default">
                    </div>
                    <div class="form-group">
                        <select name="rol" class="form-control">
                            <option value="user">Usuario normal</option>
                            <option value="admin">Administrador</option>
                        </select>
                    </div>
            </div>                
            <div class="modal-footer">
                <input type="submit" name="Aceptar" class="btn btn-primary">
                <button class="btn btn-default" id="btnCancelar2">Cancelar</button>
            </div>
            </form>
        </div>
    </div>
</div>