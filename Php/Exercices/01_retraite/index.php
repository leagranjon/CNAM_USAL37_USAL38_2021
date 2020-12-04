<?php 
/*
L'âge de la retraite est fixé à 55 ans

SI l'âge fourni ($age) est supérieur à l'âge de la retraite ($retraite)
    alors
    afficher (echo) "vous êtes à la retraite depuis X années"

SINON SI l'âge fourni ($age) est inférieur à l'âge de la retraite ($retraite)
    alors   
    afficher (echo) "Il vous reste X années  avant la retraite"

SINON 
    alors
    afficher (echo) "La retraite c'est cette année"


*/

$retraite = 55;

$age = 60;


if($age > $retraite) {

    $difference = $age - $retraite
    echo "vous êtes à la retraite depuis $difference années";
}
if else($age < $retraite) {
    
    $difference = $retraite - $age
    echo "il vous reste $différence années avant la retraite";
}
else {
    echo "la retraite c'est cette années";
}
