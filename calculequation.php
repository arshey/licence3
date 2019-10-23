<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="a" id="" placeholder="Entrez a "> <br>
     <input type="text" name="b" id="" placeholder="Entrez b "> <br>
      <input type="text" name="c" id="" placeholder="Entrez c "> <br>
      <input type="submit" name="submit" value="Envoyer">
</form>
    
</body>
</html>


<?php
    error_reporting(~E_NOTICE);
    if ($_POST["submit"]) {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];
    }

// Resolution d'équation de second degre
// ▲ = b*b -  4ac
// si ▲ < 0 pas de solution;
// si ▲ = 0 une solution x = -b/(2a)
// si ▲ > 0 -> 2 solution x1 = (-b-√Δ)/(2a) | x1 = (-b+√Δ)/(2a)
function calculEquation($a, $b, $c){

    $delta = $b*$b - 4*$a*$c;

    if ($delta < 0) {
        echo "pas de solution";
    } else if ($delta == 0){
        $x = -$b/(2*$a);

        echo "vous avez une seule solution et c'est : ".$x;
    } else if ($delta > 0){
        $x1 = (-$b -sqrt($delta))/(2*$a);
        $x2 = (-$b +sqrt($delta))/(2*$a);
        echo "Nous avons 2 solution ".$x1." et ".$x2;
    }
}
 calculEquation($a, $b, $c);
?>
