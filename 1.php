<?php
 $kalori = 751;
     if ($kalori > 750){
     echo "Andi akan berolahraga Lari";
    }
    elseif ($kalori > 500) {
    echo "Andi akan berolahraga Badminton";
    }
    else {
    echo  "Andi akan berolahraga Renang";
    }
echo "<br>";
$Berapakaloriandi ="Kalori yang perlu dikonsumsi oleh Andi adalah ";

$jumlahkalori = 751;
$waktuolahraga = 75;
$_20kalori = 2;
$kalori2menit = 20;

$kaloripermenit = $kalori2menit / $_20kalori;
$kaloriyangperludikonsumsi = $waktuolahraga * $kaloripermenit;

echo "$Berapakaloriandi $kaloriyangperludikonsumsi";


