<?php
  include "./lib/cuadrado.php";
  include "./lib/triangulo.php";
  include "./lib/circulo.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Primera Clase</title>
  </head>
  <body>
    <?php
      $cuadrado= new Cuadrado(2);
      $cuadrado->setLado(5);
      $devolver=$cuadrado->getLado();
      $area=$cuadrado->calcularArea();
      $perimetro=$cuadrado->calcularPerimetro();


      echo "<b>CUADRADO</b>";
      echo "<br>";
      echo "El lado es: ".$devolver;
      echo "<br>";
      echo "Su area es: ".$area;
      echo "<br>";
      echo "Su perimetro es: ".$perimetro;

      //si pasamos dos variables dentro del contruct, tenemos que poner dos numeros dentro del objeto.
      $triangulo= new Triangulo(0,0);
      $triangulo->setBase(5.2);
      $triangulo->setAltura(3);
      $devolverBase=$triangulo->getBase();
      $devolverAltura=$triangulo->getAltura();
      $area=$triangulo->calcularAreaTriangulo();
      $perimetro=$triangulo->calcularPerimetroTriangulo();

      echo "<br><br>";
      echo "<b>TRIANGULO</b>";
      echo "<br>";
      echo "Su base es: ".$devolverBase;
      echo "<br>";
      echo "Su altura es: ".$devolverAltura;
      echo "<br>";
      echo "Su area es: ".$area;
      echo "<br>";
      echo "Su perimetro es: ".$perimetro;


      $circulo= new Circulo(1);
      $circulo->setRadioCirculo(3);
      $devolverRadio=$circulo->getRadioCirculo();
      $area=$circulo->calcularAreaCirculo();
      $perimetro=$circulo->calcularPerimetroCirculo();

      echo "<br><br>";
      echo "<b>CIRCULO</b>";
      echo "<br>";
      echo "Su radio es: ".$devolverRadio;
      echo "<br>";
      echo "Su area es: ".$area;
      echo "<br>";
      echo "Su perimetro es: ".$perimetro;
    ?>
  </body>
</html>
