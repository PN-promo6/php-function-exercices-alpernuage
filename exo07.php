<?php
function SmartDecrypt($tab, $message)
{
    $tab = array_flip(array(
        "A" => "A",
        "B" => "Z",
        "C" => "E",
        "D" => "R",
        "E" => "T",
        "F" => "Y",
        "G" => "U",
        "H" => "I",
        "I" => "O",
        "J" => "P",
        "K" => "Q",
        "L" => "S",
        "M" => "D",
        "N" => "F",
        "O" => "G",
        "P" => "H",
        "Q" => "J",
        "R" => "K",
        "S" => "L",
        "T" => "M",
        "U" => "W",
        "V" => "X",
        "W" => "C",
        "X" => "V",
        "Y" => "B",
        "Z" => "N",
        " " => " "
    ));

    for ($i = 0; $i < strlen($message); $i++) {
        $currentLetter = $message[$i];
        echo $tab[$currentLetter];
    }
}

$messageCrypt = "DAOMKT EGKZTAW LWK WF AKZKT HTKEIT MTFAOM TF LGF ZTE WF YKGDAUT DAOMKT KTFAKR HAK S GRTWK ASSTEIT SWO MOFM A HTW HKTL ET SAFUAUT TI ZGFPGWK DGFLOTWK RW EGKZTAW JWT XGWL TMTL PGSO JWT XGWL DT LTDZSTN ZTAW LAFL DTFMOK LO XGMKT KADAUT LT KAHHGKMT A XGMKT TDHSWDAUT XGWL TMTL ST HITFOV RTL IGMTL RT ETL ZGOL A ETL DGML ST EGKZTAW FT LT LTFM HAL RT PGOT TM HGWK DGFMKTK LA ZTSST XGOV OS GWXKT WF SAKUT ZTE SAOLLT MGDZTK LA HKGOT ST KTFAKR L TF LAOLOM TM ROM DGF ZGF DGFLOTWK AHHKTFTN JWT MGWM YSAMMTWK XOM AWV RTHTFL RT ETSWO JWO S TEGWMT ETMMT STEGF XAWM ZOTF WF YKGDAUT LAFL RGWMT ST EGKZTAW IGFMTWV TM EGFYWL PWKA DAOL WF HTW MAKR JW GF FT S B HKTFRKAOM HSWL";

echo SmartDecrypt($tab, $messageCrypt);

/* Dans la classroom, créer un répertoire exo07 et à l’intérieur.
Dans l’exercice 05, le tableau de correspondance pour le cryptage vous était fourni.
ABCDEFGHIJKLMNOPQRSTUVWXYZ
AZERTYUIOPQSDFGHJKLMWXCVBN
Ce qui permet de facilement décrypter le message EGWEGW qui une fois décrypté devient COUCOU.
Votre fonction SmartDecrypt marche donc uniquement si on connait ce tableau de correspondance...
Créer la fonction SmartSmartDecrypt qui “tente” de décrypter au mieux le même message mais SANS CE TABLEAU DE
CORRESPONDANCE. Astuce: https://pixees.fr/projet-cryptographie-seance-4-casser-le-chiffrement-mono-alphabetique/
DAOMKT EGKZTAW LWK WF AKZKT HTKEIT MTFAOM TF LGF ZTE WF YKGDAUT DAOMKT KTFAKR HAK S GRTWK ASSTEIT SWO MOFM A HTW HKTL ET
SAFUAUT TI ZGFPGWK DGFLOTWK RW EGKZTAW JWT XGWL TMTL PGSO JWT XGWL DT LTDZSTN ZTAW LAFL DTFMOK LO XGMKT KADAUT LT KAHHGKMT A
XGMKT TDHSWDAUT XGWL TMTL ST HITFOV RTL IGMTL RT ETL ZGOL A ETL DGML ST EGKZTAW FT LT LTFM HAL RT PGOT TM HGWK DGFMKTK LA ZTSST
XGOV OS GWXKT WF SAKUT ZTE SAOLLT MGDZTK LA HKGOT ST KTFAKR L TF LAOLOM TM ROM DGF ZGF DGFLOTWK AHHKTFTN JWT MGWM YSAMMTWK
XOM AWV RTHTFL RT ETSWO JWO S TEGWMT ETMMT STEGF XAWM ZOTF WF YKGDAUT LAFL RGWMT ST EGKZTAW IGFMTWV TM EGFYWL PWKA DAOL WF
HTW MAKR JW GF FT S B HKTFRKAOM HSWL */
