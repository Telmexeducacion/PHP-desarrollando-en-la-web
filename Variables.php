        <?php

            // Hola Mundo en PHP
            echo "¡Hola Mundo!<br>";

            // Números (integer y float)
            $numero_entero = 10;
            $numero_decimal = 3.14;
            echo "Número entero: " . $numero_entero . "<br>";
            echo "Número decimal: " . $numero_decimal . "<br>";

            // Cadena de texto
            $nombre = "Juan";
            echo "¡Hola, $nombre!<br>";

            // Booleano
            $verdadero = true;
            $falso = false;
            echo "¿Es verdadero? " . ($verdadero ? 'Sí' : 'No') . "<br>";
            echo "¿Es falso? " . ($falso ? 'Sí' : 'No') . "<br>";

            // NULL
            $variable_nula = null;
            echo "Variable nula: " . var_export($variable_nula, true) . "<br>";

            // Array
            $colores = array("rojo", "verde", "azul");
            echo "Colores: ";
            print_r($colores);

        ?>
