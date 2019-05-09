<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="nemprogrammering" content="php">
    <title>PHP</title>
</head>
<body>
    <p>I am HTML</p> <?php echo"<h1>i am PHP</h1>"?>

    <?php
        $age = 21;
        echo "I am $age year old";
        echo"<br>";
    ?>

<!-- https://www.nemprogrammering.dk/Tutorials/PHP/PHP/6-datatyper.php -->

    <?php
        $dataInt = 31;
        $dataDouble = 31.5;
        $dataString = "december";

        echo  "<br>Jeg er en datatype int = $dataInt";
        echo  "<br>Jeg er en datatype double = $dataDouble";
        echo  "<br>Jeg er en datatype string = $dataString";

        echo "<br>brug i forbindelse med echo for at udprinte variablens værdi og single quotes '' for at udprinte variablens navn";

    ?>

</body>
</html>
