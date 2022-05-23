<?php
require_once '../conexion.php'; 
$sql = "SELECT * FROM tbl_professor";
$lista = mysqli_query($con,$sql);

header('Content-Type: text/csv; charset=UTF-8');
header('Content-Disposition: attachment; filename=contenidoTblProfessor.csv');

$output = fopen("php://output", "w");
fputcsv($output, array('id_professor', 'nom_prof', 'congnom1_prof', 'cognom2_prof', 'email_prof', 'telf', 'dept'));
$query = $con->query("SELECT * FROM `tbl_professor` ORDER BY `id_professor` ASC");
while($fetch = $query->fetch_assoc()){
fputcsv($output, $fetch);
}

fclose($output);
?>