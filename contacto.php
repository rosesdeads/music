<?php
$pagina="contacto";
include ("includes/header.php");
include ("funcionesPHP/conexion.php");
?>
<div class="main-contacto">
    <!-- <img src="img/cuaderno.png" alt="">-->
</div>
<h1 id="h1-contacto">Contacto</h1>
<div class="div-contacto">
    <div class="img">
    <h3>Correo Electrónico: <br> <a href="mailto:fckblckrss@gmail.com">Fckblckrss@gmail.com</a></h3>
    
    <img src="img/rosa-contacto.png" alt="rosa contacto"> 
    </div>
    <div class="div-formulario">
        <h2>Formulario</h2>
    <form action="contacto.php" method="post" onsubmit="return validarFormulario()">
    <label for="nombre">Nombre</label><br>
    <input type="text" name="nombre" id="nombre" required><br>
    <label for="apellidos">Apellidos</label><br>
    <input type="tel" name="apellidos" id="apellidos" required><br>
    <label for="correo">Correo electronico</label><br>
    <input type="text" name="correo" id="correo" required><br>
    <label for="telefono">Teléfono</label><br>
    <input type="text" name="telefono" id="telefono" required><br>
    <label for="mensaje">Escribe tu mensaje</label><br>
    <textarea name="mensaje" id="mensaje" required></textarea>
    <input type="submit" value="Enviar" onclick="validarFormulario()">
    </form>
    </div>
      <script src="js/validarFormulario.js"></script>
</div>
<?php
include ("includes/footer.php")
?>