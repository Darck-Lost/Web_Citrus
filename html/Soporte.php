<?php require('./header.php') ?>
<body>
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
	<?php require('./footer.php') ?>