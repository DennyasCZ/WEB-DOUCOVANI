<?php
// Verzování //
    $production = false;

    if ($production == false){
        $verze = time();
    } else {
        $verze = "1.0";
    }
// Funkce //
require_once("scripts.php");
// Hlavní menu //
$menu = [
    [
        "link"=>"/WEB-DOUCOVANI/index.php",
        "name"=>"Domů",
        "tooltip"=> "Domů tooltip"
    ],
    [
        "link"=>"/WEB-DOUCOVANI/autori.php",
        "name"=>"Autoři",
        "tooltip"=> "Autoři tooltip"
    ],
    [
        "link"=>"/WEB-DOUCOVANI/o-nas.php",
        "name"=>"O nás",
        "tooltip"=> "O nás tooltip"
    ],
    [
        "link"=>"/WEB-DOUCOVANI/kontakty.php",
        "name"=>"Kontakty",
        "tooltip"=>"Kontakty tooltip"
    ],
    [
        "link"=>"/WEB-DOUCOVANI/filmy.php",
        "name"=>"Filmy",
        "tooltip"=> "Filmy tooltip"
    ]
];
?>
