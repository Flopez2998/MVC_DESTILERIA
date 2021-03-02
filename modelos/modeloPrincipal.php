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
   
    /*Encriptar Cadenas*/
    public function encryption($string){
        $output=FALSE;
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_encrypt($string, METHOD, $key, 0, $iv);
        $output=base64_encode($output);
        return $output;
    }
    
    /*Desencriptar Cadenas*/
    public static function decryption($string){
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
        return $output;
    }

}