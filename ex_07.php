<?php

function str_to_wordtab($str = 0, $sep = '')
{
    if (!is_string($str) || !is_string($sep)) {
        return null;
    }
    if ($sep == '') {
        // return array($str);
        return null;
    }
    return explode($sep, $str); // si il repasse pas gerer le cas ou le tab est vide
}
//print_r(str_to_wordtab(""," "));
