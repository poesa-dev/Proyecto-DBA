<?php

class Auto
{
    // Atributos
    public $marca;
    public $modelo;
    public $color;
    public $imagen;

    // Constructor
    public function __construct($marca, $modelo, $color, $imagen)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->imagen = $imagen;
    }

    // Método para mostrar información
    public function mostrar()
    {
        $tabla = "";

        $tabla .= "<div class='card-auto'>";

        $tabla .= "<h2>" . $this->marca . " " . $this->modelo . "</h2>";

        $tabla .= "<div class='imagen-auto'>";
        $tabla .= "<img src='" . $this->imagen . "' alt='" . $this->marca . "'>";
        $tabla .= "</div>";

        $tabla .= "<p><strong>Marca:</strong> " . $this->marca . "</p>";
        $tabla .= "<p><strong>Modelo:</strong> " . $this->modelo . "</p>";
        $tabla .= "<p><strong>Color:</strong> " . $this->color . "</p>";

        $tabla .= "</div>";

        echo $tabla;
    }
}

?>