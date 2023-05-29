<?php 
    const COLORS = ['black','brown','red','orange','yellow','green','blue','violet','grey','white'];

    function colorCode(string $color):int{
        $i = array_search($color,COLORS);
        return $i;
    }

    $color = "brown";
    echo colorCode($color);
?>