<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

header('Content-Type: application/json');
require_once("../Config/Conectar.php");
require_once("../Models/Clientes.php");

$clientes = new Clientes();
$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET["op"]) {
    case "GetAll":
        $datos = $clientes->get_clientes();
        echo json_encode($datos);
        break;
    case "GetId":
        $datos = $clientes->get_clientes_id($body["id_cliente"]);
        echo json_encode($datos);
        break;
    case "insert":
        $datos = $clientes->insert_clientes(
            $body["id_cliente"],
            $body["identificador_persona"]
        );
        echo json_encode("insertado correctamente");
        break;
    // ...
    default:
        // Manejar el caso por defecto si es necesario
        break;
}
?>
