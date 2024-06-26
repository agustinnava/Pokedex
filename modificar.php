<?php
session_start();
if (!$_SESSION['logeado']) {
    header('location:index.php');
    exit();
}
require_once("conexion.php");
require_once("funciones.php");

$numero = $_GET['numero'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificar</title>
    <!--Etiquetas para visualizar cambios de css en tiempo real-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="/js/functions.js?v=<?php echo time(); ?>"></script>
    <link rel="stylesheet" href="estilos/nuevoPokemon.css?v=<?php echo time(); ?>"/>

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger navbar-custom">
        <div class="container-fluid">
            <div class="navbar-brand ">
                <a href="indexAdmin.php"><img src="imagenes/pokemon-logo.png" width="250px"><img></a>
            </div>
        </div>
    </nav>
</header>
<main>
    <section class="edit">
    <article class="container">
        <h1>Datos Pokemon</h1>
        <form action='grabar-modificacion.php' method="POST" enctype="multipart/form-data">

            <?php
            $datos = funciones::datosPokemon($numero);

            $imagen = funciones::getImagen($datos['imagen']);
            $tipoImagen = funciones::getTipo($datos['tipo']);
            ?>

            <div>
                <img src='imagenes/<?php echo $imagen ?>' class='pokemon' width='600px'>
                <img src='imagenes/<?php echo $tipoImagen ?>' width='200px' style="margin: auto;">
            </div>

            <div>
                <label for='numero'>Numero</label>
                <input type='number' name='numero' value='<?php echo $datos['numero'] ?>' readonly>

                <label for='imagen'>Imagen</label>
                <input type='file' name='imagen' accept='.jpg, .jpeg, .png'>

                <label for='nombre'>Nombre</label>
                <input type='text' name='nombre' value='<?php echo $datos['nombre'] ?>'>

                <label for='tipo'>Tipo</label>
                <select name='tipo'>
                    <?php $listaTipos = funciones::listarTipos();
                    foreach ($listaTipos as $tipo){
                        if ($tipo['id'] == $datos['tipo']){
                            echo "<option value='$tipo[id]' selected>$tipo[tipo]</option>";
                        } else {
                            echo "<option value='$tipo[id]'>$tipo[tipo]</option>";
                        }
                    }?>
                </select>

                <label for='descripcion'>Descripcion</label>
                <textarea name='descripcion' style='width: 100%;'> <?php echo $datos['descripcion']?></textarea>

                <button type='submit' name='actualizar'>Actualizar</button>
            </div>
        </form>
    </article>
    </section>
</main>
</body>
</html>
