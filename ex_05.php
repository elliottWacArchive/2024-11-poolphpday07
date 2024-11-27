<?php

function sum_it($nbr = "txt", $it = "txt")
{
    if (!is_int($nbr) || !is_int($it)) {
        return null;
    }
    $res = $nbr;
    while ($it != 0) {
        $res = $res + $it;
        if ($it > 0) {
            $it--;
        } else {
            $it++;
        }
    }
    return $res;
}
