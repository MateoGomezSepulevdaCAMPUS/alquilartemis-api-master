<?php

class Personas extends Conectar{
    public function get_personas(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm= $conectar->prepare("SELECT * FROM  Personas");
            $stm-> execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return  $e ->getMessage();
        }
    }
    public function get_personas_id($id){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm= $conectar->prepare("SELECT * FROM  Personas WHERE id_persona= ?");
            $stm->bindValue(1, $id); // Cambio realizado aquí
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
    
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function insert_personas($id_persona,$nombre,$edad,$telefono,$sexo,$direccion){
        $conectar=parent::conexion();
        parent::set_name();
        $stm="INSERT INTO Personas(id_persona,nombre,edad,telefono,sexo,direccion) VALUES(?,?,?,?,?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$id_persona);
        $stm->bindValue(2,$nombre);
        $stm->bindValue(3,$edad);
        $stm->bindValue(4,$telefono);
        $stm->bindValue(5,$sexo);
        $stm->bindValue(6,$direccion);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }
}

?>