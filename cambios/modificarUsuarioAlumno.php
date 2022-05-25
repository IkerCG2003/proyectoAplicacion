<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title> Modificar Usuario</title>
</head>

<body>
    <?php
        include '../conexion.php';
        $sql = "SELECT * FROM tbl_alumne WHERE id_alumne={$_GET['id']}";
        $result = mysqli_query($con, $sql);
        $conta = mysqli_fetch_array($result, MYSQLI_ASSOC);
        
    ?>
    
    <form action="./updateAlumno.php" method="post">
        <p><input type="text" placeholder="Nuevo DNI" name="dni" value=></p>
        <p><input type="text" placeholder="Nuevo nombre" name="nombre"></p>
        <p><input type="text" placeholder="Nuevo 1r Apellido" name="apellido1"></p>
        <p><input type="text" placeholder="Nuevo 2o Apellido" name="apellido2"></p>
        <p><input type="text" placeholder="Nuevo telefono" name="telef"></p>
        <p><input type="text" placeholder="Nuevo email" name="email"></p>
        <p><input type="text" placeholder="Nueva clase" name="clase"></p>

        <div id="boton">
            <input type="submit" value="Enviar" name="enviar" class="boton">
        </div>
    </form>
</body>
</html>