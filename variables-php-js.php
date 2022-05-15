<?php
$usuarios = array(
    array("id" => 1,
    "nombre" => "Juan",),
    array("id" => 2,
    "nombre" => "Pepe",),
    array("id" => 3,
    "nombre" => "Maria",),
);
$edad = 18;

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
     <div>

     </div>

<script>

    let users = JSON.parse('<?php echo json_encode($usuarios); ?>');
    const usersContainer = document.querySelector('div');
    usersContainer.innerHTML = users.map(user => `<p>${user.nombre}</p>`).join('');
    let edad = <?php echo $edad; ?>;
    console.log(edad);
</script>
    
</body>
</html>