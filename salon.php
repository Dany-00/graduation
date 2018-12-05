<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>salon</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/ddddd.png">
    <link rel="stylesheet" href="css/bootstrap.css">
   
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.css">    
	<link rel="stylesheet" href="css/salon.css">
   
    <script src="js/jquery-3.3.1.min.js"></script>
    <script>
        $(function(){
            var $boton=$("form button");

            $("#index").addClass("active");

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
                        document.location.href="vip.php";
                    }
                    else{
                        $("#error").fadeIn().delay(3000).fadeOut();
                    }
                });
            });
        });
    </script>
		<style>
				.img-container{
					background-size: cover;
					background-position: 50% 50%;
					height: 400px;
				}
				#carrusel{
					height: 400px;
					overflow: hidden;
				}
				
				#error{
        display: none;
    }
    .carru{
        padding: 0;
    }
    .navbar{
        margin: 0;
    }
    .contenedor{
        width: 80%;
        text-align: justify;
        margin-left: 10%;
    }
    .sub-titulo{
        font-size: 30px;
        color: #804747;
    }
    .title{
        font-size: 18px;
        color: #3d4492;   
    }
		</style>
	
	<title>WebUni - Education Template</title>
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


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
    <?php       
        include "m-login.php";
        include "m-regi.php";
    ?>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<?php
	include "header2.php";
	?>

    <article class="container-fluid">
    	<section class="row">
    		<section class="col-md-12">
    			<div id="salon">
    				<div class="mesa m1">
                        <p id="num">1</p>
    					<span class="silla s1"></span>
                        <span class="silla s2"></span>
                        <span class="silla s3"></span>
                        <span class="silla s4"></span> 
    					<span class="silla s5"></span>
    					<span class="silla s6"></span>
    					<span class="silla s7"></span>
    					<span class="silla s8"></span>
    					<span class="silla s9"></span>
    					<span class="silla s10"></span>
    				</div>
                    <div class="mesa m2">
                        <p id="num">2</p>
                        <span class="silla s1"></span>
                        <span class="silla s2"></span>
                        <span class="silla s3"></span>
                        <span class="silla s4"></span> 
                        <span class="silla s5"></span>
                        <span class="silla s6"></span>
                        <span class="silla s7"></span>
                        <span class="silla s8"></span>
                        <span class="silla s9"></span>
                        <span class="silla s10"></span>
                    </div>
                    <div class="mesa m3">
                        <p id="num">3</p>
                        <span class="silla s1"></span>
                        <span class="silla s2"></span>
                        <span class="silla s3"></span>
                        <span class="silla s4"></span> 
                        <span class="silla s5"></span>
                        <span class="silla s6"></span>
                        <span class="silla s7"></span>
                        <span class="silla s8"></span>
                        <span class="silla s9"></span>
                        <span class="silla s10"></span>
                    </div>
                    <div class="mesa m4">
                        <p id="num">4</p>
                        <span class="silla s1"></span>
                        <span class="silla s2"></span>
                        <span class="silla s3"></span>
                        <span class="silla s4"></span> 
                        <span class="silla s5"></span>
                        <span class="silla s6"></span>
                        <span class="silla s7"></span>
                        <span class="silla s8"></span>
                        <span class="silla s9"></span>
                        <span class="silla s10"></span>
                    </div>
                    <div class="mesa m5">
                        <p id="num">5</p>
                        <span class="silla s1"></span>
                        <span class="silla s2"></span>
                        <span class="silla s3"></span>
                        <span class="silla s4"></span> 
                        <span class="silla s5"></span>
                        <span class="silla s6"></span>
                        <span class="silla s7"></span>
                        <span class="silla s8"></span>
                        <span class="silla s9"></span>
                        <span class="silla s10"></span>
                    </div>
                    <div class="mesa m6">
                        <p id="num">6</p>
                        <span class="silla s1"></span>
                        <span class="silla s2"></span>
                        <span class="silla s3"></span>
                        <span class="silla s4"></span> 
                        <span class="silla s5"></span>
                        <span class="silla s6"></span>
                        <span class="silla s7"></span>
                        <span class="silla s8"></span>
                        <span class="silla s9"></span>
                        <span class="silla s10"></span>
                    </div>
                    <div class="mesa m7">
                        <p id="num">7</p>
                        <span class="silla s1"></span>
                        <span class="silla s2"></span>
                        <span class="silla s3"></span>
                        <span class="silla s4"></span> 
                        <span class="silla s5"></span>
                        <span class="silla s6"></span>
                        <span class="silla s7"></span>
                        <span class="silla s8"></span>
                        <span class="silla s9"></span>
                        <span class="silla s10"></span>
                    </div>
                    <div class="mesa m8">
                        <p id="num">8</p>
                        <span class="silla s1"></span>
                        <span class="silla s2"></span>
                        <span class="silla s3"></span>
                        <span class="silla s4"></span> 
                        <span class="silla s5"></span>
                        <span class="silla s6"></span>
                        <span class="silla s7"></span>
                        <span class="silla s8"></span>
                        <span class="silla s9"></span>
                        <span class="silla s10"></span>
                    </div>
                    <div class="mesa m9">
                        <p id="num">9</p>
                        <span class="silla s1"></span>
                        <span class="silla s2"></span>
                        <span class="silla s3"></span>
                        <span class="silla s4"></span> 
                        <span class="silla s5"></span>
                        <span class="silla s6"></span>
                        <span class="silla s7"></span>
                        <span class="silla s8"></span>
                        <span class="silla s9"></span>
                        <span class="silla s10"></span>
                    </div>
                    <div class="mesa m10">
                        <p id="n10">10</p>
                        <span class="silla s1"></span>
                        <span class="silla s2"></span>
                        <span class="silla s3"></span>
                        <span class="silla s4"></span> 
                        <span class="silla s5"></span>
                        <span class="silla s6"></span>
                        <span class="silla s7"></span>
                        <span class="silla s8"></span>
                        <span class="silla s9"></span>
                        <span class="silla s10"></span>
                    </div>
                    <div class="pista">
                        <p id="pista">Pista de Baile</p>
                    </div>
                    <div class="banda" data-toggle="tooltip" data-placement="bottom" title="">
                        <p id="grupo">Grupo</p>
                    </div>
                    <img src="img/tree.png" class="a a1">
                    <img src="img/tree.png" class="a a2">
                    <img src="img/tree.png" class="a a3">
                    <img src="img/tree.png" class="a a4">
    			</div>
            </section>
            
    	</section>
    </article>

    <div class="modal fade" id="modal-reserv" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dimiss="modal"><span>&times;</span></button>
                    <h4 class="modal-title">Reservar</h4>
                </div>
                <div class="modal-body">
                    <p>¿Desea reservar el lugar?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="btnAcept">Aceptar</button>
                    <button class="btn btn-default" id="btnCancel" data-dimiss="modal">Cancelar</button>
                </div>                
            </div>
        </div>
    </div>


    
	<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
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
    <script>
    	$(function(){
    		$(function(){
    			 $('[data-toggle="tooltip"]').tooltip();
    		});

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
            $("#evento").addClass("active");    
        
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
        var globalMesa=0;
        var globalSilla=0;

        $(function(){
            function colorear(){
                $.ajax({
                    url:"reservaciones.php",
                    type:"GET",
                    dataType:"json"
                }).done(function(reservaciones){
                    console.log(reservaciones);
                    $.each(reservaciones, function(index, reservacion){
                        var mesa=".m"+reservacion.mesa;
                        var silla=".s"+reservacion.lugar;

                        $sMarcada=$(mesa).find(silla);
                        $sMarcada.css("background","red");
                        $sMarcada.attr({
                            "data-toggle":"tooltip",
                            "data-placement":"right",
                            "title":"Este lugar esta reservado por: "+reservacion.Nombre+" "+reservacion.Apellido
                        });
                        $sMarcada.tooltip();
                    });
                });
            }
            $("#modal-reserv").modal({
                show:false,
                backdrop:"static"
            });

            $(".silla").on("click", function(){
                $("#modal-reserv").modal("show");
                $sillaSeleccionada=$(this);

                var clases=$sillaSeleccionada.attr("class");
                var silla=clases.split(' ')[1].replace('silla', "");
                silla=clases.split(' ')[1].replace('s', "");

                console.log("silla:", silla);

                $mesaSeleccionada=$sillaSeleccionada.parents(".mesa");
                clases=$mesaSeleccionada.attr("class");
                var mesa=clases.split(' ')[1].replace("mesa", "");
                mesa=clases.split(' ')[1].replace("m", "");

                console.log("mesa:", mesa);

                alert("desea reservar el lugar?");

                globalMesa=mesa;
                globalSilla=silla;

            });

            $("#btnAcept").on("click", function(){
                $.ajax({
                    url: "crearReser.php",
                    type: "POST",
                    data: {
                        mesa: globalMesa,
                        silla: globalSilla
                    }
                })
                .done(function(){
                    console.log(resultado);
                    $("#modal-reserv").modal("hide");
                });
                

                document.location.href="salon.php";
            });

            $("#evento").addClass("active");
            colorear();
        });
    </script>
</body>
</html>