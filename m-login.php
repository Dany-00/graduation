<div class="modal" id="modal-login" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-tile">Login</h4>
                </div>

                <div class="modal-body">
                    <form action="transacciones.php" method="POST">
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <div class="input-group">
                                <i class="input-group-addon glyphicon glyphicon-user"></i>
                                <input type="text" id="user" name="user" class="form-control">   
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contraseña">Contraseña</label>
                            <div class="input-group">
                                <i class="input-group-addon glyphicon glyphicon-lock"></i>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                        </div>
                    </form>
                    <p id="error" class="text-danger">
                        Usuario o contraseña incorrectos!
                    </p>
                </div>                
                <div class="modal-footer">
                    <button class="btn btn-primary" id="btnEnviar">Enviar</button>
                    <button class="btn btn-default" id="btnCancelar">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function(){
            var $boton=$("#btnEnviar");

            $boton.on("click",function(evento){
                evento.preventDefault();
                var v_user=$('#user').val();
                var v_password=$('#password').val();

                $.ajax({
                    url:"login.php",
                    type: "POST",
                    data:{
                        user: v_user,
                        password: v_password
                    }
                }).done(function(resultado){
                    if(resultado=="1"){
                        document.location.href="salon.php";
                    }
                    else{
                        $("#error").fadeIn().delay(3000).fadeOut();
                    }
                });
            });
        });
    </script>