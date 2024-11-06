<?php
$servidor="localhost";
$usuario="root";
$contrasena="";
$baseDatos="mensajes";

$conexion=new mysqli($servidor, $usuario, $contrasena, $baseDatos);

if($conexion->connect_error){
    exit();    
}
//echo "Conexion creada correctamente";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $correo=$_POST["correo"];
    $telefono=$_POST["telefono"];
    $mensaje=$_POST["mensaje"];
    //Limpiar datos para evitar inyecciones SQL (recomendado usar sentencias preparadas)
    $nombre=mysqli_real_escape_string($conexion,$nombre);
    $apellidos=mysqli_real_escape_string($conexion,$apellidos);
    $correo=mysqli_real_escape_string($conexion,$correo);
    $telefono=mysqli_real_escape_string($conexion,$telefono);
    $mensaje=mysqli_real_escape_string($conexion, $mensaje);
     // Crear la consulta SQL
     $sql="INSERT INTO correos (nombre,apellidos,correo,telefono,mensaje, fecha) VALUES ('$nombre','$apellidos','$correo','$telefono', '$mensaje', NOW())";
    // Ejecutar la consulta
    $resultado = mysqli_query($conexion, $sql);
    
    if ($resultado === TRUE) {
    echo "<p style=text-align:center;>Nuevo registro creado exitosamente!!</p>";
    } else {
    $error = mysqli_error($conexion);
    echo "<p style=text-align:center;>Error: $error</p><br>";}
    }
    

?>