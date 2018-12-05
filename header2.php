<!-- Header section -->
<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<img src="img/logoD.png" alt="">
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
                    <?php
                    if($_SESSION["user"]){
                    ?>
                        <li role="presentation"><a href="#" class="site-btn header-btn" id="logout">Log Out</a>
                    <?php
                    }else{
                    ?>
                        <li role="presentation"><a href="#" class="site-btn header-btn" id="login">Login</a>
                    <?php
                    }
                    ?>
					
					<nav class="main-menu">
						<ul>
							<li><a href="index.php">Inicio</a></li>
							<li><a href="blog.php">Noticias</a></li>
							<li role="presentation"><a href="#" id="regis">Registrate</a></li>
							<li><a href="contact.php">Contactanos</a></li>
							<li><a href="salon.php">Salón</a></li>
							<li><a href="Fotos.php">Fotos</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->

	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="img/fondoooo.jpg">
		<div class="container">
			<div class="hero-text text-white">
				<h2>Graduaciones con orgullo</h2>
				<p><br>Eventos y Experiencias</p>
			</div>
			<div class="row">
				
			</div>
		</div>
	</section>
	
	<script>
		$("#logout").on("click",function(){
			document.location.href="logout.php";
		});
	</script>
	