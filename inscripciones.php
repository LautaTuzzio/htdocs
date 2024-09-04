<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/LogoEESTN1.png" type="image/x-icon">
    <!-- Estilos css -->
    <link rel="stylesheet" href="css/globalStyle.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/inscripciones/main.css">
    <title>Escuela de Educación Tecnica N°1 Vicente Lopez</title>
</head>
<body>
    <?php
        include 'menu.php';
        get_active("ins"); 
        ?>
    <div class="espacio_menu"></div> <!-- genera un espacio para que al inicio el menu no se sobreponga sobre la información -->


    <!-- Cuerpo de la pagina -->
    <main>

        <!-- Esta parte es el recangulo azul claro que contiene el nombre de la sacción que se este viendo -->
        <div class="cont_presentacion">
            <div class="cont_linea">
                <div class="linea1"></div>
                <div class="linea2"></div>
            </div>
            <h2>Inscripciones para la EEST N°1 VL</h2>
        </div>

        <!-- Contenedor para toda la información necesaria para las inscripciones -->
        <div class="contenedor_inscripciones">
            <div class="cont_razones_para_inscribirse">
                <h2>¿POR QUE INSCRIBIRSE A LA TECNICA?</h2>
                <div class="cont_info">
                    <p>En primer lugar, adquirir habilidades en programación y electrónica es una inversión sólida en el futuro. Estas competencias se han convertido en la columna vertebral de nuestra sociedad moderna, y son fundamentales en una amplia gama de industrias, desde la medicina hasta el entretenimiento. La demanda de profesionales con conocimientos en estas áreas nunca ha sido tan alta, lo que garantiza oportunidades laborales emocionantes y bien remuneradas.</p>
                    <p>Además, aprender programación y electrónica no se trata solo de obtener un trabajo, sino de cultivar habilidades esenciales. La programación fomenta la creatividad y la capacidad para resolver problemas de manera efectiva. A medida que te enfrentas a desafíos técnicos, desarrollas habilidades de pensamiento crítico y lógico que son valiosas en cualquier campo.</p>                
                </div>
            </div>
            <div class="contenedor_info_inscripcion">
                <div class="cont_informacion">
                    <h2>¿CUANDO ABRIMOS LAS INSCRIPCIONES?</h2>
                    <div class="cont_info">
                        <p>Las inscripciones se abren en noviembre de 2024 para que los futuros aspirantes, a estudiar en la tecnica vean los proyectos presentes y desee inscribirse al ver que trabajos han realizado durante el año lectivo los distintos cursos </p>
                    </div>
                </div>
                <div class="cont_informacion">
                    <h2>¿QUE TIENEN QUE TRAER?</h2>
                    <div class="cont_info">
                        <p>Lo que tienen que traer son los papeles que van a estar disponibles en el kiosco de la institución. Luego cuando tengan rellenado los formularios se necesita el pase de su colegio anterior y ganas de aprender.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <!-- Footer -->
    <footer>
        <div class="escuela">
            <div class="linea"></div>
            <p>Escuela de Educación Tecnica N°1 Eduardo Ader</p>
            <div class="linea"></div>
        </div>
        <div class="cont_footer">
            <p>Copyright © 2023 - Programación 6to 3ra</p>
        </div>
    </footer>


</body>
</html>