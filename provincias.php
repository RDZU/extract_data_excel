<?php


$provincia = "Valladolid";

function get_coordenadas_provincia($provincia)
{

    $provincias = array(
        array(
            "provincia" => "Albacete",
            "latitud" => 38.992231,
            "longitud" => -1.878099,
        ),
        array(
            "provincia" => "Alicante/Alacant",
            "latitud" => 38.357903,
            "longitud" => -0.507544,
        ),
        array(
            "provincia" => "Almería",
            "latitud" => 36.841592,
            "longitud" => -2.492136,
        ),
        array(
            "provincia" => "Araba/Álava",
            "latitud" => 42.851032,
            "longitud" => -2.839439,
        ),
        array(
            "provincia" => "Asturias",
            "latitud" => 43.271063,
            "longitud" => -6.967735,
        ),
        array(
            "provincia" => "Ávila",
            "latitud" => 40.656917,
            "longitud" => -4.699703,
        ),
        array(
            "provincia" => "Badajoz",
            "latitud" => 38.879442,
            "longitud" => -7.022699,
        ),
        array(
            "provincia" => "Balears, Illes",
            "latitud" => 39.570014,
            "longitud" => 2.645650,
        ),
        array(
            "provincia" => "Barcelona",
            "latitud" => 41.392776,
            "longitud" => 2.070149,
        ),
        array(
            "provincia" => "Bizkaia",
            "latitud" => 43.263359,
            "longitud" => -3.077093,
        ),
        array(
            "provincia" => "Burgos",
            "latitud" => 42.344184,
            "longitud" => -3.729713,
        ),
        array(
            "provincia" => "Cáceres",
            "latitud" => 39.471698,
            "longitud" => -6.425739,
        ),
        array(
            "provincia" => "Cádiz",
            "latitud" => 36.517292,
            "longitud" => -6.304587,
        ),
        array(
            "provincia" => "Cantabria",
            "latitud" => 43.135506,
            "longitud" => -4.561169,
        ),
        array(
            "provincia" => "Castellón/Castelló",
            "latitud" => 39.981159,
            "longitud" => 0.000859,
        ),
        array(
            "provincia" => "Ceuta",
            "latitud" => 35.889121,
            "longitud" => -5.353545,
        ),
        array(
            "provincia" => "Ciudad Real",
            "latitud" => 38.986076,
            "longitud" => -3.944498,
        ),
        array(
            "provincia" => "Córdoba",
            "latitud" => 37.891607,
            "longitud" => -4.819505,
        ),
        array(
            "provincia" => "Coruña, A",
            "latitud" => 43.354902,
            "longitud" => -8.411050,
        ),
        array(
            "provincia" => "Cuenca",
            "latitud" => 40.062033,
            "longitud" => -2.183044,
        ),
        array(
            "provincia" => "Gipuzkoa",
            "latitud" => 43.307328,
            "longitud" => -2.117412,
        ),
        array(
            "provincia" => "Girona",
            "latitud" => 41.980372,
            "longitud" => 2.783648,
        ),
        array(
            "provincia" => "Granada",
            "latitud" => 37.181010,
            "longitud" => -3.626291,
        ),
        array(
            "provincia" => "Guadalajara",
            "latitud" => 40.632221,
            "longitud" => -3.190682,
        ),
        array(
            "provincia" => "Huelva",
            "latitud" => 37.268885,
            "longitud" => -7.015496,
        ),
        array(
            "provincia" => "Huesca",
            "latitud" => 42.135933,
            "longitud" => -0.441727,
        ),
        array(
            "provincia" => "Jaén",
            "latitud" => 37.767507,
            "longitud" => -3.782469,
        ),
        array(
            "provincia" => "León",
            "latitud" => 42.603636,
            "longitud" => -5.594901,
        ),
        array(
            "provincia" => "Lleida",
            "latitud" => 41.619554,
            "longitud" => 0.607618,
        ),
        array(
            "provincia" => "Lugo",
            "latitud" => 43.012341,
            "longitud" => -7.591520,
        ),
        array(
            "provincia" => "Madrid",
            "latitud" => 40.417018,
            "longitud" => -3.705650,
        ),
        array(
            "provincia" => "Málaga",
            "latitud" => 36.765025,
            "longitud" => -4.564275,
        ),
        array(
            "provincia" => "Melilla",
            "latitud" => 35.286316,
            "longitud" => -2.962036,
        ),
        array(
            "provincia" => "Murcia",
            "latitud" => 37.980595,
            "longitud" => -1.162195,
        ),
        array(
            "provincia" => "Navarra",
            "latitud" => 42.815824,
            "longitud" => -1.685041,
        ),
        array(
            "provincia" => "Ourense",
            "latitud" => 42.338393,
            "longitud" => -7.881195,
        ),
        array(
            "provincia" => "Palencia",
            "latitud" => 42.008847,
            "longitud" => -4.544464,
        ),
        array(
            "provincia" => "Palmas, Las",
            "latitud" => 28.117432,
            "longitud" => -15.474722,
        ),
        array(
            "provincia" => "Pontevedra",
            "latitud" => 42.433891,
            "longitud" => -8.656855,
        ),
        array(
            "provincia" => "Rioja, La",
            "latitud" => 42.460351,
            "longitud" => -2.483382,
        ),
        array(
            "provincia" => "Salamanca",
            "latitud" => 40.963498,
            "longitud" => -5.704232,
        ),
        array(
            "provincia" => "Santa Cruz de Tenerife",
            "latitud" => 28.457891,
            "longitud" => -16.321354,
        ),
        array(
            "provincia" => "Segovia",
            "latitud" => 40.941310,
            "longitud" => -4.147221,
        ),
        array(
            "provincia" => "Sevilla",
            "latitud" => 37.375487,
            "longitud" => -6.025099,
        ),
        array(
            "provincia" => "Soria",
            "latitud" => 41.767152,
            "longitud" => -2.492089,
        ),
        array(
            "provincia" => "Tarragona",
            "latitud" => 41.125864,
            "longitud" => 1.203564,
        ),
        array(
            "provincia" => "Teruel",
            "latitud" => 40.345041,
            "longitud" => -1.118475,
        ),
        array(
            "provincia" => "Toledo",
            "latitud" => 39.862320,
            "longitud" => -4.069470,
        ),
        array(
            "provincia" => "Valencia/València",
            "latitud" => 39.407897,
            "longitud" => -0.431723,
        ),
        array(
            "provincia" => "Valladolid",
            "latitud" => 41.703425,
            "longitud" => -4.948898,
        ),
        array(
            "provincia" => "Zamora",
            "latitud" => 41.503841,
            "longitud" => -5.762046,
        ),
        array(
            "provincia" => "Zaragoza",
            "latitud" => 41.651750,
            "longitud" => -0.930000,
        ),
    );
    $provincias = array(
        array(
            "provincia" => "Albacete",
            "latitud" => 38.992231,
            "longitud" => -1.878099,
        ),
        array(
            "provincia" => "Alicante/Alacant",
            "latitud" => 38.357903,
            "longitud" => -0.507544,
        ),
        array(
            "provincia" => "Almería",
            "latitud" => 36.841592,
            "longitud" => -2.492136,
        ),
        array(
            "provincia" => "Araba/Álava",
            "latitud" => 42.851032,
            "longitud" => -2.839439,
        ),
        array(
            "provincia" => "Asturias",
            "latitud" => 43.271063,
            "longitud" => -6.967735,
        ),
        array(
            "provincia" => "Ávila",
            "latitud" => 40.656917,
            "longitud" => -4.699703,
        ),
        array(
            "provincia" => "Badajoz",
            "latitud" => 38.879442,
            "longitud" => -7.022699,
        ),
        array(
            "provincia" => "Balears, Illes",
            "latitud" => 39.570014,
            "longitud" => 2.645650,
        ),
        array(
            "provincia" => "Barcelona",
            "latitud" => 41.392776,
            "longitud" => 2.070149,
        ),
        array(
            "provincia" => "Bizkaia",
            "latitud" => 43.263359,
            "longitud" => -3.077093,
        ),
        array(
            "provincia" => "Burgos",
            "latitud" => 42.344184,
            "longitud" => -3.729713,
        ),
        array(
            "provincia" => "Cáceres",
            "latitud" => 39.471698,
            "longitud" => -6.425739,
        ),
        array(
            "provincia" => "Cádiz",
            "latitud" => 36.517292,
            "longitud" => -6.304587,
        ),
        array(
            "provincia" => "Cantabria",
            "latitud" => 43.135506,
            "longitud" => -4.561169,
        ),
        array(
            "provincia" => "Castellón/Castelló",
            "latitud" => 39.981159,
            "longitud" => 0.000859,
        ),
        array(
            "provincia" => "Ceuta",
            "latitud" => 35.889121,
            "longitud" => -5.353545,
        ),
        array(
            "provincia" => "Ciudad Real",
            "latitud" => 38.986076,
            "longitud" => -3.944498,
        ),
        array(
            "provincia" => "Córdoba",
            "latitud" => 37.891607,
            "longitud" => -4.819505,
        ),
        array(
            "provincia" => "Coruña, A",
            "latitud" => 43.354902,
            "longitud" => -8.411050,
        ),
        array(
            "provincia" => "Cuenca",
            "latitud" => 40.062033,
            "longitud" => -2.183044,
        ),
        array(
            "provincia" => "Gipuzkoa",
            "latitud" => 43.307328,
            "longitud" => -2.117412,
        ),
        array(
            "provincia" => "Girona",
            "latitud" => 41.980372,
            "longitud" => 2.783648,
        ),
        array(
            "provincia" => "Granada",
            "latitud" => 37.181010,
            "longitud" => -3.626291,
        ),
        array(
            "provincia" => "Guadalajara",
            "latitud" => 40.632221,
            "longitud" => -3.190682,
        ),
        array(
            "provincia" => "Huelva",
            "latitud" => 37.268885,
            "longitud" => -7.015496,
        ),
        array(
            "provincia" => "Huesca",
            "latitud" => 42.135933,
            "longitud" => -0.441727,
        ),
        array(
            "provincia" => "Jaén",
            "latitud" => 37.767507,
            "longitud" => -3.782469,
        ),
        array(
            "provincia" => "León",
            "latitud" => 42.603636,
            "longitud" => -5.594901,
        ),
        array(
            "provincia" => "Lleida",
            "latitud" => 41.619554,
            "longitud" => 0.607618,
        ),
        array(
            "provincia" => "Lugo",
            "latitud" => 43.012341,
            "longitud" => -7.591520,
        ),
        array(
            "provincia" => "Madrid",
            "latitud" => 40.417018,
            "longitud" => -3.705650,
        ),
        array(
            "provincia" => "Málaga",
            "latitud" => 36.765025,
            "longitud" => -4.564275,
        ),
        array(
            "provincia" => "Melilla",
            "latitud" => 35.286316,
            "longitud" => -2.962036,
        ),
        array(
            "provincia" => "Murcia",
            "latitud" => 37.980595,
            "longitud" => -1.162195,
        ),
        array(
            "provincia" => "Navarra",
            "latitud" => 42.815824,
            "longitud" => -1.685041,
        ),
        array(
            "provincia" => "Ourense",
            "latitud" => 42.338393,
            "longitud" => -7.881195,
        ),
        array(
            "provincia" => "Palencia",
            "latitud" => 42.008847,
            "longitud" => -4.544464,
        ),
        array(
            "provincia" => "Palmas, Las",
            "latitud" => 28.117432,
            "longitud" => -15.474722,
        ),
        array(
            "provincia" => "Pontevedra",
            "latitud" => 42.433891,
            "longitud" => -8.656855,
        ),
        array(
            "provincia" => "Rioja, La",
            "latitud" => 42.460351,
            "longitud" => -2.483382,
        ),
        array(
            "provincia" => "Salamanca",
            "latitud" => 40.963498,
            "longitud" => -5.704232,
        ),
        array(
            "provincia" => "Santa Cruz de Tenerife",
            "latitud" => 28.457891,
            "longitud" => -16.321354,
        ),
        array(
            "provincia" => "Segovia",
            "latitud" => 40.941310,
            "longitud" => -4.147221,
        ),
        array(
            "provincia" => "Sevilla",
            "latitud" => 37.375487,
            "longitud" => -6.025099,
        ),
        array(
            "provincia" => "Soria",
            "latitud" => 41.767152,
            "longitud" => -2.492089,
        ),
        array(
            "provincia" => "Tarragona",
            "latitud" => 41.125864,
            "longitud" => 1.203564,
        ),
        array(
            "provincia" => "Teruel",
            "latitud" => 40.345041,
            "longitud" => -1.118475,
        ),
        array(
            "provincia" => "Toledo",
            "latitud" => 39.862320,
            "longitud" => -4.069470,
        ),
        array(
            "provincia" => "Valencia/València",
            "latitud" => 39.407897,
            "longitud" => -0.431723,
        ),
        array(
            "provincia" => "Valladolid",
            "latitud" => 41.703425,
            "longitud" => -4.948898,
        ),
        array(
            "provincia" => "Zamora",
            "latitud" => 41.503841,
            "longitud" => -5.762046,
        ),
        array(
            "provincia" => "Zaragoza",
            "latitud" => 41.651750,
            "longitud" => -0.930000,
        ),
    );

    for($i = 0; $i < 52; $i++)
    {

        if($provincias[$i]['provincia'] == $provincia)
        {
            return $provincias[$i]; 
        }
    }
}


print_r(get_coordenadas_provincia("Valladolid"));

?>