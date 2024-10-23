<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/globalStyle.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/novedades/main.css">
    <title>Document</title>
</head>
<body>
    <?php
        include 'menu.php';
        get_active("nov");
    ?>
    <div class="espacio_menu"></div> <!-- genera un espacio para que al inicio el menu no se sobreponga sobre la información -->

    <main>
        <!-- Esta parte es el recangulo azul claro que contiene el nombre de la sacción que se este viendo -->
        <div class="cont_presentacion">
            <div class="cont_linea">
                <div class="linea1"></div>
                <div class="linea2"></div>
            </div>
            <h2>Novedades</h2>
        </div>

        <!-- Contenedor de todas las noticias -->
        <div class="contenedor_noticias">
            <?php
                include "components/funciones.php";
                echo get_novedades();
            ?>
        </div>
    </main>
</body>
</html>