<?php

function is_prime($nbr = "txt")
{
    if (!is_int($nbr)) {
        return null;
    }
    if ($nbr < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($nbr); $i++) {
        if ($nbr % $i == 0) {
            return false;
        }
    }
    return true;
}
