<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Noticias</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/ddddd.png">
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.css">    
    <link rel="shortcut icon" type="image/x-icon" href="img/icono.ico">
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
        $(function(){
            var $boton=$("form button");

            $("#noticia").addClass("active");

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
        body{
            position: relative;
            background: #f1eded;
        }
        #error{
            display: none;
        }
        .recuadro{
            margin: 10px;
            width: 80%;
            border-radius: 15px;
            padding: 0px 15px;
            background: -webkit-linear-gradient(white, #ececec);
        }
        h2{
            margin: 0 1%;
        }
        h3{
            margin: 10px 0 0;
        }
        .contenido p{
            text-align: justify;
            font-family: sans-serif;
            font-size: 15px;
        }
        .contenido, .f1{
            display: inline-block;
        }
        .contenido{
            width: 65%;
            vertical-align: middle;
        }
        .f1{
            width: 25%;
            margin-left: 50px;
        }
        .lista{
            width: 10%;
            position: fixed;
            right: 10px;
            top: 20%;
        }
        .lista, .contenedor{
            display: inline-block;
        }
        td{
            padding: 0 45px 0 10px;
        }
    </style>


    <script>
        $('#list-example').on('click', function (e) {
          e.preventDefault()
          $(this).tab('show')
        })
    </script>


</head>
<body data-spy="scroll" data-target="#navbar-example">
	<?php
        include "header.php";
        include "m-login.php";
        include "m-regi.php";
    ?>

    <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example contenedor">
      <h2 id="list-item-1">Red Hot Chili Peppers</h2>
        <div class="recuadro img-thumbnail">
            <h3>Biografía</h3>
            <hr/>
            <div class="contenido">
                <p class="lead">La banda californiana, Red Hot Chili Peppers,  comienza su trayectoria musical en la soleada ciudad de Los Ángeles en 1983 con un sonido rockero que combina exquisitos riffs de guitarra con ritmos de hip-hop y letras que desafían a la sociedad de la época.</p>
                <p class="lead">A lo largo de su historia la banda ha sufrido numerosas modificaciones, quedando en la actualidad sólo dos de sus integrantes originales: Anthony Kiedis y Flea.</p>
                <p class="lead">La banda se caracteriza por ser una de las pocas que continúa produciendo contenidos y haciendo giras de manera estable, en comparación con otros grupos que nacieron en el mismo período, muchos de los cuales ya no se encuentran como, Nirvana.</p>
                <p class="lead">Su estilo ha ido variando a lo largo de su extensa trayectoria, incorporando diferentes ritmos y alternando descaradas canciones de hip-hip o metal con baladas, sin excluir canciones críticas con la sociedad americana, como Californication.</p>
            </div>
            <img class="f1" src="img/rhcp.jpg">
        </div>
        <div class="recuadro img-thumbnail">
            <h3>Australia & Nueva Zelanda Tour</h3>
            <hr/>
            <div class="contenido">
                <p>¡Los Red Hot Chili Peppers están encantados de anunciar una nueva gira 2019 en Australia y Nueva Zelanda!</p>

                <table class="table table-hover">
                    <tr>
                        <td>17 de febrero</td>
                        <td>Hobart</td>
                        <td>Derwent Entertainment Center</td>
                    </tr>
                    <tr>
                        <td>19 de febrero</td>
                        <td>Sydney</td>
                        <td>Qudos Bank Arena</td>
                    </tr>
                    <tr>
                        <td>23 de febrero</td>
                        <td>Hunter Valley</td>
                        <td>Hope Estate</td>
                    </tr>
                    <tr>
                        <td>25 de febrero</td>
                        <td>Brisbane</td>
                        <td>Centro de entretenimiento</td>
                    </tr>
                    <tr>
                        <td>28 de febrero</td>
                        <td>Melbourne</td>
                        <td>Rod Laver Arena</td>
                    </tr>
                    <tr>
                        <td>2 de marzo</td>
                        <td>Geelong</td>
                        <td>Mt Duneed Estate</td>
                    </tr>
                    <tr>
                        <td>3 de marzo</td>
                        <td>Adelaide</td>
                        <td>Superloop Adelaide 500 After-Race Concert</td>
                    </tr>
                    <tr>
                        <td>5 de marzo</td>
                        <td>Perth</td>
                        <td>Estadio de plumilla</td>
                    </tr>
                    <tr>
                        <td>8 de marzo</td>
                        <td>Auckland</td>
                        <td>Spark Arena</td>
                    </tr>
                </table>
            </div>
            <img class="f1" src="img/rhcp.jpg">
        </div>
        <h2 id="list-item-2">Arctic Monkeys</h2>
        <div class="recuadro img-thumbnail">
            <h3>Biografía</h3>
            <hr/>
            <div class="contenido">
                <p class="lead">Arctic Monkeys es una banda británica de indie rock, formada en Sheffield, Reino Unido El grupo está compuesto por el guitarrista principal y vocalista Alex Turner, el guitarrista Jamie Cook, el baterista Matt Helders, y con Nick O'Malley en el bajo. Su primer álbum, Whatever People Say I Am, That's What I'm Not, fue galardonado en 2007 como el mejor álbum británico.​ El segundo álbum de la banda, Favourite Worst Nightmare, se lanzó el 23 de abril de 2007 y vendió más de 225 000 copias en su primera semana de lanzamiento, además de ser nominado para el Mercury Prize de 2007 El quinto y más exitoso álbum de la banda, es conocido como AM, es el más vendido, con salida el 15 de julio de 2013. La banda también ganó los premios a mejor banda británica y mejor álbum británico en los Brit Awards de 2008 y 2014. El 18 de mayo del 2018 después de cinco largos años lanzan su sexto disco de estudio Tranquility Base Hotel & Casino.</p>
                <p class="lead">Las letras de las canciones de Arctic Monkeys frecuentemente hablan de la realidad social, como por ejemplo "A Certain Romance", la cual describe a la cultura indie; observaciones sobre la vida de la clase obrera, como en el tema "When the Sun Goes Down", descrita como una "canción ingeniosa e intensa acerca de la prostitución en el distrito de Neepsend de Sheffield." Basados en su estilo musical, Arctic Monkeys han sido comparados con músicos como el rapero Mike Skinner, Morrissey y Jarvis Cocker, conocidos por sus combinaciones de letras observacionales y humor. La inspiración principal de Arctic Monkeys viene de The Smiths, The Velvet Underground, The Vines￼￼ y Oasis​</p>
            </div>
            <img class="f1" src="img/am.png">
        </div>
        <div class="recuadro img-thumbnail">
            <h3>¡No te pierdas a Arctic Monkeys en concierto!</h3>
            <hr/>
            <div class="contenido">
                <p class="lead">Desde Sheffield en la famosa isla de Gran Bretaña, salió Arctic Monkeys. Ahora, si te diste cuenta que pasa por tu ciudad o alguna cerca, es momento de verlos en vivo. La forma más fácil, es usando StubHub, el mejor portal para comprar o vender tus boletos en internet. Solamente escoge dónde quieres verlos, en qué lugar quieres estar, y listo, podrás hacer tu compra de manera rápida, confiable y segura. ¿Qué más necesitas?</p>
                <p class="lead">Desde el 2002, y aprovechando el internet como herramienta de difusión, los Arctic Monkeys entraron al mundo de la música pisando fuerte, en uno de los debuts ingleses más impactantes en la historia de su música. De repartir discos “quemados” después de su concierto hasta la grabación de su primer disco, Whatever People say I am, That’s What I’m not, la carrera de Arctic Monkeys es única.</p>
            </div>
            <img class="f1" src="img/am2.jpg">
        </div>
    </div>
    <div id="list-example" class="list-group lista">
      <a class="list-group-item list-group-item-action" href="#list-item-1">Red Hot Chili Peppers</a>
      <a class="list-group-item list-group-item-action" href="#list-item-2">Arctic Monkeys</a>
    </div>
</body>
</html>