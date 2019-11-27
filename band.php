<?php
echo "het album overzicht ";
$totaal = 0;

$data = array("Citizen of Glass kost: " => 4.50 ,  "Night kost: " => 9 , "New Eyes kost: " => 9 , "Strange Trails kost: " => 24 );
foreach ($data as $key => $value) {
  echo $key . "  kost ".  $value . "\n";
  $totaal += $value;
}
echo "totaal = ${totaal} ";

//echo count()


 ?>
