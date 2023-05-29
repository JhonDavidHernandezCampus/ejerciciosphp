<?php

//dos kilosegundos (eso es dos mil segundos).
// mil millones de segundos, celebrarían su aniversario de un gigasegundo.
ini_set('display_errors', 1);
//declare(strict_types=1);

$fecha = new DateTimeImmutable("2023-05-28 15:30:00");

function from(DateTimeImmutable $date): DateTimeImmutable{
    return $date->modify("+1000000000 seconds");
}

var_dump( from($fecha));

?>