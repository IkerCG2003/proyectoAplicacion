<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:wght@300&family=Ubuntu+Condensed&display=swap" rel="stylesheet">
        <!-- DROPDOWN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- ESTILOS CSS -->
        <link rel="stylesheet" href="./css/styles.css">
        <!-- SCRIPTS -->
        <script type="text/javascript" src="./js/bbdd.js"></script>
        <script type="text/javascript" src="./js/.js"></script>
        <!-- TITULO -->
        <title>Contenido de la Base de Datos</title>
    </head>

    <body>
        <div>
            <a href="#" id="click_1">Alumno</a>
            <a href="#" id="click_2">Profesor</a>
        </div>
        
       <!-- BASE ALUMNOS -->
       <div id="section_1">
            <section id="menuNavegacion">
            <nav class="navbar fixed-top  navbar-dark bg-dark">
            <div class="container-fluid">
            <!-- hacemos un fitro utilizando un formulario -->
            <div class="dropdown">
                <div id="filtro_1">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <!--Filtros -->
                        Filtro Alumno
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <form action="proc.filtro.php" method="post" >
                            <p><input type="text" Placeholder="DNI" name="dni"></p>
                            <p><input type="nombre" placeholder="Nombre" name="name"></p>
                            <p><input type="nombre" placeholder="1r Apellido" name="apellido1"></p>
                            <p><input type="nombre" placeholder="2o Apellido" name="apellido2"></p>
                            <p><input type="nombre" placeholder="Clase" name="clase"></p>
                        </form>   
                    </ul>
                </div>

                <div id="filtro_2" style="display: none;">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <!--Filtros -->
                        Filtro Profesor
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <form action="proc.filtro.php" method="post" >
                            <p><input type="nombre" placeholder="Nombre" name="name"></p>
                            <p><input type="nombre" placeholder="1r Apellido" name="apellido1"></p>
                            <p><input type="nombre" placeholder="2o Apellido" name="apellido2"></p>
                            <p><input type="nombre" placeholder="Departamento" name="dept"></p>
                        </form>   
                    </ul>
                </div>
                </div>
                <a class="navbar-brand" id="tituloMenu">#AppJIYI</a>
                <!-- puedes elegir que base de datos mostrar clicando en el nombre -->
                <a href="#" id="tabla_1">Alumno</a>
                <a href="#" id="tabla_2">Profesor</a>
                <!-- crear usario al clica en el botón -->
                <a href="./cambios/crearUsuario.html" class="btn btn-primary" role="button" aira-disabled="true">Crear</a>
                <!-- descargar fichero csv con el contenido de la base de datos -->
                <div id="exportar_1">
                <a href="./CSV/exportarAlumnoCSV.php"  class="btn btn-secondary" role="button" aria-disabled="true" id="botonExportar">Exportar CSV Alumno</a>
                </div>

                <div id="exportar_2" style="display: none;">
                <a href="./CSV/exportarProfesCSV.php"  class="btn btn-secondary" role="button" aria-disabled="true" id="botonExportar">Exportar CSV Profesor</a>
                </div>
                </div>
                </nav>
            </section>

            <div id="base_1" class="base">
            <div id="BBDD_alumne">
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
            $contar = mysqli_num_rows($lista);

            echo "Se han devuelto $contar valores";
            ?>



            <?php
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
            <td><button class="btn btn-danger" onClick="window.location.href='./cambios/borrarUsuario.php?id=<?php echo $campo['id_alumne']; ?>';" >Borrar</button></td>
            <td><button class="btn btn-success" onClick="window.location.href='./cambios/modificarUsuarioAlumno.php?id=<?php echo $campo['id_alumne']; ?>';" >Modificar</button></td>
            <?php
            echo "</tr>";
            }
            ?>
            </tbody>
            </table>  
            </div> 
            </div>    
            </div>
       </div>
        
        <!-- TABLA DE PROFESORES -->
        <div id="base_2" style="display: none;" class="base">
            <div id="BBDD_prof">
                <div id="contTabla">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">1r Apellido</th>
                                <th scope="col">2o Apellido</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Departamento</th>
                                <th scope="col">Eliminar</th>
                                <th scope="col">Modificar</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                include_once 'conexion.php';
                                $sql = "SELECT * FROM tbl_professor";
                                $lista = mysqli_query($con,$sql);
                                $contar = mysqli_num_rows($lista);

                                echo "Se han devuelto $contar valores";
                            ?>
                                
                                
                            <?php  
                                foreach ($lista as $valor => $campo) {
                                    echo "<tr>";
                                        echo "<td>{$campo['id_professor']}</td>";
                                        echo "<td>{$campo['nom_prof']}</td>";
                                        echo "<td>{$campo['cognom1_prof']}</td>";
                                        echo "<td>{$campo['cognom2_prof']}</td>";
                                        echo "<td>{$campo['email_prof']}</td>";
                                        echo "<td>{$campo['telf']}</td>";
                                        echo "<td>{$campo['dept']}</td>";
                            ?>
                                        <td><button class="btn btn-danger" onClick="window.location.href='./cambios/borrarUsuario.php?id=<?php echo $campo['id_professor']; ?>';" >Borrar</button></td>
                                        <td><button class="btn btn-success" onClick="window.location.href='./cambios/modificarUsuarioProfesor.php?id=<?php echo $campo['id_professor']; ?>';" >Modificar</button></td>
                                    <?php
                                    echo "</tr>";
                                }
                                    ?>
                        </tbody>
                    </table>  
                </div> 
            </div>    
        </div>
    </body>
</html>

