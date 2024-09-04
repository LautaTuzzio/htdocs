
<input type="checkbox" id="nav_celular">

<input type="checkbox" id="nav_celular">

<label for="nav_celular" class="contenedor_nav_celular">
</label>
<nav class="cont_nav_lateral">
    <div class="cont_btn_salir">
        <h2>EEST N°1 VL</h2>
        <label for="nav_celular">
            <i class="fa-solid fa-xmark"></i>
        </label>
    </div>
    <div id="ini2" class="nav"><a href="index.php">Inicio</a></div>
    <div id="dir2" class="nav"><a href="directivos.php">Directivos</a></div>
    <div id="esp2" class="nav"><a href="especialidades.php">Especialidades</a></div>
    <div id="nov2" class="nav"><a href="novedades.php">Novedades</a></div>
    <input type="checkbox" id="sub_nav_celular">          
    </div>
</nav>
<header>
    <picture>
        <img src="img/LogoEESTN1.png" alt="">
    </picture>
    <nav class="cont_nav">
        <div id="ini" class="nav "><a href="index.php">Inicio</a></div>
        <div id="dir" class="nav"><a href="directivos.php">Directivos</a></div>
        <div id="esp" class="nav"><a href="especialidades.php">Especialidades</a></div>
        <div id="nov" class="nav"><a href="novedades.php">Novedades</a></div>

    </nav>
    <div class="cont_btn_nav_lateral">
        <label for="nav_celular">
            <span></span>
            <span></span>
            <span></span>
        </label>
    </div>
</header>

<script src="https://kit.fontawesome.com/45f45403cb.js" crossorigin="anonymous"></script>

<?php
function get_active($nombre){
    echo '<script>document.getElementById("'.$nombre.'").className = "nav active"; document.getElementById("'.$nombre.'2").className = "nav active";</script>';

}
?>