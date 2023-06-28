<?php

class Empleados extends Conectar{
    public function get_empleados(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm= $conectar->prepare("SELECT * FROM  Empleados");
            $stm-> execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return  $e ->getMessage();
        }
    }
    public function get_empleados_id($id){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm= $conectar->prepare("SELECT * FROM  Empleados WHERE id_empleado= ?");
            $stm->bindValue(1, $id); // Cambio realizado aquí
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
    
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function insert_empleados($id_empleado,$id_persona,$usuario,$password,$id_constructora){
        $conectar=parent::conexion();
        parent::set_name();
        $stm="INSERT INTO Empleados(id_empleado,id_persona,usuario,password,id_constructora) VALUES(?,?,?,?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$id_empleado);
        $stm->bindValue(2,$id_persona);
        $stm->bindValue(3,$usuario);
        $stm->bindValue(4,$password);
        $stm->bindValue(5,$id_constructora);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }
}

?>