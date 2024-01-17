<?php

$equipos = ["Real Madrid", "Real Betis", "Real Sociedad",
    "Villarreal", "FC Barcelona", "Sevilla", "Getafe", "Valencia",
    "Cádiz", "Granada", "Osasuna", "Atlético de Madrid", "Celta de Vigo",
    "Eibar", "Huesca", "Elche", "Alavés", "Levante", "Athletic Club",
    "Real Valladolid"];

shuffle($equipos);

// Dividir en dos arrays, local y visitante
$mitad = count($equipos) / 2;
$local = array_slice($equipos, 0, $mitad);
$visitante = array_slice($equipos, $mitad);

echo '--------------APARTADO A) -------------';
echo "<h5> LOCALES </h5> ";
var_dump($local);
echo "<h5> VISITANTES </h5> ";
var_dump($visitante);

echo '<br><br>--------------APARTADO B) -------------';

// Generar números random del 0 al 6 debe de tener en cuenta los equipos local

foreach ($local as $equipo) {
    $golesLocales[] = rand(0, 6);
}

foreach ($visitante as $equipo) {
    $golesVisitantes[] = rand(0, 6);
}

echo "<h5> GOLES LOCALES </h5> ";
echo implode(", ", $golesLocales);

echo "<h5> GOLES VISITANTES </h5> ";
echo implode(", ", $golesVisitantes);

echo '<br><br>--------------APARTADO C) -------------';

// Función para crear el formulario de resultados

echo "<h3>RESULTADOS JORNADA</h3><br>
<table border='1'>
<tr>
<th>Local</th>
<th>&nbsp;</th>
<th>VS</th>
<th>&nbsp;</th>
<th>Visitante</th>
</tr>";

// Iterar sobre los equipos locales y mostrar los goles
foreach ($local as $key => $equipo) {
    echo "<tr>";
    echo "<td>" . $equipo . "</td>";
    echo "<td>";

    // Mostrar los goles del equipo local
    if (isset($golesLocales[$key])) {
        echo $golesLocales[$key];
    } 

    echo "</td>";
    echo "<td>VS</td>";

    // Mostrar los goles del equipo visitante
    echo "<td>";

    if (isset($golesVisitantes[$key])) {
        echo $golesVisitantes[$key];
    } 

    echo "</td>";
    echo "<td>" . $visitante[$key] . "</td>";
    echo "</tr>";
}



echo "</table>";



//var_dump($local);
echo "</table>";
echo '<br><br>--------------APARTADO D) -------------';
echo "<h3>RESULTADOS JORNADA</h3><br>
<table border='1'>
<tr>
<th>Local</th>
<th>&nbsp;</th>
<th>VS</th>
<th>&nbsp;</th>
<th>Visitante</th>
</tr>";

// Iterar sobre los equipos locales y mostrar los goles
foreach ($local as $key => $equipo) {
    echo "<tr>";
    echo "<td><img src='escudosEquipos/{$equipo}.jpg' alt='{$equipo}' height='30'>".$equipo."</td>";
    echo "<td>";

    // Mostrar los goles del equipo local
    if (isset($golesLocales[$key])) {
        echo $golesLocales[$key];
    } else {
        echo "0";
    }

    echo "</td>";
    echo "<td>VS</td>";
    echo "<td>";

    // Mostrar los goles del equipo visitante
    if (isset($golesVisitantes[$key])) {
        echo $golesVisitantes[$key];
    } else {
        echo "0";
    }

    echo "</td>";
    echo "<td><img src='escudosEquipos/{$visitante[$key]}.jpg' alt='{$visitante[$key]}' height='30'>".$visitante[$key]."</td>";
    echo "</tr>";
}



echo "</table>";




?>
