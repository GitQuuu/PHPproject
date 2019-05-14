<?php
//Lav et numerisk array, der indeholder 6 valgfrie tal elementer. Udprint dit array.
$numbers[] =9;
$numbers[] =18;
$numbers[] =27;
$numbers[] =36;
$numbers[] =45;

//print out whole array
print_r($numbers);
echo "<br>";
echo "<br>";
//print a specific index
echo "$numbers[0]<br>";
echo "<br>";
//print 2 array index thats been +
$result = $numbers[0]+$numbers[0];
echo "$result<br>";



//Lav et numerisk array, der indeholder 5 STRING elementer (fungerer på samme måde som med tal, bare indsæt string istedet). Udprint array.
$stringArray[] ="Navn";
$stringArray[] ="Mellemnavn";
$stringArray[] ="Efternavn";
$stringArray[] ="Bopæs kommune";
$stringArray[] ="Forhold";
echo "<br>";
print_r($stringArray);
//Konstruér en sætning, ved at tage strings fra dit array i øvelse 2. For eksempel kan du lave en variabel, og sætte
// den lig med et par elementer der sættes sammen med operatoren fra dit array. Udskriv så sætningen.
echo "<br>";
echo"<br>Testing both arrays we start with a number: $numbers[0] and then a whats inside our string array on index 0 : $stringArray[0]<br>";

//Lav et associativt array, der holder styr på varerne i dit køleskab. Key er varen, og value er antallet du har.
// For eksempel $fridge['milk'] = 2; udfyld en 3-4 stykker. Udprint herefter hele dette array.
echo "<br>";
$fridge['milk'] = 2;
$fridge['beer'] = 6;
$fridge['butter'] = 1;

print_r($fridge);
echo "<br>";


// Bonus: udprint det du har MEST af, i øvelse 4. Har du for eksempel mest mælk i dit køleskab, skal du udprinte
// "Jeg har mest mælk: 14", hvis du f.eks. havde 14 mælk i køleskabet. Kan løses med if-else sætninger, og ved manuelt
// at kigge i hver enkelt key-value pair i dit associative array.
function fridgeContents(){
    $fridge['milk'] = 3;
    $fridge['beer'] = 6;
    $fridge['butter'] = 1;

    if($fridge['milk']>$fridge['beer'] && $fridge['milk']>$fridge['butter']){
        $result = $fridge['milk'];
        echo "The most contents in the fridge is milk with $result units";
    }
    else if ($fridge['beer']>$fridge['milk'] && $fridge['beer'] > $fridge['butter']){
        $result = $fridge['beer'];
        echo "The most contents in the fridge is beer with $result units";
    }
    else if($fridge['butter'] > $fridge['milk'] && $fridge['butter'] > $fridge['beer']){
        $result = $fridge['butter'];
        echo "The most contents in the fridge is butter with $result units";
    }
}
echo"<br>";
fridgeContents();


?>