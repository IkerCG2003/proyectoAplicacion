<?php session_start(); ?>
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
        <!-- ESTILOS CSS -->
        <link rel="stylesheet" href="./css/styles.css">
        <!-- SCRIPTS -->
        <script type="text/javascript" src="./js/index.js"></script>
        <!-- TITULO -->
        <title>Presentación</title>
    </head>

    <body class="cuerpoInicio"> 
        <!-- MENÚ DE NAVEGACIÓN -->
        <section id="menuNavegacion">
            <nav class="navbar fixed-top  navbar-dark bg-dark">
                <div class="container-fluid row">
                    <a class="navbar-brand column-4" id="tituloMenu">#AppJIYI</a>
                    <!-- puedes seleccionar con que rol quieres iniciar sesión clicando en el nombre -->
                    <a href="#" class="column-4" id="user_1">Alumno</a>
                    <a href="#" class="column-4" id="user_2">Profesor</a>
                    <a href="#" class="column-4" id="user_3">Administrador</a>
                </div>
            </nav>
        </section>

        <!-- PAGINA LOG IN -->
        <section id="paginaPresentacion">
            <!-- PESTAÑA DE ALUMNO -->
            <div id="cont_1">
                <div id="contContTitulo">
                    <div id="contTitulo">
                        <h1 id="titulo" class="flex">Inicia sesión como alumno</h1>
                    </div>
                </div>        
                
                <div id="contenedor">
                    <div id="contInformacion">
                        <div id="contenedorImagen">
                                <img src="./img/perfil.png" id="imagen">
                        </div>
    
                        <div id="informacion">
                            <div class="form">
                                <form action="./proc/proc.inicioAlumno.php" method="post">
                                    <input type="text" placeholder="nombre" name="nombre" class="input nombre">
                                    <input type="text" placeholder="correo" name="correo" class="input correo">
                                    <input type="password" placeholder="contraseña" name="contra" class="input correo">
                                    <br>
                                    <br>
                                    <div id="boton">
                                        <input type="submit" value="Enviar" name="enviar" class="boton">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PESTAÑA DE PROFESOR -->
            <div id="cont_2" style="display: none;">
                <div id="contContTitulo">
                    <div id="contTitulo">
                        <h1 id="titulo" class="flex">Inicia sesión como profesor</h1>
                    </div>
                </div>        
                
                <div id="contenedor">
                    <div id="contInformacion">
                        <div id="contenedorImagen">
                                <img src="./img/perfil.png" id="imagen">
                        </div>
    
                        <div id="informacion">
                            <div class="form">
                                <form action="./proc/proc.inicioProfe.php" method="post">
                                    <input type="text" placeholder="nombre" name="nombre" class="input">
                                    <input type="text" placeholder="correo" name="correo" class="input">
                                    <input type="password" placeholder="contraseña" name="contra" class="input">
                                    <br>
                                    <br>
                                    <div id="boton">
                                        <input type="submit" value="Enviar" name="enviar" class="boton">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PESTAÑA DE ADMINISTRADOR -->
            <div id="cont_3" style="display: none;">
                <div id="contContTitulo">
                    <div id="contTitulo">
                        <h1 id="titulo" class="flex">Inicia sesión como administrador</h1>
                    </div>
                </div>        
                
                <div id="contenedor">
                    <div id="contInformacion">
                        <div id="contenedorImagen">
                                <img src="./img/perfil.png" id="imagen">
                        </div>
    
                        <div id="informacion">
                            <div class="form">
                                <form action="./proc/proc.inicioAdmin.php" method="post">
                                    <input type="text" placeholder="nombre" name="nombre" class="input">
                                    <input type="text" placeholder="correo" name="correo" class="input">
                                    <input type="password" placeholder="contraseña" name="contra" class="input">
                                    <br>
                                    <br>
                                    <div id="boton">
                                        <input type="submit" value="Enviar" name="enviar" class="boton">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>