<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" href="img/LogoEESTN1.png" type="image/x-icon">
    <!-- Estilos css -->
    <link rel="stylesheet" href="css/globalStyle.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/sedes/main.css">
    <title>Escuela de Educación Tecnica N°1 Vicente Lopez</title>
</head>
<body>
    <?php
        include 'menu.php';
        get_active("sed"); 
        
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
            <h2>Sedes en las que cursamos</h2>
        </div>


        <!-- Contenedor para las ubicaciones de las instituciones -->
        <!-- Escuela Secundaria Tecnica 1 // Es una contenedor para la institución -->
        <div class="contenedor_institucion">

            <!-- Esta parte solo contiene el nombre de la institución -->
            <div class="cont_instituto">
                <div class="cont_linea">
                    <div class="linea1"></div>
                    <div class="linea2"></div>
                </div>
                <h2>ESCUELA DE EDUCACIÓN SECUNDARIA TÉCNICA N°1 "EDUARDO ADER"</h2>
            </div>

            <!-- Como se indica esta parte mostrara la ubicación de la institución -->
            <div class="contenedor_ubicacion">
                <div class="ubicacion">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3287.4006114986105!2d-58.53745522416194!3d-34.51807695298058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb0946037da75%3A0x7fae4b92e6699b59!2s' Cerrito 3966, Villa Adelina. '!5e0!3m2!1ses-419!2sar!4v1684382444792!5m2!1ses-419!2sar" width="100%" height="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>
                </div>

                <!-- un contenedor para los horarios  -->
                <div class="cont_horarios">
                    <h3>Horarios de la escuela</h3>

                    <!-- contiene el turno y en que horas se cursa esos turnos -->
                    <div class="horarios">
                        <div class="turno">
                            <p>Turno Mañana:</p>
                            <p>Turno Tarde:</p>
                            <p>Turno Vespertino:</p>
                        </div>
                        <div class="hora">
                            <p>07:35 a 11:55 hs</p>
                            <p>12:55 a 17:15 hs</p>
                            <p>17:35 a 21:45</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- un contenedor y clases del mapa institucional-->
        <div class="sede">
            <h3 class="titulo_mapa">Mapa institucional</h3>
            <div class="mapa_escuela">
                <img src="img/mapa/mapa_plantabaja.png" alt="">
                <img src="img/mapa/primer_planta.png" alt="">
                <img src="img/mapa/segunda_planta.png" alt="">
            </div>
        </div>

        <!-- Un contenedor para otras instituciones en las cuales tenemos precencia -->
        <div class="contenedor_institutosSecundario">
            <h3>Otras sedes a las cuales tenemos presencia</h3>
            <div class="sedes_secundarias">

                <!-- "sede"  contiene el nombre y la ubicación de la institución-->
                <!-- Centro universitario de munron -->
                <div class="sede">
                    <h2>CENTRO UNIVERSITARIO VICENTE LÓPEZ</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3287.4006114986105!2d-58.53745522416194!3d-34.51807695298058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb0946037da75%3A0x7fae4b92e6699b59!2s' Carlos Villate 4480, Munro. '!5e0!3m2!1ses-419!2sar!4v1684382444792!5m2!1ses-419!2sar" width="100%" height="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>                    
                </div>

                <!-- Polideportivo -->
                <div class="sede">
                    <h2>POLIDEPORTIVO DE VICENTE LÓPEZ</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3287.4006114986105!2d-58.53745522416194!3d-34.51807695298058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb0946037da75%3A0x7fae4b92e6699b59!2s' Av. Bernardo Ader 4057, Villa Adelina. '!5e0!3m2!1ses-419!2sar!4v1684382444792!5m2!1ses-419!2sar" width="100%" height="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>
                    
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