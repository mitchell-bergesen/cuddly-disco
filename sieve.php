<?php


function sieve($int){
    $result = array();
    $i = 0;
    while ($i < $int){

        if(!in_array(gmp_nextprime($i), $result)) {
            if(gmp_nextprime($i) <= $int){
                $result[] = gmp_strval(gmp_nextprime($i));
            }
        }
        $i++;
    }
    return $result;
}

