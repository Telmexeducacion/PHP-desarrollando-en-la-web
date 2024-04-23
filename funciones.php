        <?php

                 // Función para calcular el área de un círculo
                function calcularAreaCirculo($radio) {
                    return M_PI * $radio * $radio;
                }

                // Función para calcular el perímetro de un círculo
                function calcularPerimetroCirculo($radio) {
                    return 2 * M_PI * $radio;
                }

                // Función para calcular el área de un cuadrado
                function calcularAreaCuadrado($lado) {
                    return $lado * $lado;
                }

                // Función para calcular el perímetro de un cuadrado
                function calcularPerimetroCuadrado($lado) {
                    return 4 * $lado;
                }

                // Función para calcular el área de un triángulo
                function calcularAreaTriangulo($base, $altura) {
                    return ($base * $altura) / 2;
                }

                // Función para calcular el perímetro de un triángulo
                function calcularPerimetroTriangulo($lado1, $lado2, $lado3) {
                    return $lado1 + $lado2 + $lado3;
                }

                // Función para determinar qué forma geométrica calcular según la opción seleccionada
                function calcularForma($opcion, $medidas) {
                    if ($opcion == "circulo") {
                        $radio = $medidas[0];
                        $area = calcularAreaCirculo($radio);
                        $perimetro = calcularPerimetroCirculo($radio);
                        echo "Círculo: Área = $area, Perímetro = $perimetro";
                    } else if ($opcion == "cuadrado") {
                        $lado = $medidas[0];
                        $area = calcularAreaCuadrado($lado);
                        $perimetro = calcularPerimetroCuadrado($lado);
                        echo "Cuadrado: Área = $area, Perímetro = $perimetro";
                    } else if ($opcion == "triangulo") {
                        $base = $medidas[0];
                        $altura = $medidas[1];
                        $lado1 = $medidas[2];
                        $lado2 = $medidas[3];
                        $lado3 = $medidas[4];
                        $area = calcularAreaTriangulo($base, $altura);
                        $perimetro = calcularPerimetroTriangulo($lado1, $lado2, $lado3);
                        echo "Triángulo: Área = $area, Perímetro = $perimetro";
                    } else {
                        echo "Opción inválida.";
                    }
                }

                // Ejemplo de uso: Calcular área y perímetro de un círculo
                calcularForma("circulo", array(5));

                // Ejemplo de uso: Calcular área y perímetro de un cuadrado
                calcularForma("cuadrado", array(4));

                // Ejemplo de uso: Calcular área y perímetro de un triángulo
                calcularForma("triangulo", array(6, 4, 5, 7, 8));

        ?>

