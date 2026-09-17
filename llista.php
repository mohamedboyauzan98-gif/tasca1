<?php

require "dades.php";

echo "<h1> Llista de llibres</h1>";
foreach ($biblioteca as $llibre) {
    echo "<ul>";
    echo "<li>ID: " . $llibre["id"] . "</li>";
    echo "<li>Títol: " . $llibre["titol"] . "</li>";
    echo "<li>Autor: " . $llibre["autor"] . "</li>";
    echo "<li>Any: " . $llibre["any"] . "</li>";
    echo "<li>Gènere: " . $llibre["genere"] . "</li>";
    echo "<li>Llegit: " . ($llibre["llegit"] ? "Sí" : "No") . "</li>";
    echo "<li>Valoració: " . $llibre["valoracio"] . "</li>";
    echo "</ul>";
}
?>
