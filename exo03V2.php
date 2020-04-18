<?php

function TesterSiJePeuxEcrireAvec($magazine, $message)
{
    for ($i = 0; $i < strlen($message); $i++) {
        $lettreCouranteDuMessage = $message[$i];
        if ($lettreCouranteDuMessage == " ") {
            continue;
        }
        $lettrePresente = false;
        for ($j = 0; $j < strlen($magazine); $j++) {
            $lettreCouranteDuMagazine = $magazine[$j];
            if ($lettreCouranteDuMessage == $lettreCouranteDuMagazine) {
                $lettrePresente = true;
                $magazine[$j] = " ";
                break;
            }
        }
        if ($lettrePresente == false) {
            return false;
        }
    }
    return true;
}

$magazine = "bonjour aujourd'hui il fait beau";
$lettre = "content content";

if (TesterSiJePeuxEcrireAvec($magazine, $lettre)) {
    echo "tu peux l'ecrire";
} else {
    echo "tu peux pas l'ecrire";
}

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
