<?php
//Udprint datoen i dag (uden klokkeslæt).
echo date("d/m/Y");
echo"<br>";
//Udprint klokkeslæt i dag (uden dato).
echo date("H:i:s");
echo"<br>";
//Udprint datoen, på formen (hvis det er søndag d. 20 juli): Sun, 20 juli
echo date("D N M");
echo "<br>";
//Udprint datoen (på valgfri form) 2 uger i fremtiden.
echo date("d/m/Y - H:i:s",(time()+(14*24*60*60)));
echo "<br>";
//Udprint datoen (på valgfri form) 1 dag tilbage i tiden, altså i går.
echo date("d/m/Y - H:i:s",(time()-(1*24*60*60)));
//*hint: Brug php.net under date funktionen for vejledning.
?>