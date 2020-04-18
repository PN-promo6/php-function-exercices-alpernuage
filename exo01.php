<?php
function SumAll($number)
{
    $sumNumbers = 0;
    for ($i = 0; $i <= $number; $i++) {
        $sumNumbers += $i;
    }
    return $sumNumbers;
}

echo SumAll(1000);

/* Dans la classroom, créer un répertoire exo01 et à l’intérieur.
Créer une fonction SumAll qui prend en paramètre 1 entier n où n > 1
Elle doit retourner la somme de tous les entiers allant de 1 à n.
Exemple:
SumAll(3) = 1 + 2 + 3 = 6
Question:
Combien de lignes sont exécutées dans votre code si je passe n = 100 ? */
