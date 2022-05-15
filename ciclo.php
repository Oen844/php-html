<?php
$usuarios = ["juan", "pepe", "maria"];
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
    <ul>
        <?php for($i = 0; $i < 10; $i++): ?>
            <li>
                <?=  $i; ?>
            </li>
        <?php endfor; ?>

        <?php while(false): ?>
            <li>
                <?=  $i; ?>
            </li>
        <?php endwhile; ?>

    </ul>

    <h1>Lista de usuarios</h1>

    <ul>
        <?php foreach($usuarios as $usuario): ?>
            <li>
                <?= $usuario; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>