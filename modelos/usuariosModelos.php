<?php

require_once "modeloPrincipal.php";

class usuariosModelos extends modeloPrincipal {

        /*--Modelo Para agregar usuario-- */
        protected static function agregarUsuarioModelo($datos){
            $sql=modeloPrincipal::conexionDb()->prepare("INSERT INTO empleados(nombre, identidad,correo,direccion,telefono,fecha_ingreso,sueldo,id_estado) 
            VALUES(:Nombre,:ID,:Correo,:Direccion,:Telefono,:Fecha,:Sueldo,:Estado)");
            
            $sql->bindParam(":Nombre",$datos['Nombre']);    
            $sql->bindParam(":ID",$datos['ID']);
            $sql->bindParam(":Correo",$datos['Correo']);
            $sql->bindParam(":Direccion",$datos['Direccion']);
            $sql->bindParam(":Telefono",$datos['Telefono']);
            $sql->bindParam(":Fecha",$datos['Fecha']);
            $sql->bindParam(":Sueldo",$datos['Sueldo']);
            $sql->bindParam(":Estado",$datos['Estado']);
            $sql->execute();
        
            return $sql;
        }
}

