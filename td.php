<?php
    function pgcd( $a , $b ){
        if (( $a <= 0 ) || ( $b <= 0 ))
        return ("Veuillez passer 2 nombres strictement positifs"); 
        while ($b > 0) 
        { 
        $r = $a % $b; 
        $a = $b; 
        $b = $r; 
        } 
        return $a; 
    }
echo pgcd(793,772);
