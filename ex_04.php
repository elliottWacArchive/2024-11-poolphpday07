<?php

function my_pow_rec($nb_a = "txt", $nb_b = "txt")
{
    if (!is_int($nb_a) || !is_int($nb_a) || $nb_b < 0) {
        return null;
    }
    if ($nb_b == 0) {
        return 1;
    }
    return $nb_a * my_pow_rec($nb_a, $nb_b - 1);
}
