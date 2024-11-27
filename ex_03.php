<?php

function my_pow($nb_a = "txt", $nb_b = "txt")
{
    if (!is_int($nb_a) || !is_int($nb_b) || $nb_b < 0) {
        return null;
    }
    if ($nb_b == 0) {
        return 1;
    }
    return $nb_a * my_pow($nb_a, $nb_b - 1);
}
// $a = ;
// $b = 1;
// echo my_pow($a,$b);
// echo "\n";
// echo pow($a,$b);
