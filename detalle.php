<?php
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
            <article>
                <img src="imagenes/1200px-Vaporeon.png" class="pokemon" style="width: 400px">
            </article>
            <article>
                <div>
                    <h1>Vaporeon</h1>
                   <div class="tipo"><img src="imagenes/Agua_Pokemon.png" style="width: 100px"></div>
                </div>
                <div>
                    <p>Cuando las aletas de Vaporeon comienzan a vibrar, significa que lloverá en las próximas horas.
                        Altura: 1,0 m
                        Peso: 29,0 kg
                        Habilidad: Absorbe Agua</p>
                </div>
            </article>
        </section>
    </main>
</body>
</html>
