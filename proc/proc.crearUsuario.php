<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/styles.css">
        <title>Proceso de datos</title>
    </head>

    <body>
        <?php
            // con esta página vamos a insertar los datos en la base de datos

            // recuperar valores del formulario
            $dni = $_POST['dni'];
            $name = $_POST['nombre'];
            $apell1 = $_POST['apellido1'];
            $apell2 = $_POST['apellido2'];
            $tele= $_POST['telf'];
            $email = $_POST['email'];
            $classe = $_POST['clase'];

            /* conexion a la base de datos */
            require '../conexion.php';
            /* sentencia sql para insertar los usuarios */
            $sql = "INSERT INTO `tbl_alumne` (`dni_alumne`,`nom_alu`,`cognom1_alu`,`cognom2_alu`,`telf_alu`,`email_alu`,`classe`) VALUES ('$dni','$name','$apell1','$apell2','$tele','$email',(SELECT `id_classe` FROM `tbl_classe` WHERE `codi_classe` = '$classe'))";
            $insert = mysqli_query($con,$sql);
            ?>

            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                function aviso(url) {
                    Swal.fire({
                            title: 'Usuario creado',
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Volver'
                        })
                        .then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = url;
                            }
                        })
                }
                aviso('../tabla.php');
            </script>
    </body>
</html>