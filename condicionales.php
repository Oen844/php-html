<?php
$se_hablo_de_bruno = false;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($se_hablo_de_bruno) {
        echo "<p>Esta condicional es verdadera</p>";
    }else{
        echo "<p>Esta condicional es falsa</p>";
    }
    ?>

    <!-- Esto es aceptable -->

    <?php if($se_hablo_de_bruno){ ?>
        <p>Esta condicional es verdadera</p>
    <?php }else{ ?>
        <p>Esta condicional es falsa</p>
    <?php } ?>

    <!-- Esto es la mejor manera de hacerlo -->
    
    <?php if($se_hablo_de_bruno): ?>
        <p>Esta condicional es verdadera</p>
    <?php else: ?>
        <p>Esta condicional es falsa</p>
    <?php endif; ?>

</body>

</html>