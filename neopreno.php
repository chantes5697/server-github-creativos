<?php

$filepath = "images/productos/SUBLIMACION NEOPRENO/";
    
    $array = preg_grep('~\.(png)$~', scandir($filepath));

    $num = count($array);

	$i = 0;
    


?>

<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title> Sublimacion - NEOPRENO</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
		<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".content").fadeOut(1000);
    },1000);
	
    setTimeout(function() {
        $(".content2").fadeIn(1000);
    },2000);
});
</script>
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				
				
				<div class="inner">
					
					<img href="index.html" src="images/LOGO CREATIVOS 1 TINTA.png" class="logo" width="126" height="39" alt=""/> 
					<a style='color:#000;' href="index.html">INDEX</a>
					<a style='color:#000;' href="generic.html">SUBLIMACION</a>
					<a style='color:#000;' href="elements.html">IMPRESION</a>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
					
					<nav id="nav" style="visibility: hidden">
						<!-- Poner elementos de la lista aqui -->
						<a class="dropdown-item" href="extras.php">Extras</a>
						<a class="dropdown-item" href="offset.php">Offset</a>
						<a class="dropdown-item" href="gran-formato.php">Gran Formato y Foto</a>
						<a class="dropdown-item" href="acero.php">Acero</a>
                        <a class="dropdown-item" href="aceroinox.php">Acero Inoxidable</a>
						<a class="dropdown-item" href="aluminio.php">Aluminio</a>
						<a class="dropdown-item" href="carton.php">Cartón</a>
						<a class="dropdown-item" href="ceramica.php">Cerámica</a>
						<a class="dropdown-item" href="gorras.php">Gorras</a>
						<a class="dropdown-item" href="gorrasinf.php">Gorras Infantil</a>
						<a class="dropdown-item" href="mdf.php">MDF</a>
						<a class="dropdown-item" href="plastico.php">Plástico</a>
						<a class="dropdown-item" href="textiles.php">Textiles</a>
						<a class="dropdown-item" href="vidrio.php">Vidrio</a>
						<a class="dropdown-item" href="vidrio.php">Peltre</a>
				  </nav>
				  
			  </div>
			</header>

		<!-- Three -->
<section id="banner">
		
			<div class="inner">
					<header>
						<div class="content"><h1>GORRAS</h1></div>
						
            			<div class="content2" style="display:none;">
						
						<!-- EN ESTA ZONA VA TODO EL DESMADRE -->
							<div class="row2">
								<h1 style=text-align: center>GORRAS</h1>
								
								<table>
						<?php foreach ($array as $x):?>
							
							

							<?php 
								$i++;
								$mod = $i%2; 
							
							?>

							<?php if($mod == 1):?>
								<tr>
								<td style='text-align: center'>
								
									
									
									<div class="container1">
										<img src="<?php echo $filepath.$x?>" style="max-width:100%;cursor:pointer"
										onclick="onClick(this)" class="modal-hover-opacity">
									  </div>



									<div id="modal01" class="modal" onclick="this.style.display='none'">
									  <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
									  <div class="modal-content">
										<img id="img01" style="max-width:100%">
									  </div>
									</div>
									
									
									
									</td>
								
							<?php else:?>
								<td style='text-align: center'><div class="container1">
										<img src="<?php echo $filepath.$x?>" style="max-width:100%;cursor:pointer"
										onclick="onClick(this)" class="modal-hover-opacity">
									  </div>



									<div id="modal01" class="modal" onclick="this.style.display='none'">
									  <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
									  <div class="modal-content">
										<img id="img01" style="max-width:100%">
									  </div>
									</div></td>
								</tr>
							<?php endif;?>
							
						<?php endforeach;?> 
						
					</table>

								

							</div>
			
						</div>
						
					</header>
		</div>
	</section>
		<div class="container">
 
   
    
   
    
	</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<div class="copyright">
                        
                       
                        <a>
                              SUCURSAL ZAVALETA   -Dirección: Camino Real a Cholula, #4405, Plaza Santa Fe Local 1G, Col. Ex Hacienda Concepción Buena Vista, C.P. 72170. <br> -Teléfonos de Oficina: 222.503.52.69 / 70  WhatsApp: 222 128 6395   -Correo: publicidadcreativoszavaleta@outlook.com
                        </a>
                        <br>
                        <br>
                        <a>
                            SUCURSAL FORJADORES  -Dirección: Blvd. Forjadores de Puebla #1715, Santiago Momoxpan, C.P. 72700, Cholula, Puebla. <br> -Teléfono de Oficina: (222) 7.62.22.73  WhatsApp: 221 156 4111   -Correo: publicidadcreativos@hotmail.com
                         
                        </a>
						
					</div>
                
                </div>
        </footer>
		<!-- Scripts -->
		<script>function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}</script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>