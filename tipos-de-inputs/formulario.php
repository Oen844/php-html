<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="server.php" method="post" enctype="multipart/form-data">
        <!-- input simple -->
        <!-- <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"> -->

        <!-- arreglos -->
        <!-- <label for="personas">Personas:</label>
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">
        <input type="text" name="personas[]"> -->

        <!-- Arreglos asosciativos -->

        <!-- <label for="">Nombre:</label>
        <input type="text" name="persona[nombre]">
        <label for="email">Email:</label>
        <input type="email" name="persona[mail]">
        <label for="edad">Edad:</label>
        <input type="number" name="persona[edad]"> -->

        <!-- Radios -->
        
        <!-- <label for="mexico">Mexico</label>
        <input type="radio" name="pais" value= "Mexico">
        <label for="españa">España</label>
        <input type="radio" name="pais" value="España">
        <label for="EEUU">EEUU</label>
        <input type="radio" name="pais" value="EEUU"> -->

        <!-- Multiples archivos -->

        <label for="galeria">Carga tus imágenes</label>
        <input type="file" multiple name="galeria[]" id="galeria">

        <button type="submit">Mandar formulario</button>
    </form>
</body>
</html>