<?php
$pagina="musica";
include ('includes/header.php');
include ('interfaz/conexion.php');
include ('interfaz/cancion.php');

$cancion = new Cancion($db);
$canciones = $cancion->obtenerCanciones();
?>
<div class="main-disco">
</div>
<div class="container-album">
        <h1>Lista de Canciones</h1>
    <div class="album">
       <?php foreach ($canciones as $cancion): ?>
        <div class="main-canciones">
            <img src="<?php echo htmlspecialchars($cancion['portada']); ?>" alt="Portada">
            <h3><?php echo htmlspecialchars($cancion['titulo']); ?></h3>
            <audio controls>
                <source src="<?php echo htmlspecialchars($cancion['audio']); ?>" type="audio/mpeg">
                Tu navegador no soporta la reproducción de audio.
            </audio>
        </div>
        
   
    <?php endforeach; ?> 
    </div>
    <div class="subir-canciones">
    <a href="subirCanciones.php" >Subir Canciones</a>    
    </div>
</div>

<?php
include ('includes/footer.php');
?>