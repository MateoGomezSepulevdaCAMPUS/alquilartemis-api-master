<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

header('Content-Type: application/json');
require_once("../Config/Conectar.php");
require_once("../Models/Empleados.php");

$empleados = new Empleados();
$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET["op"]) {
    case "GetAll":
        $datos = $empleados->get_empleados();
        echo json_encode($datos);
        break;
    case "GetId":
        $datos = $empleados->get_empleados_id($body["id_empleado"]);
        echo json_encode($datos);
        break;
    case "insert":
        $datos = $empleados->insert_empleados(
            $body["id_empleado"],
            $body["id_persona"],
            $body["usuario"],
            $body["password"],
            $body["id_constructora"]
        );
        echo json_encode("insertado correctamente");
        break;
    // ...
    default:
        // Manejar el caso por defecto si es necesario
        break;
}
?>
