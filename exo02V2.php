<?php
function DecodeDNA($gen1, $gen2)
{
    $myDNA = "";
    $length = max(strlen($gen1), strlen($gen2));
    for ($i = 0; $i < $length; $i++) {
        $charInGen1 = $i < strlen($gen1) ? $gen1[$i] : " ";
        $charInGen2 = $i < strlen($gen2) ? $gen2[$i] : " ";
        if ($charInGen1 == $charInGen2) {
            $myDNA .= " ";
        } else {
            $myDNA .= "^";
        }
    }
    return $myDNA;
}
echo DecodeDNA('coronaaaaaaaaaaaaaaaaaaaa', 'coco');

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
