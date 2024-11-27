<?php

function str_to_wordtab($str = 0, $sep = '')
{
    if (!is_string($str) || !is_string($sep)) {
        return null;
    }
    if ($sep == '') {
        return array($str);
    }
    return explode($sep, $str);
}
