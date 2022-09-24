<?php
require_once ("conexion.php");
require_once ("funciones.php");

$nombre = $_GET["nombre"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalle</title>
    <!--Etiquetas para visualizar cambios de css en tiempo real-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/detalle.css?v=<?php echo time(); ?>"/>
    <script src="/js/functions.js?v=<?php echo time(); ?>"></script>
</head>

<body>
<header>
    <div class="head">
        <a href="indexAdmin.php"><img src="imagenes/pokemon-logo.png" width="250px" style="margin: auto;"><img></a>
    </div>
</header>
<main>
    <section class="container">
        <?php $pokemon = funciones::getPokemon($nombre);
        $imagen = funciones::getImagen($pokemon['imagen']);
        $tipo = funciones::getTipo($pokemon['tipo']);
        echo "
            <article class='centro'>
                <h1>$pokemon[nombre]</h1>
                <h2>N.°$pokemon[numero]</h2>
            </article>
            <article class='flex'>
                <div>
                   <img src='imagenes/$imagen' class='pokemon' style='width: 400px'>
                </div>
                <div class='info'>
                    <h3>Tipo</h3>
                    <img src='imagenes/$tipo' style='width: 100px'>
                    <h3>Descripcion</h3>
                    <p>$pokemon[descripcion]</p>
                </div>
            </article> ";
        ?>
    </section>
</main>
</body>
</html>
