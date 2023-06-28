<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

header('Content-Type: application/json');
require_once("../Config/Conectar.php");
require_once("../Models/Personas.php");

$personas = new Personas();
$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET["op"]) {
    case "GetAll":
        $datos = $personas->get_personas();
        echo json_encode($datos);
        break;
    case "GetId":
        $datos = $personas->get_personas_id($body["id_persona"]);
        echo json_encode($datos);
        break;
    case "insert":
        $datos = $personas->insert_personas(
            $body["id_persona"],
            $body["nombre"],
            $body["edad"],
            $body["telefono"],
            $body["sexo"],
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
