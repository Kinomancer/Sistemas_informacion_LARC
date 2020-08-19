<?php

$data = $_POST['txtDiaSemana'];

//echo "El dato que ingresaste es " . $data;

    if ($data == "Lunes" || $data == "Martes"|| $data == "Miercoles"|| $data == "Jueves"|| $data == "Viernes")
    {
        echo "Dia Laboral";
        echo "<br>";
        echo "El dia ingresado es " . $data;
    }
    elseif ($data == "Sabado" || $data == "Domingo")
    {
        echo "Dia Libre";
        echo "<br>";
        echo "El dia ingresado es " . $data;
    }
    else
    {
        echo "Parametro invalido";
        echo "<p> Regresar a la pagina anterior </p> <a href='semana.php'> Semana Datos </a>"; 
    }


?>