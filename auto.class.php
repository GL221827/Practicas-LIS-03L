<?php
//Definición de la clase
class auto {
    // Propiedades de la clase auto
    private $marca;
    private $modelo;
    private $color;
    private $image;

    // Método constructor
    function __construct($marca = 'Honda', $modelo = 'Civic', $color = 'Gris', $image = 'img/hondacivic.jpg') {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->image = $image;
    }

    // Método para mostrar el auto
    function mostrar() {
        $tabla = "<div class='col-4 mb-3'>";
        $tabla .= "<div class='card'>";
        $tabla .= "<div class='card-header'>" . $this->marca . "</div>";
        $tabla .= "<img class='card-img-top' src='" . $this->image . "' alt='Card image'>";
        $tabla .= "<div class='card-body'>";
        $tabla .= "<h5 class='card-title'>" . $this->marca . " " . $this->modelo . "</h5>";
        $tabla .= "<p class='card-text'> MODELO: " . $this->modelo . "<br>";
        $tabla .= "COLOR: " . $this->color . "</p>";
        $tabla .= "</div>";
        $tabla .= "</div>";
        $tabla .= "</div>";
        echo $tabla;
    }

    // Método para obtener la marca del auto
    function getMarca() {
        return $this->marca;
    }

    
}

?>