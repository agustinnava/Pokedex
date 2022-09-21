<?php
//require_once 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificar</title>
    <!--Etiquetas para visualizar cambios de css en tiempo real-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/modificar.css?v=<?php echo time(); ?>"/>
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
        <h1>Datos Pokemon</h1>
        <form action="grabar_modificacion.php" method="POST" enctype="multipart/form-data">

            <div><img src="imagenes/1200px-Vaporeon.png" width="300px"></div>

            <div>
                <label for="numero">Numero</label>
                <input type="number" name="numero" placeholder="1">

                <label for="imagen">Imagen</label>
                <input type="file" name="imagen" accept=".jpg, .jpeg">


                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Vaporeon">

                <label for="tipo">Tipo</label>
                <img src="imagenes/Agua_Pokemon.png" width="100px">


            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" style="width: 100%;"></textarea>
            <button type="submit">Actualizar</button>
            </div>
        </form>
    </section>
</main>

</body>
</html>