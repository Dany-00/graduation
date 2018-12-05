<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
		
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danny</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/ddddd.png">
    <link rel="stylesheet" href="css/bootstrap.css">
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
		include "header2.php";
    ?>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<article class="container-fluid">
        <section class="row">
            <section class="col-md-12 carru">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                
                    <!-- Wrapper for slides carrucel -->
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="img/graduacion1.jpg" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/graduacion2.png" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/graduacion3.jpg" alt="Third slide">
						</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
                
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>
        </section>
    </article>
	

	<!-- Hero section end -->
	
	<!-- signup section -->
	<section class="signup-section spad">
		<div class="signup-bg set-bg" data-setbg="img/graduation.jpeg"></div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="signup-warp">
						<div class="section-title text-white text-left">
							<h2>CELEBRA TU TRIUNFO, TE LO MERECES</h2>
							<p>Crea eventos de tipo social, empresarial, familiar, público o privado, 
								donde priman el protocolo y la logística para poder ofrecer una experiencia 
								de calidad, en la que encontrarás armonía, belleza, estética, sutileza, glamour, encanto, atractivo, elegancia y distinción como características principales.</p>
						</div>
						<!-- signup form -->
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- signup section end -->


	<!-- banner section -->
	<section class="banner-section spad">
		<div class="container">
			<div class="section-title mb-0 pb-2">
				<h2>¿Por que elegirnos?</h2>
				<p> En esta empresa valoramos la gran capacidad de nuestros eventos para aportar a los asistentes la posibilidad de encontrar un lugar en el que experimentar y sentir de manera diferente, en el que también puedas relacionarte con los demás, aprender, descubrir y compartir vivencias. <hr>

						Todos nuestros eventos, sin excepción, captan la atención de los invitados, pues cada uno de ellos es diferente y único, y en cada uno de ellos se sienten y se tienen diferentes experiencias y sensaciones.<hr>
						
						Esto es posible gracias a el gran equipo de profesionales que se encuentra detrás de cada acontecimiento, un equipo que se caracteriza por su pasión, especialización, entusiasmo, experiencia y vocación en todo lo que organiza</p>
			</div>
			
		</div>
	</section>
	<!-- banner section end -->


	<!-- footer section -->
	<footer class="footer-section spad pb-0">
		<div class="footer-top">
			<div class="footer-warp">
				<div class="row">
					<div class="widget-item">
						<h4>Contacto personal</h4>
						<ul class="contact-list">
							<li>+52 (618) 2214910</li>
							<li>hidaniela00@gmail.com</li>
						</ul>
					</div>
					<div class="widget-item">
						<h4>Mision</h4>
						<ul>
							<li>La misión de Danny's es ser la empresa líder e innovadora del mercado en Organizaciones Profesionales de Eventos.<br>
								 Una empresa reconocida por su gran profesionalidad y honestidad, la cual ofrece servicios eficaces, competentes y comprometidos con las expectativas y objetivos de los clientes.</li>
						</ul>
					</div>
					<div class="widget-item">
						<h4>Vision</h4>
						<ul>
							<li><a href="">Ofrecer a nuestros clientes soluciones integrales, innovadoras y profesionales que les permita disfrutar de su evento y de sus invitados, sin preocupación alguna.<r>
								 Eventos que creen experiencias únicas, y que estén llenos de dinamismo</a></li>
						
						</ul>
					</div>
					<div class="widget-item">
						<h4>Valores</h4>
						<ul>
							<li><a href="">Integridad: Ser transparentes.<br>
									Responsabilidad Entender que se deben respetar una serie de reglas,<br> además de contribuir en el crecimiento y la armonía del entorno en el que<br> nos desenvolvemos y con las personas que interactuamos.
									Pasión: Estar comprometidos con el corazón y con la mente.<br>
									Calidad: Búsqueda de la excelencia.<br>
									Disciplina: Tener la convicción de terminar y no dejar a medias las cosas que sean importantes para la propia formación de un proyecto exitoso.</a></li>
						</ul>
					</div>
					
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="footer-warp">
				<div class="copyright"><li>los mejores eventos</li></div>
			</div>
		</div>
	</footer> 
	<!-- footer section end -->
	
	<!--====== Javascripts & Jquery ======-->
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