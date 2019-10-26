<?php
$hr = "<hr>";
$br = "<br>";
//------------------- TABLEAU -------------------


//  Tableau associatif
$identityA = array(
//   clef       => valeur
    'id'        => '12',
    'nom'       => 'Vince',
    'prenom'    => 'Carter',
    'age'       => 20
);
$identityB = array(
//   clef       => valeur
    'id'        => '38',
    'nom'       => 'kobe',
    'prenom'    => 'bryan',
    'age'       => 23
);

echo "Bonjour le nom de A est ". $identityA["nom"]." son prenom ". $identityA["prenom"]. " ayant pour âge ". $identityA["age"]. " ans";

echo $br;
//  Tableau numeroté / indicé
$identityC = array('9', 'Nicolas', 'Anderson', 24);

echo "Bonjour le nom de C est ". $identityC[1]." son prenom ". $identityC[2]. " ayant pour âge ". $identityC[3]. " ans";

echo $hr;

for ($i=1; $i < 4; $i++) { 
    echo $identityC[$i].$br;
}

echo $hr;

foreach ($identityA as $identite) {
    echo $identite.$br;
}

//------------------- FONCTION -------------------

function hello($prenom){
    echo "Hello ".$prenom."! <br>";
}

echo $hr;

hello("Vincent");
echo $br;
hello("Nadege");

echo $hr;

function formule($a, $b){
    $result = $a * $b;
    $result /= 5;
    $result = $a + ($a-$b);
    return $result;
}

$temp = formule(52, 74);
echo $temp;

echo $hr;


//------------------- FONCTION NATIVES -------------------
$phrase = "Eh bien ica nous allons mettre en gros du n'importe quoi?";
$lol = 123456789012345678901234567890;
//var_dump
//strlen

echo $phrase;
echo $br;
echo str_replace('ica', 'ici', $phrase);
echo $br;
echo rand(1, 6);
