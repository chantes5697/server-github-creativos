<?php

    $filepath = "images/vidrio-peltre/";
    
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
		<title>Generic - Projection by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo"><strong>Projection</strong> by TEMPLATED</a>
                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown link
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="acero.php">Acero</a>
                            <a class="dropdown-item" href="aluminio.php">Aluminio</a>
                            <a class="dropdown-item" href="carton.php">Cartón</a>
                            <a class="dropdown-item" href="ceramica.php">Cerámica</a>
                            <a class="dropdown-item" href="gorras.php">Gorras</a>
                            <a class="dropdown-item" href="mdf.php">MDF</a>
                            <a class="dropdown-item" href="plastico.php">Plástico</a>
                            <a class="dropdown-item" href="textiles.php">Textiles</a>
                            <a class="dropdown-item" href="vidrio-peltre.php">Vidrio y Peltre</a>
                        </div>
                    </div>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner">
                <div class="row">
					<?php foreach ($array as $x):?>
						
						<div class="col" id="imagencr">
						<img src= "<?php echo $filepath.$x?>" height=700px width=700px> 
						</div>

						<?php 
							$i++;
							$mod = $i%2; 
						
						?>

						<?php if($mod == 1):?>
							<div class="w-100"></div>
						<?php endif;?>
						
					<?php endforeach;?> 
				</div>	
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<h3>Get in touch</h3>

					<form action="#" method="post">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type="submit"></li>
						</ul>
					</form>

					<div class="copyright">
						&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>