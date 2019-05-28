<!DOCTYPE html>
<html>
<head>
    <title>Test site</title>
</head>

<body>

<h1>PHP i HTML</h1>
<?php
$shouldShow = false;
if ( $shouldShow ) {
    ?>
    <p>Jeg skal udprintes, hvis shouldShow er true!</p>
<?php } ?>

<br>
<hr>

<h2>Udprinte value fra PHP</h2>
<?php $value = 15;?>
<p>Value er: <?php echo $value;?></p>

</body>
</html>