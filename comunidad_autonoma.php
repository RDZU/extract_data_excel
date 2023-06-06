<?php


$ccaa = "CYL";

function get_coordenadas_ccaa($ccaa)
{

    $comunidades_autonomas = array(
        array(
            
            "abrev" => "-	MAD",
            "provincia" => "Comunidad de Madrid",
            "longitud" => -3.70256,
            "latitud" => 40.4165,
        ),
        array(
            "abrev" => "AND",
            "provincia" => "Andalucía",
            "longitud" => -4.5,
            "latitud" =>  37.6,
        ),
        array(
            "abrev" => "VAL",
            "provincia" => "Comunidad Valenciana",
            "longitud" => -0.37739,
            "latitud" => 39.45975,
        ),
        array(
            "abrev" => "MUR",
            "provincia" => "Región de Murcia",
            "longitud" => -1.13004,
            "latitud" => 37.98704,
        ),
        array(
            "abrev" => "EXT",
            "provincia" => "Extremadura",
            "longitud" => -6.16667,
            "latitud" => 39.16667,
        ),
        array(
            "abrev" => "CAT",
            "provincia" => "Cataluña",
            "longitud" => 1.86768,
            "latitud" => 41.82046,
        ),
        array(
            "abrev" => "PV",
            "provincia" => "País Vasco",
            "longitud" => -2.75,
            "latitud" => 43.0,
        ),
        array(
            "abrev" => "CTB",
            "provincia" => "Cantabria",
            "longitud" => -4.03333,
            "latitud" => 43.2,
        ),
        array(
            "abrev" => "AST",
            "provincia" => "Asturias",
            "longitud" => -5.86112,
            "latitud" => 43.36662,
        ),
        array(
            "abrev" => "GAL",
            "provincia" => "Galicia",
            "longitud" => -7.86621,
            "latitud" =>  42.75508,
        ),
        array(
            "abrev" => "ARA",
            "provincia" => "Aragón",
            "longitud" => -1.0,
            "latitud" => 41.0,
        ),
        array( 
            "abrev" => "CYL",
            "provincia" => "Castilla y León",
            "longitud" => -4.45,
            "latitud" => 41.383333,
        ),
        array( 
            "abrev" => "CYM",
            "provincia" => "Castilla La Mancha",
            "longitud" => -3.000033,
            "latitud" => 39.500011,
        ),
        array(
            "abrev" => "CAN",
            "provincia" => "Islas Canarias",
            "longitud" => -15.5,
            "latitud" => 28.0,
        ),
        array(
            "abrev" => "BAL",
            "provincia" => "Islas Baleares",
            "longitud" => 2.52136,
            "latitud" => 39.18969,
        ),
        array(
            "abrev" => "RIO",
            "provincia" => "La Rioja",
            "longitud" => -2.44373,
            "latitud" => 42.4650,
        ),
        array(
            "abrev" => "NAV",
            "provincia" => "Navarra",
            "longitud" => -1.676069,
            "latitud" => 42.695391,
        ),
    );

    for($i = 0; $i < 17; $i++)
    {
        if($comunidades_autonomas[$i]['abrev'] == $ccaa)
        {
            return $comunidades_autonomas[$i]; 
        }
    }
}

print_r(get_coordenadas_ccaa("CYL"));

?>