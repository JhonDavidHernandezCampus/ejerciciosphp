<?php 
    declare(strict_types =1);

    $colors = ["Black","Brown","Red","Orange","Yellow","Green","Blue","Violet","Grey","White"];
    function colorCode(string $colorResistencia,array $arrayResistencias):int{
        $valor = 0;
        for($i = 0;$i < count($arrayResistencias);$i++){
            if(strtoupper($arrayResistencias[$i]) == strtoupper($colorResistencia)){
                $valor = $i;
                break;
            }
        } 
        return $valor;

    }

    $color = "White";
    echo colorCode($color,$colors);

?>