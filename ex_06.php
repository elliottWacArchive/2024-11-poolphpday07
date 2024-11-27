<?php

function sum_rec($nbr = "txt", $it = "txt")
{
    if (!is_int($nbr) || !is_int($it)) {
        return null;
    }
    if ($it == 0) {
        return $nbr;
    }
    if ($it > 0) {
        return sum_rec($nbr, $it - 1) + $it;
    } else {
        return sum_rec($nbr, $it + 1) + $it;
    }
}
