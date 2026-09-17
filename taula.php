<?php

require "dades.php";

echo "<h1>Taula de llibres</h1>";

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Títol</th>";
echo "<th>Autor</th>";
echo "<th>Any</th>";
echo "<th>Gènere</th>";
echo "<th>Llegit</th>";
echo "<th>Valoració</th>";
echo "</tr>";


foreach ($biblioteca as $llibre) {
    echo "<tr>";
    echo "<td>" . $llibre["id"] . "</td>";
    echo "<td>" . $llibre["titol"] . "</td>";
    echo "<td>" . $llibre["autor"] . "</td>";
    echo "<td>" . $llibre["any"] . "</td>";
    echo "<td>" . $llibre["genere"] . "</td>";
    echo "<td>" . ($llibre["llegit"] ? "Sí" : "No") . "</td>";
    echo "<td>" . $llibre["valoracio"] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>

