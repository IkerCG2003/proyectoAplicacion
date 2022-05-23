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
            $name = $_POST['nombre'];
            $apell1 = $_POST['apellido1'];
            $apell2 = $_POST['apellido2'];
            $tele= $_POST['telf'];
            $email = $_POST['email'];
            $dept = $_POST['dept'];

            /* conexion a la base de datos */
            include '../conexion.php';
            /* sentencia sql para insertar los usuarios */
            $sql = "INSERT INTO `tbl_professor` (`nom_prof`,`cognom1_prof`,`cognom2_prof`,`email_prof`,`telf`,`dept`) VALUES ('$name','$apell1','$apell2','$email','$tele',$dept);";
            echo $sql;
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