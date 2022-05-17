<?
// recuperamos los valores del formulario
$name = $_POST['nombre'];
$mail = $_POST['correo'];
$pass = $_POST['contra'];

// establecemos la conexion a la base de datos

include_once 'conexion.php' // incluimos el fichero que contiene la conexion
$sql = "SELECT * FROM tbl_alumne WHERE email_alu = $mail";
$lista = mysqli_query($conexion,$sql);




