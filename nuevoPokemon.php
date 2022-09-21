<?php
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
            <form action="archivosphp/registrar-pokemon.php" method="POST" enctype="multipart/form-data">

                <div><img src="imagenes/quien_es_ese_pokemon__who_s_that_poke___by_shikomt_by_shikomt_dbf1jrd-fullview.jpg" width="450px"></div>

                <div>
                <label for="id">Numero</label>
                <input type="number" name="numero">

                <label for="nombre">Nombre</label>
                <input type="text" name="nombre">

                <label for="imagen">Imagen</label>
                <input type="file" name="imagen">

                <label for="descripcion">Descripcion</label>
                <textarea name="descripcion" width="100%" height="200px"></textarea>

                <button type="submit">Registrar</button>
                </div>
            </form>
        </article>
    </section>
</main>
</body>
</html>