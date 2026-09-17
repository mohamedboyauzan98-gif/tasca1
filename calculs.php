<?php

require "dades.php";

$llibresLlegits = 0;
$llibresNoLlegits = 0;
$sumaValoracions = 0;
$sumaValoracionsLlegits = 0;

foreach ($biblioteca as $llibre) {
    $sumaValoracions += $llibre["valoracio"];

    if ($llibre["llegit"]) {
        $llibresLlegits++;
        $sumaValoracionsLlegits += $llibre["valoracio"];
    } else {
        $llibresNoLlegits++;
    }
}

if ($llibresLlegits > 0) {
    $valoracioMitjana = round($sumaValoracionsLlegits / $llibresLlegits, 1);
} else {
    $valoracioMitjana = 0;
}


?>
