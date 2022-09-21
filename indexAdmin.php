<?php
require_once 'archivosphp/buscador.php';
session_start();

if (!$_SESSION['logeado']) {
    header('location:index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <!--Etiquetas para visualizar cambios de css en tiempo real-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/pokedex.css?v=<?php echo time(); ?>"/>
    <script src="/js/functions.js?v=<?php echo time(); ?>"></script>
</head>

<body>
<header>
    <div class="head">
        <img src="imagenes/Pikachu-Emoji-PNG.png" width="200px"><img>
        <img src="imagenes/pokemon-logo.png" width="250px" style="margin-left: 22em;"><img>

        <a href = "archivosphp/logout.php" tite = "Logout">Logout</a>
    </div>
</header>

<main>
    <form action="archivosphp/buscador.php" method="POST" enctype="multipart/form-data" class="form-search">
        <input type="text" name="search" placeholder="Ingrese el nombre, tipo o número de pokemon">
        <button type="submit" name="buscador">¿Quién es este pokemon?</button>
    </form>
    <table class="tabla">
        <thead>
        <tr>
            <th>Imagen</th>
            <th>Tipo</th>
            <th>Numero</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td><img src="imagenes/1200px-Vaporeon.png" ></td>
            <td><img src="imagenes/Agua_Pokemon.png" ></td>
            <td>1</td>
            <td><a class="detalle" href="detalle.php">Vaporeon</a></td>
            <td>
                <a href="modificar.php" style="background-color: #2DA9FF">Modificar</a>
                <a href="eliminar.php" style="background-color: #D90D32">Eliminar</a>
            </td>
        </tr>

         <!--      <tr>
            <?php $buscador = $_POST['search']; foreach (Buscador::listarResultadosFiltrados($buscador) as $fila) {  ?>
            <td><img src="imagenes/ <?php $fila[imagen];?>" ></td>
            <td><img src="imagenes/<?php $fila[tipo];?>" ></td>
            <td><?php $fila[numero];?></td>
            <td><a class="detalle" href="detalle.php"><?php $fila[nombre];?></a></td>
            <td>
                <a href="modificar.php?numero=<?php $fila[numero];?>" style="background-color: #2DA9FF">Modificar</a>
                <a href="eliminar.php?numero=<?php $fila[numero];}?>" style="background-color: #D90D32">Eliminar</a>
            </td>
        </tr>-->
        </tbody>
    </table>

    <div class="link"><a class="new" href="nuevoPokemon.php">Nuevo pokemon</a></div>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
