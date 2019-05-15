<?php
//Lav et numerisk array, der indeholder 7 valgfrie tal elementer. Udprint dit array.
$numbers[] =9;
$numbers[] =18;
$numbers[] =27;
$numbers[] =36;
$numbers[] =45;
$numbers[] =-10;

//print lowest value first Maintains key association NO
sort($numbers);
print_r($numbers);
echo"<br>";

//Associativ array
$associativArray['Sara'] =9;
$associativArray['Helena'] =18;
$associativArray['Clara'] =27;
$associativArray['Nicoline'] =-36;
$associativArray['Pia'] =45;
$associativArray['Gurli'] =-10;

//print lowest value first and maintain key association YES
asort($associativArray);
print_r($associativArray);


?>