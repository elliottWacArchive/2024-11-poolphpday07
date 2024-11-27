<?php

function my_facto_rec($nbr = "txt")
{
    if (($nbr < 0) || !is_int($nbr)) {
        return null;
    }
    if ($nbr <= 1) {
        return 1;
    }
    return $nbr * my_facto_rec($nbr - 1);
}
