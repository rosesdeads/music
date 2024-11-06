<?php
include ("includes/header.php");
?>
<div class="main-disco">

</div>
<div class="main-canciones">
    <h1>Canciones</h1>
    <div class="cancion1">
        <img src="img/cancion1.jpg" alt="cancion1">
        <h3>Agonía</h3>
        <audio controls id="audio">
            <source src="audio/agonico.mp3" type="audio/mp3">
        </audio>
    </div>
    <div class="subir-canciones">
    <a href="subirCanciones.php">Subir Canciones</a>    
    </div>
</div>

<?php
include ("includes/footer.php");
?>