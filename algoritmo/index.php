<?php
// fazer os calculos dos valores 
// CODER PHP ELITE CODERS

$minEconomica  = rand(300,500);
$_SESSION['totalcompra1'] = $totalcompra1 = $minEconomica * $passageiros;
$maxEconomica   = rand(500,700);
$_SESSION['totalcompra2'] = $totalcompra2 = $maxEconomica * $passageiros;
$minExecutiva    = rand(700,890);
$_SESSION['totalcompra3'] = $totalcompra3 = $minExecutiva * $passageiros;
$minPrimeira     = rand(890,1000);
$_SESSION['totalcompra4']= $totalcompra4 = $minPrimeira * $passageiros;
$maxPrimeira     = rand(1200,1600);
$_SESSION['totalcompra5']= $totalcompra5 = $maxPrimeira * $passageiros;











?>