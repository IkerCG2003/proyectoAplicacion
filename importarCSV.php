<?php
    include_once("./conexion.php");
    $file = 'extractoBBDD.csv';
    $sql = "SELECT * FROM tbl_alumne";
    $rs = mysqli_query($con,$sql);
    if (mysqli_num_rows($rs) != 0) {
        $salto = "\r\n";
        $sep = ";";
        $fich = fopen($file, 'a');
        $regis = 'id_alumne' . $sep . 'dni_alu' . $sep . 'nom_alu' . $sep . 'cognom1_alu'  . $sep . 'cognom2_alu' . $sep . 'telf_alu' . 'email_alu' .  'classe' . $salto;
        fwrite($fich, $regis);
        while($row = mysqli_fetch_array($rs)) {
            $regis = $row['id_alumne'] . $sep . $row['dni_alu'] . $sep . $row['nom_alu'] . $sep . $row['cognom1_alu'] . $sep . $row['cognom2_alu'] . $sep . $row['telf_alu'] . $sep . $row['email_alu'] . $sep . $row['classe'] . $sep . $salto;
            fwrite($fich, $regis);
        }
    }
    fclose($fich);
    chmod($file, 0777);
?>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function aviso(url) {
        Swal.fire({
                title: 'Elementos Guardados',
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
    aviso('./tabla.php');
</script>