<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

if($_POST)
{   
    $xnombre=$_POST["nombre"];
    $peso=$_POST["peso"];
    $talla=$_POST["talla"];
    $tipodoc=$_POST["tipodoc"];
    $gafas=$_POST["gafas"];

    if(isset($_POST["gafas"]))  //  el cheking para dar opcion a no tenga gafas
        $gafas=$_POST["gafas"];
    else
        $gafas="NO";



    echo "El nombre de la persona es: " . $xnombre . "<br>";
    echo "El peso de la persona es: " . $peso . "KG <br>";
    echo "La talla  de la persona es: " . $talla . "Mtrs <br>";

    echo "El tipo de documento de la persona es: " . $tipodoc . "<br>";
    echo "Usa gafas ? " . $gafas . "<br>";

    // Hallar el indice de la masa corporal
    // round  es para redondear a dos decimales.
    /* interpretacion del imc
     imc <18.5  bajo peso
     imc entre 25 y 24.9  Peso normal
     imc > 30 Obesidad 

     se multiplica talla * talla por que es al cuadrado
     */

    $imc=$peso/($talla*$talla);
    echo "El imc de la persona es: " . round($imc,2) . "<br>";
    if($imc<18.5)  echo $xnombre . " tiene bajo peso";
    if($imc>=18.5 && $imc<25) echo $xnombre . " tiene sobrepeso";
    if($imc>=25 && $imc<30) echo $xnombre . " tiene sobrepeso";
    if($imc>=30)  echo $xnombre . " tiene obesidad";


    //var_dump($_POST);

} 


?>
</body>
</html>