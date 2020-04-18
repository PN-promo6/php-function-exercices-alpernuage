
<?php

function CanWrite($magazine, $messageToWrite)
{
    $nbOccurenceByLetter = array();
    for ($i = 0; $i < strlen($magazine); $i++) {
        $currentLetter = $magazine[$i];
        if (array_key_exists($currentLetter, $nbOccurenceByLetter)) {
            $nbOccurenceByLetter[$currentLetter] += 1;
        } else {
            $nbOccurenceByLetter[$currentLetter] = 1;
        }
    }
    for ($i = 0; $i < strlen($messageToWrite); $i++) {
        $letterToWrite = $messageToWrite[$i];
        if (!array_key_exists($letterToWrite, $nbOccurenceByLetter)) {
            return false;
        }
        if ($nbOccurenceByLetter[$letterToWrite] > 0) {
            --$nbOccurenceByLetter[$letterToWrite];
        } else {
            return false;
        }
    }
    return true;
}

if (CanWrite("aba", "aaa")) {
    echo "tu peux ecrire ta lettre";
} else {
    echo "tu ne peux ecrire ta lettre";
}
echo "\n--------------------------\n";
echo CanWrite("bonjour", "a"); // returns false 
echo "\n--------------------------\n";
echo CanWrite("bonjour, je suis content", "jour j"); // returns true
echo "\n--------------------------\n";

/* Dans la classroom, créer un répertoire exo03 et à l’intérieur.
Vous devez écrire une fonction CanWrite qui prend 2 strings en paramètre.
Une première string magazine qui contient toutes le contenu du magazine.
Une deuxième string letter qui contient le message de la lettre de rançon.
Chaque exemplaire de lettre contenu dans le magazine ne peut être utilisé qu'une seule fois.
La fonction retournera un booléen: true si la lettre de rançon peut être écrite avec les lettres du
magazine sinon elle retournera false.
Exemples:
CanWrite("aba", "aa"); // returns true
CanWrite("bonjour", "a"); // returns false
CanWrite("bonjour, je suis content", "jour j"); // returns true */
