<?php

class Constructoras extends Conectar{
    public function get_constructoras(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm= $conectar->prepare("SELECT * FROM  Constructoras");
            $stm-> execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return  $e ->getMessage();
        }
    }
    public function get_constructoras_id($id){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm= $conectar->prepare("SELECT * FROM  Constructoras WHERE id_constructora= ?");
            $stm->bindValue(1, $id); // Cambio realizado aquí
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
    
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function insert_constructoras($id_constructora,$nombre,$direccion){
        $conectar=parent::conexion();
        parent::set_name();
        $stm="INSERT INTO Constructoras(id_constructora,nombre,direccion) VALUES(?,?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$id_constructora);
        $stm->bindValue(2,$nombre);
        $stm->bindValue(3,$direccion);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }
}

?>