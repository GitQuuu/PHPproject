<?php
//Lav et vilkårligt while loop, og konverter den derefter til et for-loop.
$Titabellen = 1;
while($Titabellen <=10){
    echo 10*$Titabellen."";
    echo "<br>";
    $Titabellen++;
}
//Udskriv 10-tabellen med et for loop.
echo"<br>";
for ($tal = 1; $tal <=10; $tal++){
    echo" ";
    echo $tal*10;
}
echo"<br>";
echo"<br>";
//Udskriv alle lige tal, fra 1-1000 (brug en if-sætning og %)
//Method 1 loop starts from number 2 and after every count its value increment by 2 for print even numbers.
for ($method1 = 2; $method1 <=1000; $method1+=2) {
    echo " ";
    echo $method1;
}
echo"<br>";
echo"<br>";
//method 2 loop starts from number 1 and after every count its value increment by 1, when ‘if’ condition will be true, it print even numbers.
for($method2= 1; @$method2 <=1000; @$method2++){
    if($method2%2==0){
        echo $method2." ";
    }
}
echo"<br>";
echo "<br>";
//udskriv tallen 0 til -100 med en while loop
    $decrement = 0;
    while ($decrement >= -100){
        echo $decrement;
        echo "<br>";

        --$decrement;
    }
echo"<br>";

/* Vi ønsker at købe en robot. Lav et program med 3 variabler (money, paycheck og robotCost). Sæt de 3 værdier til
   henholdsvist 0 (vores nuværdene konto saldo), 5 (vores løn) og 100 (prisen på den seje robot). Forøg money med
   paycheck (money += paycheck), så længe at (while-loop) money er mindre end robotCost. Når vi får råd til at købe
   vores robot, så udskriv sætningen "Nu kan vi købe robotten!"*/

$money = 0;
$paycheck = 5;
$robotcost = 100 ;

    //Så længe money(0) er mindre end Robotcost(100)
    while (@$money < $robotcost){
        //skal vi ligge paycheck(5) til money(0) indtil vi rammer 100
        $money+=$paycheck;
        //udskriv moneys værdi
        echo"$money kr. ";
    }

    if($money==$robotcost){
        echo " = Nu kan vi købe robotten";
    }

?>