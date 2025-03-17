<?php

require_once("CarrestKezelo.php");

$view = "";
if(isset($_GET["view"]))
$view = $_GET["view"];

switch($view)
{
    case "all":
        $Oscarrest = new $OscarrestKezelo();
        $Oscarrest->getAllCars();
        break;

    case  "single":
        $Oscarrest = new $OscarrestKezelo();
        $Oscarrest->getCarsById($_GET["c_id"]);
        break;

    case  "single":
            $Oscarrest = new $OscarrestKezelo();
            $Oscarrest->getCarsByType($_GET["ct_desc"]);
            break;

    default:
    $Oscarrest = new $OscarrestKezelo();
    $Oscarrest->getFault();


}

?>