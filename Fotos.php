<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Galeria</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/ddddd.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/foto.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    	$(function(){
    		
    		$("#btnCancelar2").on("click",function(){
                $("#modal-regi").modal("hide");
            });

            $("#modal-login").modal({
                show: false
            });

            $("#login").on("click",function(){
                $("#modal-login").modal("show");
            });

            $("#btnCancelar").on("click",function(){
                $("#modal-login").modal("hide");
            });

            $("#modal-agimg").modal({
                show: false
            });

            $("#agimg").on("click",function(){
                $("#modal-agimg").modal("show");
            });

            $("#btnCancelar3").on("click",function(){
                $("#modal-agimg").modal("hide");
            });

            $("#agimg").on("click",function(){
                $("#modal-agimg").modal("show");
            });

            $("#btnCancelar3").on("click",function(){
                $("#modal-agimg").modal("hide");
            });

            var $boton=$("form button");

            $("#evento").addClass("active");

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
        $(function(){
            function acomodo(){
                $.ajax({
                    url:"image.php",
                    type:"GET",
                    dataType:"json"
                }).done(function(image){
                    console.log(image);
                    $.each(image, function(index, foto){
                        var recuadro = $('<div></div>').addClass("col-xs-6 col-sm-4 recuadro img-thumbnail");
                        var ima=$('<img src=Fotos/'+foto.imagen+' />').addClass("foto").appendTo($(recuadro));
                        var conten=$('<div></div>').addClass("conten name").appendTo($(recuadro));
                        var p1=$('<p>Agregado por:</p>').appendTo($(conten));
                        var p2=$('<p>'+foto.Nombre+'</p>').appendTo($(conten));
                        var icon=$('<div></div>').addClass("conten ico glyphicon glyphicon-thumbs-up "+foto.idGal+"").appendTo($(recuadro));
                        var lik=$('<div>'+foto.likes+'</div>').addClass("conten lik").appendTo($(recuadro));
                        $('.Galeri').append($(recuadro));
                    });
                });
            }
            acomodo();
        });
    </script>
    <meta charset="UTF-8">
	<meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>





</head>
<body>
    <?php 
        include "m-login.php";
		include "m-regi.php";
		include "header2.php";
    ?>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
    


	<div role="presentation" id="ima" class="btn btn-info">
		<a href="#" id="agimg">Agregar Imagen</a>
	</div>

	<div class="modal fade bs-example-modal-sm" id="modal-agimg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-tile">Agregar Imagen</h4>
                </div>
				<form action="agimg.php" method="POST" enctype="multipart/form-data">
		            <div class="modal-body">
	                    <div class="form-group">
	                        <label for="img">Imagen</label>
	                        <input type="file" name="img" class="btn btn-default">
	                    </div>
	    	        </div>                
		            <div class="modal-footer">
		                <input type="submit" name="Aceptar" class="btn btn-primary">
		                <button class="btn btn-default" id="btnCancelar3">Cancelar</button>
		            </div>
            	</form>
            </div>
        </div>
    </div>
    <h2>Galeria de fotos</h2>
    <hr/>
    <div class="Galeri">
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
	
	<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	 <script>
    	$(function(){
    		$("#modal-regi").modal({
    			show: false
    		});

    		$("#regis").on("click",function(){
    			$("#modal-regi").modal("show");
    		});

    		$("#btnCancelar2").on("click",function(){
                $("#modal-regi").modal("hide");
            });
    	});
        $(function(){
            $("#modal-login").modal({
                show: false
            });

            $("#login").on("click",function(){
                $("#modal-login").modal("show");
            });

            $("#btnCancelar").on("click",function(){
                $("#modal-login").modal("hide");
            });
        });
    </script>
</body>
</html>