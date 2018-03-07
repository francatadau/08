<?php
/**
 *
 */
class Triangulo
{
  private $base=0;
  private $altura=0;

  function __construct($base,$altura)
  {
    $this->base=$base;
    $this->altura=$altura;
  }

  public function getBase(){
    return $this->base;
  }

  public function setBase($base)
  {
    $this->base=$base;

    return $this;
  }

  public function getAltura(){
    return $this->altura;
  }

  public function setAltura($altura)
  {
    $this->altura=$altura;

    return $this;
  }

  public function calcularAreaTriangulo(){
    $area=0;
    $area=$this->base * $this->altura / 2;
    return $area;
  }

  public function calcularPerimetroTriangulo(){
    $perimetro=0;
    $perimetro=$this->base * 4;
    return $perimetro;
  }


}

 ?>
