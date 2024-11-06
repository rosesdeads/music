<?php
function obtenerTitulo($pagina){
    switch($pagina){
        case "index":
            return " - Inicio";
        case "biografia":
            return " - Biografía";
        case "musica":
            return " - Musica";
        case  "contacto":
            return " - Contacto";
        case "subir":
            return " - Subir";
        default:
            return "Página errónea";

    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RosesDeads<?php echo obtenerTitulo($pagina); ?></title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <div class="logo">
        <img src="img/logo.png" alt="logo">
        </div>
        <div class="nav">
            <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="biografia.php">Bio</a></li>
                <li><a href="mostrarCanciones.php">Música</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
            </nav>
        </div>
    </header>

    </body>
    </html>
