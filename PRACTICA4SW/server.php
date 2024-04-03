<?php
require_once "lib/nusoap.php";

function getAnimes($datos) {
 
    if ($datos == "Animes") {
 
        RETURN JOIN(",", array("Dragon Ball", 
        
        "Naruto", 
        "One Piece",
        "Spy x Family", 
        "My Hero Academy", 
        "One Punch Man",
         "Death Note"));
    } else {

        return "No hay Animes";
    }
}


$server = new soap_server();


$server->register("getAnimes");


if (!isset($HTTP_RAW_POST_DATA)) {
    
    $HTTP_RAW_POST_DATA = file_get_contents('php://input');
}


$server->service($HTTP_RAW_POST_DATA);
?>

