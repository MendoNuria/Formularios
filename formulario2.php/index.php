
<!DOCTYPE html>
<html>
<head>
	<title>formulario</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<br>
<br>
	<div class="form">
		<form action="procesar.php" method="POST">

<label for="nombre"><center>Su nombre</center></label>
<br>
<input type="text" name="nombre" placeholder="Nombre" required="">
<br>
<label for="correo"><center>Direccion de correo</center></label>
<br>
<input type="text" name="correo" placeholder="Mail@mail.com" required="">
<br>
<label for="mensaje"><center>Mensaje</center></label>
<br>
<textarea name="mensaje" placeholder="Mensaje" required=""></textarea>
<br>
<br>
<br>
<input type="submit" value="Enviar">
<input type="reset" value="Limpiar">

		</form>
	</div>

</body>
</html>