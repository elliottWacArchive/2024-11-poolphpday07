<?php

function str_beautifuler($str = null)
{
    if (!is_string($str)) {
        return null;
    }
    $newstr = "";
    $str = trim($str);
    $strlen = strlen($str);
    for ($i = 0; $i < $strlen; $i++) {
        if ($str[$i] == " ") {
            if ($str[$i + 1] == " ") {
                continue;
            } else {
                $newstr = $newstr . " ";
            }
        } elseif ($i == $strlen - 1 || $str[$i + 1] == " ") {
            $newstr = $newstr . strtoupper($str[$i]);
        } else {
            $newstr = $newstr . $str[$i];
        }
    }
    return $newstr;
}
//echo str_beautifuler("caca    d d  z z zddd d");
