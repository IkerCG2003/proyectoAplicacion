<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- DROPDOWN -->
        <script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:wght@300&family=Ubuntu+Condensed&display=swap" rel="stylesheet">
        <!-- ESTILOS CSS -->
        <link rel="stylesheet" href="./css/styles.css">
        <!-- SCRIPTS -->
        <script type="text/javascript" src="./js/scripts.js"></script>
        <!-- TITULO -->
        <title>Contenido de la Base de Datos</title>
    </head>

    <body>
        <!-- MENU DE LA TABLA -->
        <section id="menuNavegacion">
            <nav class="navbar fixed-top  navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" id="tituloMenu">#AppJIYI</a>
                    <a href="#" id="user_1">Alumno</a>
                    <a href="#" id="user_2">Profesor</a>
                    <button type="button" class="btn btn-primary">Primary</button>
                    <a href="./importarCSV.php"  class="btn btn-secondary" role="button" aria-disabled="true">Importar</a>
                </div>
            </nav>
        </section>

        <!-- TABLA -->
        <div id="contTabla">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">1r Apellido</th>
                        <th scope="col">2o Apellido</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Email</th>
                        <th scope="col">Clase</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Modificar</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        include_once 'conexion.php';
                        $sql = "SELECT * FROM tbl_alumne";
                        $lista = mysqli_query($con,$sql);

                        foreach ($lista as $valor => $campo) {
                            echo "<tr>";
                                echo "<td>{$campo['id_alumne']}</td>";
                                echo "<td>{$campo['dni_alu']}</td>";
                                echo "<td>{$campo['nom_alu']}</td>";
                                echo "<td>{$campo['cognom1_alu']}</td>";
                                echo "<td>{$campo['cognom2_alu']}</td>";
                                echo "<td>{$campo['telf_alu']}</td>";
                                echo "<td>{$campo['email_alu']}</td>";
                                echo "<td>{$campo['classe']}</td>";
                    ?>
                                <td><button class="btn btn-success" onClick="window.location.href='./cambios/modificar.php?id=<?php echo $campo['id']; ?>';" >Modificar</button></td>
                                <td><button class="btn btn-danger" onClick="window.location.href=('./cambios/borrar.php?id=<?php echo $campo['id']; ?>';" >Borrar</button></td>
                            <?php
                            echo "</tr>";
                        }
                            ?>
                </tbody>
            </table>  
        </div> 
    </body>
</html>