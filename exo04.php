<?php
function sum($arrayOfNumbers)
{
    $sum = 0;
    for ($i = 0; $i < count($arrayOfNumbers); $i++) {
        # code...
        $currentElement = $arrayOfNumbers[$i];

        if (is_array($currentElement)) {
            $sum = $sum + sum($currentElement);
        } else {
            $sum = $sum + $currentElement;
        }
    }
    return $sum;
}

$numbers = array(1, 2, 3, array(1, 2, 3, array(1, 2, 3)));
$result = sum($numbers);
echo $result;

/* 
Dans la classroom, créer un répertoire exo04 et à l’intérieur.
Vous devez écrire une fonction Sum qui prend 1 array en paramètre.
Cette méthode doit être capable de faire la somme des entiers de cet array.
Attention l’array peut contenir d’autres array. */
