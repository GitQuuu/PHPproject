<?php
//Lav en funktion der tager 2 parametrer. Den skal udskrive den største værdi. Test funktionen ved at kalde den.
function printHighestValueOutOfTwoParameter($value1,$value2){
        if($value2 > $value1){
            echo "$value2 is the highest value<br>";
        }
        else {
         echo "$value1 is the highest value<br>";
        }
}

printHighestValueOutOfTwoParameter(10,100);

//Lav en funktion der tager 3 parametrer, og returnerer den mindste værdi. Udskriv herefter denne. Test funktionen ved at kalde den.
function printLowestValueOutOfThreeParameter($value1, $value2, $value3){
if($value1<$value2 && $value1<$value3){
    return $value1;
} else if($value2<$value1 && $value2<$value3){
    return $value2;
}else if ($value3<$value2 && $value3<$value1){
    return $value3;
}
}
$result = printLowestValueOutOfThreeParameter(100,200,30);
echo "$result is the lowest value<br>";



//Lav en funktion der ingen parametrer tager, og som udskriver en valgfri tekst. Kald funktion 2 gange.
function printAFunctionWithoutParameter(){
    echo "Optional text<br>";
}

printAFunctionWithoutParameter();
printAFunctionWithoutParameter();


//Lav en funktion, der tager 5 parametrer, og udskriver en sætning med alle 5. Du bestemmer selv hvad sætningen er.
//Prøv at kald den flere gange. Ændre i dine parametre, og se hvordan sætningen ændrer sig med det.
function printAFunctionWith5Parameter($name,$age,$heigth,$weight,$nationality){
    echo "Hi my name is $name I am $age old I am $heigth cm in height, and weight is $weight kg. I am of $nationality origin";
}

printAFunctionWith5Parameter("Qu",31,175,85,"Vietnamese")
?>