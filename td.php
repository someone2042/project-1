<?php
    // function pgcd( $a , $b ){
    //     if (( $a <= 0 ) || ( $b <= 0 ))
    //     return ("Veuillez passer 2 nombres strictement positifs"); 
    //     while ($b > 0) 
    //     { 
    //     $r = $a % $b; 
    //     $a = $b; 
    //     $b = $r; 
    //     } 
    //     return $a; 
    // }
// echo pgcd(793,772);
$nom1='dsdfkljsfk sdfsdffgds';
$nom2='dsdfkljs zut df sdfsdfs';
$tab1=explode(' ',$nom1);
$tab2=explode(' ',$nom2);
// echo $tab1[0];
// for ($i=0; $i <20-strlen($tab1[0]) ; $i++) { 
//     echo '_';
// }
// echo $tab1[1];
// echo "<br>";
// echo $tab2[0];
// for ($i=0; $i <20-strlen($tab2[0]) ; $i++) { 
//     echo '_';
// }
$nom3='zut';
// if(substr_count($nom1,$nom3)=0){
//     echo $nom1;
// }
// echo stristr($nom1,$nom3)?'exist':$nom1;
if(strpos($nom1,$nom3)){
    echo 'exist';
}
else{
    echo $nom1;
}

