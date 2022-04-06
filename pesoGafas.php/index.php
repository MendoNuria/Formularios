<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array $_POST</title>
</head>
<body>
<!-- Hay que crear un evento de envio con from action
Si queda en blanco " " el mismo archivo post se ejecutara ahi
method   si es para enviar datos por medio de POST o recibir por medio de GET
NO OLVIDAR EL CIERR DE ETIQUETA FORM </form>-->  



<form action="post1.php" method="post">

<!-- 
 select name  es una caja con opciones a elegir, DNI, TI...
 Debe de ir seguido de option value  para poner lo que contendrá esa caja
  -->

    <select name="tipodoc" required>
        <option value="" selected>Elegir tipo de Documento</option>
        <option value="CC">Cédula de ciudadanía</option>
        <option value="TI"> Tarjeta de identidad</option>
        <option value="RC"> Registro Civil</option>
    </select>
<!-- caja de texto input type="text"    tipo texto  
name hace referencia al nombre="" de la caja de texto -->
    <input type="text" placeholder="Ingrese su nombre" name="nombre" id="nombre" required>
    <input type="text" placeholder="Ingrese su peso en  kg" name="peso" required>
    <input type="text" placeholder="Ingrese su talla en metros" name="talla" required>

<!-- cajita de chking     checbox  -->

    <input type="checkbox" name="gafas" value="SI"> ¿Usa gafas?




<!-- submit  es para envar datos por medio del metodo POST y hay 
que darle un valor    boton. -->    
    
    <input type="submit" value="GRABAR">

    </form>
</body>
</html>
