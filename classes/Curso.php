<?php

namespace App;

class Curso{

    public $cod_curso;
    public $nombre_curso;
    public $descripcion;
    public $estado;
    

    public function __construct($args = []){
        $this->cod_curso = $args =['cod_curso']?? '';
        $this->nombre_curso = $args =['nombre_curso']?? '';
        $this->descripcion = $args =['descripcion']?? '';
        $this->estado = $args =['estado']?? '';

    }
    
}