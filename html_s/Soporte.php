<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Soporte</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Noto+Sans+JP&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="/../APP/css/principal.css">
	<link rel="stylesheet" href="/../APP/css/soporte.css">
	<link rel="icon" href="/../APP/imagenes/Citrus2_Verde_ICO.ico">
</head>
<body>
	<header>
		<div class="navbar">
			<div class="img">
				<img src="/../APP/imagenes/Jazmin.png" alt="">
			</div>
			<ul class="nav">
				<li>
					<li>
						<a href="/../APP/index.html">CATALOGO</a>
						<div class="punto"></div>
						<ul class="subindice">
							<li><a href="/../APP/html's/acerca_de/decorativas.html">Plantas Decorativas</a></li>
							<li><a href="/../APP/html's/acerca_de/florales.html">Plantas Florales</a></li>
							<li><a href="/../APP/html's/acerca_de/frutales.html">Plantas Frutales</a></li>
							<li><a href="/../APP/html's/acerca_de/deserticas.html">Plantas Deserticas</a></li>
						</ul>
					</li>
				</li>
				<li>
					<li>
						<a href="/../APP/html's/localizacion.html">LOCALIZANOS</a>
					</li>
				</li>
				<li>
					<li>
						<a href="/../APP/html's/Soporte.html">SOPORTE</a>
					</li>
				</li>
				<li>
					<li>
					<a href="/../APP/login.html">ADMINISTRACION</a>
					</li>
				</li>
			</ul>
		</div>
	</header>
	<div class="formulario">
		<form action="/APP/database/soporte.php" method="POST">
			<div class="titulo">	
				<h3>Formulario</h3>
			</div>
				<input type="text" name="nombre" placeholder="Nombre Completo"> 
				<input type="text" name="area" placeholder="Area de Consulta"> 
				<input type="email"name="email" placeholder="Correo Electrónico"> 
				<input type="text"name="problema"placeholder="Problema/consulta">
				<div class="button">
					<input class="reset" type="reset"></input>
					<input class="Send" type="submit" name="register"></input>
				</div>
		</form>
	</div>
	<footer>
		<div class="ubicacion">	
			<div class="img_ubicacion">
				<img src="/../APP/imagenes/ubicacion.png">	
			</div>	
			<p>Calle San Agustín No.116-A 75857 Coapan, Puebla, Mexico | Citrus&copy;2022</p>
		</div>
		<div class="horarios">
			<p>Lunes - Domingo</p>
			<p>8:00 - 18:30 hrs</p>
		</div>
		<div class="redes">
			<div class="icon_redes">
				<a href="https://www.facebook.com/Vivero-Jazm%C3%ADn-109279847631250"><img src="/../APP/imagenes/facebook.png"></a>
			</div>
			<div class="icon_redes">
				<a href="https://www.instagram.com/vivero_jazmin_1/?igshid=YmMyMTA2M2Y="><img src="/../APP/imagenes/instagram.png"></a>
			</div>
			<div class="icon_redes">
				<a href="https://api.whatsapp.com/send?phone=522381514320&app=facebook&entry_point=page_cta&fbclid=IwAR00TDipXAV0v0TF5HFvHOzbWL0RVWECwcnYCkP2lFtz4dBTacEqU2FMHXg"><img src="/../APP/imagenes/whatsapp.png"></a>
			</div>
		</div>
	</footer>
</body>
</html>