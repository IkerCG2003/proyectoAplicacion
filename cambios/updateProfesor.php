<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    
<?php
    include '../conexion.php';
    $nom = $_POST['nombre'];
    $ape1 = $_POST['apellido1'];
    $ape2 = $_POST['apellido2'];
    $telf = $_POST['telef'];
    $mail = $_POST['email'];
    $dept = $_POST['dept'];
    $id = $_POST['id'];
    $sql = "UPDATE `tbl_professor` SET `nom_prof` = '$nom' ,`cognom1_prof` = '$ape1', `cognom2_prof` = '$ape2',`email_prof` = '$mail' , `telf` = '$telf', `dept` = '$dept' WHERE `tbl_professor`.`id_professor` = $id";
    mysqli_query($con, $sql);
    echo $sql;
?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function aviso(url) {
            Swal.fire({
                    title: 'Usuario modificado',
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