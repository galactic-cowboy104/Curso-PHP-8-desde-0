<!DOCTYPE html>
<html lang="es-MX">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Obteniendo día y fecha actual en formato ES</title>

    </head>

    <body>

        <?php

            date_default_timezone_set("America/Mexico_City");

            function fecha_espanol_larga() {

                $fecha_dia = date("d");
                $fecha_mes = date("m");
                $fecha_ano = date("Y");

                $dias_semana = [
                    "Monday" => "Lunes",
                    "Tuesday" => "Martes",
                    "Wednesday" => "Miércoles",
                    "Thursday" => "Jueves",
                    "Friday" => "Viernes",
                    "Saturday" => "Sábado",
                    "Sunday" => "Domingo"
                ];

                $meses_ano = [
                    "01" => "Enero",
                    "02" => "Febrero",
                    "03" => "Marzo",
                    "04" => "Abril",
                    "05" => "Mayo",
                    "06" => "Junio",
                    "07" => "Julio",
                    "08" => "Agosto",
                    "09" => "Septiembre",
                    "10" => "Octubre",
                    "11" => "Noviembre",
                    "12" => "Diciembre"
                ];

                $fecha_final = $dias_semana[date("l")]." ".$fecha_dia." de ".$meses_ano[$fecha_mes]." del ".$fecha_ano;

                return $fecha_final;

            }

            function fecha_espanol_corta($fecha = "") {

                if($fecha == "") {
                    $fecha = date("d-m-Y");
                } else {
                    $fecha = date("d-m-Y", strtotime($fecha));
                }

                $fecha=explode("-", $fecha);

                $fecha_dia = $fecha[0];
                $fecha_mes = $fecha[1];
                $fecha_ano = $fecha[2];

                $meses_ano = [
                    "01" => "Enero",
                    "02" => "Febrero",
                    "03" => "Marzo",
                    "04" => "Abril",
                    "05" => "Mayo",
                    "06" => "Junio",
                    "07" => "Julio",
                    "08" => "Agosto",
                    "09" => "Septiembre",
                    "10" => "Octubre",
                    "11" => "Noviembre",
                    "12" => "Diciembre"
                ];

                $fecha_final = $fecha_dia." de ".$meses_ano[$fecha_mes]." del ".$fecha_ano;

                return $fecha_final;

            }

            echo "<h1>".fecha_espanol_larga()."</h1>";
            echo "<h1>".fecha_espanol_corta("2024/05/02")."</h1>";

        ?>
        
    </body>

</html>