<?php

function my_pow($nb_a = "txt", $nb_b = "txt")
{
    if (!is_int($nb_a) || !is_int($nb_b) || $nb_b < 0) {
        return null;
    } elseif ($nb_b == 0) {
        return 1;
    } elseif ($nb_a == 0) {
        return 0;
    } else {
        $a = nb_a;
        for ($i = 1; $i < $nb_b; $i++) {
            $nb_a = $nb_a * $a;
        }
    }
    return $nb_a;
}
// $a = ;
// $b = 1;
// echo my_pow($a,$b);
// echo "\n";
// echo pow($a,$b);
