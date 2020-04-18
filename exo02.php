<?php
function DecodeDNA($gen1, $gen2)
{
    $myDNA = "";
    for ($i = 0; $i < strlen($gen1); $i++) {
        if ($gen1[$i] == $gen2[$i]) {
            $myDNA .= " ";
        } else {
            $myDNA .= "^";
        }
    }
    return $myDNA;
}
echo DecodeDNA('corona', 'coco');

/* Dans la classroom, créer un répertoire exo02 et à l’intérieur.
L'acide désoxyribonucléique ou ADN est une macromolécule biologique présente dans
toutes les cellules. Les molécules d'ADN des cellules vivantes sont formées de deux brins
enroulés l'un autour de l'autre.
Chaque monomère qui le constitue est un nucléotide, lequel est formé d'une base nucléique,
ou base azotée — adénine (A), cytosine (C), guanine (G) ou thymine (T).
Créer une fonction DecodeDNA qui prend en paramètre 2 strings: gen1 et gen2.
Elle doit comparer ces 2 strings et retourne une string comme indiqué ci-dessous.
$gen1 =
$gen2 =
"GAGCCTACTAACGGGAT"
"CATCGTAATGACGGCCT"
Retournera "^ ^ ^
^ ^
^^ " */
