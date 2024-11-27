<?php

function my_facto($nbr="txt")
{
    if (($nbr < 0) || !is_int($nbr)) {
        return null;
    }
    $res = $nbr;
    if ($nbr == 0) {
        return 1;
    }
    for($i = 1; $i <= $nbr; $i++) {
        $res = $res * $i;
    }
    return $res;
}
