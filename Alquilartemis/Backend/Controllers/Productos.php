<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

header('Content-Type: application/json');
require_once("../Config/Conectar.php");
require_once("../Models/Productos.php");

$productos = new Productos();
$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET["op"]) {
    case "GetAll":
        $datos = $productos->get_productos();
        echo json_encode($datos);
        break;
    case "GetId":
        $datos = $productos->get_productos_id($body["id_producto"]);
        echo json_encode($datos);
        break;
    case "insert":
        $datos = $productos->insert_productos(
            $body["id_producto"],
            $body["nombre"]
        );
        echo json_encode("insertado correctamente");
        break;
    // ...
    default:
        // Manejar el caso por defecto si es necesario
        break;
}
?>
