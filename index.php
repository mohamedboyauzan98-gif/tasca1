<?php

require "calculs.php";

echo "<h1>Gestor de Biblioteca</h1>";

echo "<a href='llista.php'>Veure llista</a>";
echo "<br>";
echo "<a href='taula.php'>Veure taula</a>";

echo "<h1>Càlculs de la biblioteca</h1>";

echo "<p>Llibres llegits: $llibresLlegits</p>";
echo "<p>Llibres no llegits: $llibresNoLlegits</p>";
echo "<p>Suma de valoracions: $sumaValoracions</p>";
echo "<p>Valoració mitjana dels llibres llegits: $valoracioMitjana</p>";

?>
