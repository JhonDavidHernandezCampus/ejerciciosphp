<?php

declare(strict_types=1);

    $cadena1 = "CATCGTAATGACGGDCTS";
    $cadena2 = "CATCGTAATGACGGCCTS";


        function distance(string $strandA, string $strandB): int{
            if(strlen($strandA)!==strlen($strandB)){
                throw new \InvalidArgumentException('DNA strands must be of equal length.');
            }
            return  (levenshtein($strandA,$strandB));
        }
        echo distance($cadena1,$cadena2);

?>