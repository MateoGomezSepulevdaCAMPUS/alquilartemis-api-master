<?php

class Clientes extends Conectar{
    public function get_clientes(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm= $conectar->prepare("SELECT * FROM  Clientes");
            $stm-> execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return  $e ->getMessage();
        }
    }
    public function get_clientes_id($id){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm= $conectar->prepare("SELECT * FROM  Clientes WHERE id_cliente= ?");
            $stm->bindValue(1, $id); // Cambio realizado aquí
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
    
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function insert_clientes($id_cliente,$identificador_persona){
        $conectar=parent::conexion();
        parent::set_name();
        $stm="INSERT INTO Clientes(id_cliente,identificador_persona) VALUES(?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$id_cliente);
        $stm->bindValue(2,$identificador_persona);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }
}

?>