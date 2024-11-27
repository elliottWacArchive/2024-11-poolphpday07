<?php

function my_pow($nb_a = "txt", $nb_b = "txt")
{
    if (!is_int($nb_a) || !is_int($nb_a) || $nb_b < 0) {
        return null;
    }
    if ($nb_b == 0) {
        return 1;
    }
    $res = $nb_a;
    for ($i = 1; $i < $nb_b; $i++) {
        $res = $res * $nb_a;
    }
    return $res;
}

$a = -19;
$b = -20;
echo my_pow($a,$b);
echo "\n";
// echo pow($a,$b);