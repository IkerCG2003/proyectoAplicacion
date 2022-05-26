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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:wght@300&family=Ubuntu+Condensed&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:wght@300&family=Ubuntu+Condensed&display=swap" rel="stylesheet">
        <!-- DROPDOWN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- ESTILOS CSS -->
        <link rel="stylesheet" href="./css/styles.css">
        <!-- SCRIPTS -->
        <script type="text/javascript" src="./js/bbdd.js"></script>
        <!-- TITULO -->
        <title>Contenido de la Base de Datos</title>
    </head>

    <body id="fondoBD">
        <!-- BASE DE DATOS / TABLA DE ALUMNOS -->
        <!-- puedes elegir que base de datos mostrar clicando en el nombre -->
        <div id="contSelector">
            <div id="selector" class="row">
                <a href="#" id="tabla_1" class="column-2">Alumno</a>
                <a href="#" id="tabla_2" class="column-2">Profesor</a>
            </div>
        </div>
        
        <div id="section_1">
            <section id="menuNavegacion">
                <nav class="navbar navbar-dark bg-dark">
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
                        <!-- crear usario al clica en el botón -->
                        <a href="./cambios/crearUsuario.html" class="btn btn-primary" role="button" aira-disabled="true">Crear</a>
                        <!-- descargar fichero csv con el contenido de la base de datos -->

                        <div id="exportar_1">
                            <a href="./CSV/exportarAlumnosCSV.php"  class="btn btn-secondary" role="button" aria-disabled="true" id="botonExportar">Exportar CSV Alumnos</a>
                        </div>
                    </div>
                </nav>
            </section>

            <div class="base">
                <?php
                require_once "conexion.php";
                $sql = "SELECT * FROM tbl_alumne";
                $lista = mysqli_query($con,$sql);
                $contar = mysqli_num_rows($lista);

                $per_page_record = 2;  // Number of entries to show in a page.   
                // Look for a GET variable page if not found default is 1.        
                if (isset($_GET["page"])) {    
                    $page  = $_GET["page"];    
                }    
                else {    
                    $page=1;    
                }    

                $start_from = ($page-1) * $per_page_record;     

                $query = "SELECT * FROM tbl_alumne LIMIT $start_from, $per_page_record";     
                $rs_result = mysqli_query ($con, $query);    
                ?>    
                <div class="container"> 
                    <div class="conTexto">
                        <h1 class="texto">Tabla de Alumnos</h1>
                        <p>
                            <?php
                                echo "<p class='textoPequeño'>Se han devuelto $contar valores</p>";
                            ?> 
                        </p>
                    </div> 

                    <table class="table table-striped table-condensed table-bordered">   
                        <thead>   
                            <tr>   
                                <th width="10%">#</th>   
                                <th>DNI</th>   
                                <th>Nombre</th>   
                                <th>1r Apellido</th>
                                <th>2o Apellido</th>
                                <th>Contraseña</th>
                                <th>Telefono</th>   
                                <th>Email</th>
                                <th>Clase</th>
                                <th>Borrar</th>
                                <th>Modificar</th>
                            </tr>   
                        </thead>

                        <tbody>   
                        <?php     
                        while ($row = mysqli_fetch_array($rs_result)) {    
                                // Display each field of the records.    
                        ?>     
                        <tr>     
                            <td><?php echo $row["id_alumne"]; ?></td>     
                            <td><?php echo $row["dni_alu"]; ?></td>
                            <td><?php echo $row["nom_alu"]; ?></td>   
                            <td><?php echo $row["cognom1_alu"]; ?></td>   
                            <td><?php echo $row["cognom2_alu"]; ?></td>
                            <td><?php echo $row["contraseña_alu"]; ?></td>
                            <td><?php echo $row["telf_alu"]; ?></td>                                           
                            <td><?php echo $row["email_alu"]; ?></td> 
                            <td><?php echo $row["classe"]; ?></td> 
                            <td><button class="btn btn-danger" onClick="window.location.href='./cambios/borrarUsuario.php?id=<?php echo $row['id_professor']; ?>';" >Borrar</button></td>
                            <td><button class="btn btn-success" onClick="window.location.href='./cambios/modificarUsuarioProfesor.php?id=<?php echo $row['id_professor']; ?>';" >Modificar</button></td>
                        </tr>     
                    <?php     
                        };    
                    ?>     
                    </tbody> 
                    </table>   
                </div>

                <div class="pagination">    
                    <?php  
                        $query = "SELECT COUNT(*) FROM tbl_alumne";     
                        $rs_result = mysqli_query($con, $query);     
                        $row = mysqli_fetch_row($rs_result);     
                        $total_records = $row[0];     
                            
                        echo "</br>";     
                        // Number of pages required.   
                        $total_pages = ceil($total_records / $per_page_record);     
                        $pagLink = "";            
                                    
                        for ($i=1; $i<=$total_pages; $i++) {   
                            if ($i == $page) {   
                                $pagLink .= "<a class = 'active' href='tabla.php?page="  
                                                                .$i."'>".$i." </a>";   
                            }               
                            else  {   
                                $pagLink .= "<a href='tabla.php?page=".$i."'>   
                                                                ".$i." </a>";     
                            }   
                        };  

                        echo $pagLink;   
 
                    ?>    
                </div>  

                <script>   
                    function go2Page()   
                    {   
                        var page = document.getElementById("page").value;   
                        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
                        window.location.href = 'tabla.php?page='+page;   
                    }   
                </script>   
            </div>
        </div>
        
        <!-- BASE DE DATOS / TABLA PROFESORES -->
        <div id="section_2" style="display: none;">
            <section id="menuNavegacion">
                <nav class="navbar navbar-dark bg-dark">
                    <div class="container-fluid">
                        <!-- hacemos un fitro utilizando un formulario -->
                        <div class="dropdown">
                            <div id="filtro_2">
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
                        <!-- crear usario al clica en el botón -->
                        <a href="./cambios/crearUsuario.html" class="btn btn-primary" role="button" aira-disabled="true">Crear</a>
                        <!-- descargar fichero csv con el contenido de la base de datos -->
                        
                        <div id="exportar_2">
                            <a href="./CSV/exportarProfesCSV.php"  class="btn btn-secondary" role="button" aria-disabled="true" id="botonExportar">Exportar CSV Profesor</a>
                        </div>
                    </div>
                </nav>
            </section>

            
            <div class="base">
            <?php   
                require_once "conexion.php";
                $sql = "SELECT * FROM tbl_professor";
                $lista = mysqli_query($con,$sql);
                $contar2 = mysqli_num_rows($lista);
                
                // NUMERO DE RESULTADOS POR PÁGINA
                $per_page_record = 2; 

                if (isset($_GET["page"])) {    
                    $page  = $_GET["page"];    
                }    
                else {    
                    $page=1;    
                }    

                $start_from = ($page-1) * $per_page_record;     

                $query = "SELECT * FROM tbl_professor LIMIT $start_from, $per_page_record";     
                $rs_result = mysqli_query ($con, $query);    
                ?>    

                <div class="container">

                    <div class="conTexto">
                        <h1 class="texto">Tabla de Profesores</h1>
                        <p>
                            <?php
                                echo "<p class='textoPequeño'>Se han devuelto $contar2 valores</p>";
                            ?> 
                        </p>
                    </div>
                    
                    <table class="table table-striped table-condensed table-bordered">   
                                <thead>   
                                    <tr>   
                                        <th width="10%">#</th>   
                                        <th>Nombre</th>   
                                        <th>1r Apellido</th>   
                                        <th>2o Apellido</th>
                                        <th>Email</th>   
                                        <th>Telefono</th>
                                        <th>Departamento</th>
                                        <th>Borrar</th>
                                        <th>Modificar</th>
                                    </tr>   
                                </thead>   
                                <tbody>   
                            <?php     
                                while ($row = mysqli_fetch_array($rs_result)) {    
                                        // Display each field of the records.    
                            ?>     
                                <tr>     
                                    <td><?php echo $row["id_professor"]; ?></td>     
                                    <td><?php echo $row["nom_prof"]; ?></td>   
                                    <td><?php echo $row["cognom1_prof"]; ?></td>   
                                    <td><?php echo $row["cognom2_prof"]; ?></td> 
                                    <td><?php echo $row["email_prof"]; ?></td>                                           
                                    <td><?php echo $row["telf"]; ?></td> 
                                    <td><?php echo $row["dept"]; ?></td> 
                                    <td><button class="btn btn-danger" onClick="window.location.href='./cambios/borrarUsuario.php?id=<?php echo $row['id_professor']; ?>';" >Borrar</button></td>
                                    <td><button class="btn btn-success" onClick="window.location.href='./cambios/modificarUsuarioProfesor.php?id=<?php echo $row['id_professor']; ?>';" >Modificar</button></td>
                                </tr>     
                            <?php     
                                };    
                            ?>     
                            </tbody> 
                    </table>   
                </div>

                <div class="pagination">    
                    <?php  
                        $query = "SELECT COUNT(*) FROM tbl_professor";     
                        $rs_result = mysqli_query($con, $query);     
                        $row = mysqli_fetch_row($rs_result);     
                        $total_records = $row[0];     
                            
                        echo "</br>";     
                        // Number of pages required.   
                        $total_pages = ceil($total_records / $per_page_record);     
                        $pagLink = "";            
                                    
                        for ($i=1; $i<=$total_pages; $i++) {   
                            if ($i == $page) {   
                                $pagLink .= "<a class = 'active' href='tabla.php?page="  
                                                                .$i."'>".$i." </a>";   
                            }               
                            else  {   
                                $pagLink .= "<a href='tabla.php?page=".$i."'>   
                                                                ".$i." </a>";     
                            }   
                        };  

                        echo $pagLink;   

                    ?>    
                </div>  

                <script>   
                    function go2Page()   
                    {   
                        var page = document.getElementById("page").value;   
                        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
                        window.location.href = 'tabla.php?page='+page;   
                    }   
                </script>
        </div>
    </body>
</html>