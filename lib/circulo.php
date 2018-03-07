<?php
/**
 *
 */
class Circulo
{

  private $radio=0;
  private $numeroPi=3.14;

  function __construct($radio)
  {
    $this->radio=$radio;
  }

  public function setRadioCirculo($radio)
  {
    $this->radio=$radio;
    return $this;
  }

  public function getRadioCirculo()
  {
    return $this->radio;
  }

  public function calcularAreaCirculo()
  {
  $area=0;

  $area=$this->radio * $this->numeroPi;
  return $area;
  }

  public function calcularPerimetroCirculo()
  {
    $perimetro=0;
    $perimetro=$this->radio * $this->numeroPi * $this->radio;
    return $perimetro;
  }
}

 ?>
