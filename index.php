<!-- // $_navar='hello';
// echo "fuck the world <br> ";
// $x=true;
// $y=false;
// // echo $x;
// function test ($x){
//     if($x){
//         echo 'True';
//     }
//     else echo 'False';
// }
// // test($y);
//     $x=true;
//     $y=false;
//     echo "true :". $x."false:". $y .  "<br>"; 
//     print "true :". $x."false:". $y .  "<br>"; 
//     $a=15;
//     echo($a%3== 0&& $a%5==0?"true":"false");
//     echo "<br>"; 
//     $age=30;
//     $sexe="f";
//     echo($age>21 && $age<40 && $sexe=='f'?"bonjour vous êtes".$age:"false");
// $i=0;
// do{
//     $random1 =rand(0,10);
//     $random2 =rand(0,10);
//     $random3 =rand(0,10);
//     $i++;
// }while(!($random1%2 == 0 && $random2%2!=0 &&  $random3%2!=0));
// echo $random1. " ".$random2. " ".$random3 ."<br>";
// echo $i;

// $num=rand(111,999);
// while($num!=333){
//     $i++;
//     $num=rand(0,999);
// }
// echo $i;
// for ($i=0; $i <10 ; $i++) { 
//     $tab[$i]=chr(rand(32,));
// }
// $i=0;
// foreach  ($tab as $value) {
//     echo $value;
//     $i++;
//     if($i%50==0){echo "<br>";}
// }
// $s="ga3 jerad wlad l97ab dsfkj dlsfkj sdfl sefjh lqjdfpojo qsdoj qdf";
// ucwords($s);
// for ($i=0; $i < strlen($s); $i++) { 
//     # code...
//     echo $s[$i];
//     if($s[$i]==' '){echo '<br>';}
// }
// $tab=explode(' ',ucwords($s));
// foreach ($tab as $key=> $v) {
//     echo $v;
//     echo "<br>";
// } -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>

<body>
    <h1>Formulaire d'inscription</h1>
    <form action="traitement.php" method="post">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br>
        <label for="filiere">Filière:</label>
        <input type="text" id="filiere" name="filiere" required><br>
        <label for="ville">Ville:</label>
        <input type="text" id="ville" name="ville" required><br>
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>