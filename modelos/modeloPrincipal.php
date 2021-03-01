<?php

//Vamos a verificar si es una peticion ajax o no
if($peticionAjax){
            require_once"../configuracion/servidor.php";
    }else{
        require_once "./configuracion/servidor.php";
    }
    
class modeloPrincipal{
    /*Funcion para conectar a la base de datos*/

    protected static function conexionDb(){
        $conexion = new PDO( SGBD, user, contraeña);
        $conexion->exec("SET CHARACTER SET utf8");
        return $conexion;
    }

    /*Funcion para cejecutar consultas simples*/
    protected static function ejecutar_consultas_simples($consulta){
        $sql = self::conexionDb()->prepare($consulta);
        $sql->execute();
        return $sql;
    }

}