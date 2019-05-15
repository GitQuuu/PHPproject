<?php
//for the most part ust include_once instead of include only
include_once 'functions.php';

echo twoParameter(5,5)."<br>";
printEcho();

//the difference between include and require is that, the page that you wish to display can still function even thou the include
//file may not have function that works properly. And require will simply not show the page if the functions inside that
//file that we wish to include/require dosnt work.

//Lav en ny PHP fil kaldet funktioner.php, som indeholder 2-3 funktioner (du bestemmer selv hvordan de skal fungere).
//I din index.php fil, skal du include funktioner.php filen, og prøve at kalde ALLE funktioner for at se det virker.

//Lav nu en ekstra PHP fil kaldet “nySide.php”, og kræv (require) at funktioner.php filen også bruges heri. Prøv igen at
//kalde alle funktioner.

//Lav to filer kaldet header.php og footer.php og opret indhold i disse. Inkluder disse henholdsvis øverst og nederst i
//to nye sider kaldet side1.php og side2.php. Åben begge sider i din browser, og se at de ser ens ud. Prøv at ændre
//indholdet i header.php, og se hvordan denne ændring nu slår igennem på begge din sider. Dette viser, hvor nemt det er
//at opdatere indhold på mange sider ad gangen, hvis man anvender PHP include til at centralisere sit indhold.

?>