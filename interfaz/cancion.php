<?php

 class cancion{
    private $db;
    private $portada;
    private $titulo;
    private $audio;

    public function __construct($db){
        $this->db=$db;
    }

    public function setPortada($portada){
        $this->portada=$portada;
    }

    public function setTitulo($titulo){
        $this->titulo=$titulo;
    }

    public function setAudio($audio){
        $this->audio=$audio;
    }
     // Método para guardar la canción en la base de datos
    public function guardar(){
    //prepare() es un método de la conexión de base de datos que permite crear una consulta preparada. 
    //Las consultas preparadas son más seguras y previenen inyecciones SQL.
    $smtp = $this->db->prepare("INSERT INTO canciones (portada, titulo, audio, fecha_subida) VALUES (?, ?, ?, NOW())");
    //bind_param() enlaza los valores de las propiedades del objeto 
    //($this->titulo, $this->portada, $this->audio) con los marcadores ? de la consulta preparada.
    $smtp->bind_param("sss", $this->portada, $this->titulo, $this->audio);
    return $smtp->execute();
    //execute() ejecuta la consulta preparada con los valores proporcionados en el paso anterior.
    }

    public function obtenerCanciones(){
        //El método query() de MySQLi ejecuta una consulta SQL directa en la base de datos. 
        $result=$this->db->query("SELECT * FROM canciones ORDER BY fecha_subida DESC");
        //fetch_all(MYSQLI_ASSOC) convierte todos los resultados de la consulta en un array asociativo.
        //MYSQLI_ASSOC indica que cada fila de resultados debe ser un array asociativo, 
        //donde los nombres de las columnas serán las claves del array.
        return $result->fetch_all(MYSQLI_ASSOC);
    }

}

?>