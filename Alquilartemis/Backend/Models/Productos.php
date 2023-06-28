<?php

class Productos extends Conectar{
    public function get_productos(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm= $conectar->prepare("SELECT * FROM  Productos");
            $stm-> execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return  $e ->getMessage();
        }
    }
    public function get_productos_id($id){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm= $conectar->prepare("SELECT * FROM  Productos WHERE id_producto= ?");
            $stm->bindValue(1, $id); // Cambio realizado aquí
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
    
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function insert_productos($id_producto,$nombre){
        $conectar=parent::conexion();
        parent::set_name();
        $stm="INSERT INTO Productos(id_producto,nombre) VALUES(?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$id_producto);
        $stm->bindValue(2,$nombre);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }
}

?>