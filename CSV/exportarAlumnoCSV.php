<?php
require_once '../conexion.php'; 
$sql = "SELECT * FROM tbl_alumne";
$lista = mysqli_query($con,$sql);

header('Content-Type: text/csv; charset=UTF-8');
header('Content-Disposition: attachment; filename=contenidoTblAlumne.csv');

$output = fopen("php://output", "w");
fputcsv($output, array('id_alumne', 'dni_alu', 'congnom1_alu', 'cognom2_alu', 'telf_alu', 'email_alu', 'classe'));
$query = $con->query("SELECT * FROM `tbl_alumne` ORDER BY `id_alumne` ASC");
while($fetch = $query->fetch_assoc()){
fputcsv($output, $fetch);
}

fclose($output);
?>
