<?php

//incluir la conexion y hacer uso de la DB
include "conexion.php";

//$conexion = new mysqli('localhost', 'root', 'luis2139331.', 'sakila');

//generacion de mi consulta
$consulta_sql = "SELECT * FROM film";

//mandar el query
$resultado = $conexion -> query($consulta_sql);

//retorna el numero de filas del resultado, si encuentra mas de uno lo usamos para
$count = mysqli_num_rows($resultado);

//creacion de columnas

echo "<table border='2px'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Titulo</th>";
echo "<th>Descripcion</th>";
echo "<th>Año de Lanzamiento</th>";
echo "<th>Id de Idioma</th>"; 
echo "<th>Id de Idioma Original</th>"; 
echo "<th>Duración de renta</th>"; 
echo "<th>Precio de renta</th>"; 
echo "<th>Duración</th>"; 
echo "<th>Costo de reemplazo</th>"; 
echo "<th>Calificación</th>"; 
echo "<th>Extras</th>"; 
echo "<th>Ultima actualización</th>"; 
echo "</tr>";

    if ($count>0)
    {
        while($row = mysqli_fetch_assoc($resultado))
        {
            echo "<tr>";
            echo "<td>". $row['film_id'] ."<td>";
            echo "<td>". $row['title'] . "<td>";
            echo "<td>" . $row['description'] . "<td>";
            echo "<td>" . $row['release_year'] . "<td>";
            echo "<td>" . $row['language_id'] . "<td>";
            echo "<td>" . $row['original_language_id'] . "<td>";
            echo "<td>" . $row['rental_duration'] . "<td>";
            echo "<td>" . $row['rental_rate'] . "<td>";
            echo "<td>" . $row['length'] . "<td>";
            echo "<td>" . $row['replacement_cost'] . "<td>";
            echo "<td>" . $row['rating'] . "<td>";
            echo "<td>" . $row['special_features'] . "<td>";
            echo "<td>" . $row['last_update'] . "<td>";
            echo "<tr>";
        }
        echo"</table>";
    
    }
    else 
    {
        echo "<h2 align='center'> No se encontraron registros </h2>";
    }

?>