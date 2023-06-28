<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

header('Content-Type: application/json');
require_once("../Config/Conectar.php");
require_once("../Models/Constructoras.php");

$constructoras = new Constructoras();
$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET["op"]) {
    case "GetAll":
        $datos = $constructoras->get_constructoras();
        echo json_encode($datos);
        break;
    case "GetId":
        $datos = $constructoras->get_constructoras_id($body["id_constructora"]);
        echo json_encode($datos);
        break;
    case "insert":
        $datos = $constructoras->insert_constructoras(
            $body["id_constructora"],
            $body["nombre"],
            $body["direccion"]
        );
        echo json_encode("insertado correctamente");
        break;
    // ...
    default:
        // Manejar el caso por defecto si es necesario
        break;
}
?>
