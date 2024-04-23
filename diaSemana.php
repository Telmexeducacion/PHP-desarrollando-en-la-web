<?php

    $diaSemana = "Lunes";

        switch ($diaSemana) {
            case "Lunes":
                echo "Hoy es $diaSemana. ¡Ánimo para empezar la semana!";
                break;
            case "Martes":
            case "Miércoles":
            case "Jueves":
            case "Viernes":
                echo "Hoy es $diaSemana. ¡A seguir adelante!";
                break;
            case "Sábado":
            case "Domingo":
                echo "Hoy es $diaSemana. ¡Disfruta del fin de semana!";
                break;
            default:
                echo "Hoy es $diaSemana. No es un día válido.";
        }



?>
