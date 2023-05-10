<?php
function sumaDigitos($numero) {
  $suma = 0; // Variable para almacenar la suma de los dígitos
  $numero = abs($numero); // Convertir el número en positivo

  while ($numero > 0) { // Mientras el número sea mayor a 0
    $digito = $numero % 10; // Obtener el último dígito del número
    $suma += $digito; // Agregar el dígito a la suma
    $numero = (int)($numero / 10); // Eliminar el último dígito del número
  }

  return $suma; // Devolver la suma de los dígitos
}
$numero = 9110610;
$suma = sumaDigitos($numero);
echo "La suma de los digitos de $numero es $suma"; // Imprime "La suma de los digitos"

?>