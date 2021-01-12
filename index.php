<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

<title>Blog Personal</title>

<link href="img/ing.png" rel="icon" class="img-circle">

<link href="css/estilo.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">

<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container-fluid" id="contenedor">
	<header class="row">
		<br>
       	<div id="logo" class="col-lg-5 col-md-5 col-sm-10 col-xs-10">
       		<h1>Hola, bienvenid@ a mi blog</h1>
       	</div>     
       	<div id="botoneraMovil" class="navbar-header navbar-inverse">
       		<button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#botonera">
        		<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
        	</button>
        </div>
        
        <nav id="botonera" class="col-lg-9 col-md-9 col-sm-12 col-xs-12 collapse navbar-collapse pull-right">
        	<ul class="nav navbar-nav">
            	<li><a href="">Inicio</a></li>
            	<li><a href="curriculum-2021.pdf">Ver mi CV</a></li>
                <li><a href="#seccion">Más de mi</a></li>
                <li><a href="#videos">Videos</a></li>
                <li><a href="#buttom">Contáctame</a></li>
            </ul>
        </nav>    
</header>
</div>

	<section class="row" id="seccion">
	<aside class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
		<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
        	<img src="img/beatles.jpg" class="img-thumbnail" width="100%">
            	<h1><center>THE BEATLES</center></h1>
            	<p>The Beatles fue una banda de rock​ inglesa activa durante la década de 1960, y reconocida como la más exitosa...</p>
            	<a href="#articulo1" data-toggle="modal">
            	<button type="button" class="btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-new-window"></span>    Leer Más</button>
            	</a>
        </div>

        <div id="articulo1" class="modal fade">    
            <div class="modal-dialog modal-content">
                <div class="modal-header" style="border:1px solid #eee">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">THE BEATLES</h3>
                </div>
                    <div class="modal-body" style="border:1px solid #eee">
                    	<img src="img/beatles.jpg" width="100%">
                        	<p>The Beatles fue una banda de rock inglesa activa durante la década de 1960, y reconocida como la más exitosa comercialmente y la más alabada por la crítica en la historia de la música popular y de la música rock.​ Formada en Liverpool, estuvo constituida desde 1962 por John Lennon (guitarra rítmica, vocalista), Paul McCartney (bajo, vocalista), George Harrison (guitarra solista, vocalista) y Ringo Starr (batería, vocalista). Enraizada en el skiffle, la música beat y el rock and roll de los años 1950, su sonido incorporaría a menudo elementos de la música clásica y del pop tradicional, entre otros, de forma innovadora en sus canciones; la banda posteriormente llegaría a trabajar con un extenso rango de estilos musicales, yendo desde las baladas y la música de India, hasta la psicodelia e incluso el hard rock. La naturaleza de su enorme popularidad, que había emergido primeramente con la moda de la «beatlemanía», se transformó al tiempo que sus composiciones se volvieron más sofisticadas. Llegando a ser percibidos como la encarnación de los ideales progresistas, extendiendo su influencia en las revoluciones sociales y culturales de la década de 1960.</p>
					</div>
                    <div class="modal-footer" style="border:1px solid #eee">
                    	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        
        
        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
        	<img src="img/queen.jpg" class="img-thumbnail" width="100%">
            <h1><center>QUEEN</center></h1>
            <p>Queen es una banda británica de rock formada en 1970 en Londres por el cantante y pianista Freddie Mercury, el guitarrista Brian May...</p>
            <a href="#articulo2" data-toggle="modal">
            <button type="button" class="btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-new-window"></span>   Leer Más</button>
			</a>
        </div>
        
        <div id="articulo2" class="modal fade">
            	<div class="modal-dialog modal-content">
                	<div class="modal-header" style="border:1px solid #eee">
                    	<button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">QUEEN</h3>
                    </div>
                    <div class="modal-body" style="border:1px solid #eee">
                    	<img src="img/queen.jpg" width="100%">
                        <p>Queen es una banda británica de rock formada en 1970 en Londres por el cantante y pianista Freddie Mercury, el guitarrista Brian May, el baterista Roger Taylor y el bajista John Deacon. Si bien el grupo ha presentado bajas de dos de sus miembros (Mercury, fallecido en 1991, y Deacon, retirado en 1997), los integrantes restantes, Brian May y Roger Taylor, continúan trabajando bajo el nombre Queen, por lo que la banda aún se considera activa</p> 
                    </div>
                    <div class="modal-footer" style="border:1px solid #eee">
                    	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
    
    </aside>
    
    <article class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        	<h1>Éste soy yo:</h1>
        	<img src="img/foto.jpg" width="250px" height="250px">
        	<br>
        	<br>
        	<p>Hola, buenos días, tardes o noches, mi nombre es Daniel Guillen Alvarez.</p>
        </div>
    </article>
    
   
   <aside class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
		<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
        	<img src="img/mc.jpg" class="img-thumbnail" width="100%">
            <h1><center>MILKY CHANCE</center></h1>
            <p>Milky Chance es un grupo alemán de folk/rock compuesto por el vocalista y guitarrista (barítono) Clemens Rehbein...</p>
             <a href="#articulo3" data-toggle="modal">
            <button type="button" class="btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-new-window"></span>    Leer Más</button>
            </a>
        </div>
      
        <div id="articulo3" class="modal fade">
            <div class="modal-dialog modal-content">
                <div class="modal-header" style="border:1px solid #eee">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">MILKY CHANCE</h3>
                </div>
        
                <div class="modal-body" style="border:1px solid #eee">
                    	<img src="img/mc.jpg" width="100%">
                        <p>Milky Chance es un grupo alemán de folk/rock compuesto por el vocalista y guitarrista (barítono) Clemens Rehbein, el DJ Philipp Dausch y en segunda guitarra y bajo Antonio Greger. Nacidos en la localidad de Kassel, actualmente tienen contrato con la discográfica de la misma ciudad Lichtdicht Records.1​ En 2013 lanzaron su primer álbum Sadnecessary. Son conocidos principalmente por su sencillo Stolen Dance, cuyo videoclip acumula más de 500 millones de vistas en YouTube.</p>
                </div>
                <div class="modal-footer" style="border:1px solid #eee">    
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>    
        </div>
        
        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
        	<img src="img/guns.jpg" class="img-thumbnail" width="100%">
            <h2><center>GUNS N' ROSES</center></h2>
            <p>Guns N' Roses es una banda estadounidense de rock formada en Hollywood en la zona de Sunset Strip alrededor de...</p>
            <a href="#articulo4" data-toggle="modal">
            <button type="button" class="btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-new-window"></span>   Leer Más</button>
			</a>
        </div>

        <div id="articulo4" class="modal fade">    
            <div class="modal-dialog modal-content">
                <div class="modal-header" style="border:1px solid #eee">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">GUNS N' ROSES</h3>
                </div>    

                <div class="modal-body" style="border:1px solid #eee">
                    	<img src="img/guns.jpg" width="100%">
                        <p>Guns N' Roses es una banda estadounidense de rock formada en Hollywood en la zona de Sunset Strip alrededor de Santa Monica, en la ciudad de Los Ángeles, California en 1985. El grupo fue fundado por el vocalista Axl Rose y el guitarrista Izzy Stradlin.6​Es una de las bandas de rock más exitosas de todos los tiempos, habiendo vendido más de ciento cincuenta millones de discos, es considerada ícono global de la música y forma parte del prestigioso Salón de la Fama del Rock and Roll. Asimismo, la banda es uno de los números artísticos con más galardones, legado y repercusión mundial hasta la fecha. También Guns N' Roses es considerada una de las bandas más influyentes de la historia debido a su gran legado musical.</p>
				</div>
                <div class="modal-footer" style="border:1px solid #eee">    
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    
    </aside>

</section>

<div class="row" id="videos">
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    	<video controls poster="img/video1.jpg" width="100%"></video>
    </div>
    
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    	<video controls poster="img/video2.jpg" width="100%"></video>   
    </div>
    
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    	<video controls poster="img/video3.jpg" width="100%"></video>
    </div>
    
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
   		<video controls poster="img/video4.jpg" width="100%"></video>
    </div>
</div>


<footer class="row" id="buttom">
	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    	<form role="form">
        	<div class="form-group"> 
            	<input type="text" class="form-control" placeholder="Usuario" required>
            </div>
            <div class="form-group"> 
            	<input type="text" class="form-control" placeholder="Comentario" required>
            </div>
            <button type="submit" class="btn btn-info">Enviar</button>
        </form>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        	<ul>
            	<li><span class="glyphicon glyphicon-phone"></span>  (443) 477 73 87</li>
                <li><span class="glyphicon glyphicon-map-marker"></span>  Calle Prueba No. 45 Av. Archivo de prueba</li>
                <li><span class="glyphicon glyphicon-envelope"></span>  danielguillen351@gmail.com</li>
            </ul>
        </div>
    </div>

</footer>
</body>
</html>