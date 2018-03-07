<?php
/**
 *
 */
class Cuadrado
{
  //propiedades
  private $lado=4;

  //constructor
  public function __construct($lado){
    $this->lado=$lado;
}
//Setters y Getters

    public function getLado()
    {
        return $this->lado;
    }

    public function setLado($lado)
    {
        $this->lado = $lado;

        return $this;
    }

    public function calcularArea()
    {
      $area=0;
      $area=$this->lado * $this->lado;
      return $area;
    }

    public function calcularPerimetro()
    {
      $perimetro=0;
      $perimetro=$this->lado * 4;
      return $perimetro;
    }
  }

?>
