<?php
include( 'conexion.php');
include ('cancion.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $cancion=new cancion($db);

    $titulo=$_POST["titulo"];
    $portada=$_FILES["portada"];
    $audio=$_FILES["audio"];
//basename() es una función de PHP que extrae el nombre del archivo de una ruta completa.
    $portadaPath="../archivosSubidos".basename($portada["name"]);
    $audioPath="../archivosSubidos".basename($audio["name"]);
//La función move_uploaded_file() mueve cada archivo desde su ubicación temporal 
//(donde PHP lo almacena por defecto al ser subido) a la ruta final 
//($portadaPath para la imagen y $audioPath para el audio).
    if(move_uploaded_file($portada["tmp_name"], $portadaPath)&& move_uploaded_file($audio["tmp_name"],$audioPath)){
    //Estos métodos asignan los valores recibidos a las propiedades internas 
    //de la instancia de Cancion:
    //$titulo se asigna al título de la canción.
    //$portadaPath (la ruta final de la imagen de portada) se asigna a la propiedad portada.
    //$audioPath (la ruta final del archivo de audio) se asigna a la propiedad audio.
        $cancion->setPortada($portadaPath);
        $cancion->setTitulo($titulo);
        $cancion->setAudio($audioPath);
        if($cancion->guardar()){
           // echo "Cancion subida con exito";
        }else{
            echo"Error al subir canción";
        }
    }
        else{
            echo "Error al subir archivos";
        
    }
}
?>

    <div class="main-subir-canciones" >

    </div>
    <div class="form-subir" >
      <form action="" method="post" enctype="multipart/form-data">
    <label for="titulo">Título:</label><br>
    <input type="text" id="titulo" name="titulo" required><br><br>
    
    <label for="portada">Portada:</label><br>
    <input type="file" id="portada" name="portada" accept="image/*" required><br><br>
    
    <label for="audio">Archivo de Audio:</label><br>
    <input type="file" id="audio" name="audio" accept="audio/*" required><br><br>
    
    <button type="submit">Subir Canción</button>
    </form>  
    </div>
    

