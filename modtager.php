// Kildekode - modtager.php
<?php
echo "Du har send email med følgende data:<br>";

if ( !empty($_POST['to']) )
    echo $_POST['to'];
else
    echo "Du valgte ikke en modtager!";

echo "<br>";
echo $_POST['subject'];
echo "<br>";
echo $_POST['message'];
?>