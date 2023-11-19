<html>
    <?php session_start (); ?>
    <div>
        <a class="logo" href="index.php"><img src="images/Vapor_Logo_Png_2.png" alt="Logo página">
    </div>

   <nav id="menu_hamburguesa">
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
        <div class="dropdown">
            <ul>
                <li><a href="index.html">Inicio</a></li>
            </ul>
        </div>
            <div class="dropdown">
                <ul>
                    <li><a>Personajes</a></li>
                    <div class="dropdown-content">
                        <li><a href="protagonistas.html">Protagonistas</a></li>
                        <li><a href="secundarios.html">Personajes Secundarios</a></li>
                        <li><a href="cameos.html">Estrellas Invitadas</a></li>
                    </div>
                </ul>
            </div>
            <div class="dropdown">
                <ul>
                    <li><a>¿Que es<br>F·R·I·E·N·D·S?</a></li>
                    <div class="dropdown-content">
                        <li><a href="resumen.html">Resumen</a></li>
                        <li><a href="origen.html">Origen</a></li>
                        <li><a href="derivados.html">Derivados</a></li>
                    </div>
                </ul>
            </div>
            <div class="dropdown">
                <ul>
                    <li><a>Detrás de<br>Cámaras</a></li>
                    <div class="dropdown-content">
                        <li><a href="produccion.html">Producción</a></li>
                        <li><a href="impacto.html">Impacto Cultural</a></li>
                        <li><a href="temporadas.html">Temporadas</a></li>
                        <li><a href="prensa.html">Datos de Prensa</a></li>
                    </div>
                </ul>
            </div>
        <div class="dropdown">
            <ul>
                <li><a href="galeria.html">Galería</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <ul>
                <li><a href="contacto.html">Contacto</a></li>
            </ul>
        </div>
        </nav>
</html>