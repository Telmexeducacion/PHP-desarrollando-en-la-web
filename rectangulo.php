<?php


// Definimos las dimensiones del rectángulo
  $base = 10;
  $altura = 6;

// Calculamos el área del rectángulo usando un operador aritmético
  $area = $base * $altura;

// Comparamos el área con 50 usando un operador de comparación
  $esGrande = $area > 50;

// Imprimimos el área calculada
  echo "El área del rectángulo es: " . $area . "<br>";

// Usamos un operador lógico para decidir si es un rectángulo grande
  if ($esGrande) {
      echo "Es un rectángulo grande.";
  } else {
      echo "No es un rectángulo grande.";
  }

?>
