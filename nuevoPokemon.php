<?php
session_start();
if (!$_SESSION['logeado']) {
    header('location:index.php');
    exit();
}
require_once("conexion.php");
require_once("funciones.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Pokemon</title>
    <!--Etiquetas para visualizar cambios de css en tiempo real-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/nuevoPokemon.css?v=<?php echo time(); ?>"/>
    <script src="/js/functions.js?v=<?php echo time(); ?>"></script>
</head>
<body>
<header>
    <div class="head">
        <a href="indexAdmin.php"><img src="imagenes/pokemon-logo.png" width="250px" style="margin: auto;"><img></a>
    </div>
</header>
<main>
    <section class="edit">
        <article class="container">
            <h1>Registra un Pokemon</h1>

            <form action="registrar-pokemon.php" method="POST" enctype="multipart/form-data">
                <div>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" required>

                    <label for="imagen">Imagen</label>
                    <input type="file" name="imagen" required>

                    <label for="tipo">Tipo</label>
                    <select name="tipo" required>
                        <?php $listaTipos = funciones::listarTipos();
                        foreach ($listaTipos as $tipo){
                            echo "<option value='$tipo[id]'>$tipo[tipo]</option>";
                        }
                        ?>
                    </select>

                    <label for="descripcion">Descripcion</label>
                    <textarea name="descripcion" width="100%" height="200px" required></textarea>

                    <button type="submit">Registrar</button>
                </div>

                <div>
                    <img src="imagenes/Opera%20Instantánea_2022-09-22_002239_pokemon.fandom.com.png"
                         width="500px" height="500px"></div>

            </form>
        </article>
    </section>
</main>
</body>
</html>