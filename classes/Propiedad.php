<?php

namespace App;

class Propiedad{

    public $cod_propiedad;
    public $precio;
    public $ubicacion;
    public $tamano;
    public $imagen;
    public $descripcion;
    public $id_administrador;

    public function __construct($args = []){
        $this->cod_propiedad = $args =['cod_propiedad']?? '';
        $this->precio = $args =['precio']?? '';
        $this->ubicacion = $args =['ubicacion']?? '';
        $this->tamano = $args =['tamano']?? '';
        $this->imagen = $args =['imagen']?? '';
        $this->descripcion = $args =['descripcion']?? '';
        $this->id_administrador = $args =['id_administrador']?? '';

    }
    
}