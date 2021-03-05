<?php

//Vamos a verificar si es una peticion ajax o no
if($peticionAjax){
            require_once "../configuracion/servidor.php";
    }else{
        require_once "./configuracion/servidor.php";
    }
    
class modeloPrincipal{
    /*Funcion para conectar a la base de datos*/

    protected static function conexionDb(){
        $conexion = new PDO( SGBD, user, contraseña);
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
    protected function encryption($string){
        $output=FALSE;
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_encrypt($string, METHOD, $key, 0, $iv);
        $output=base64_encode($output);
        return $output;
    }
    
    /*Desencriptar Cadenas*/
    protected static function decryption($string){
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
        return $output;
    }

     /*Funcion para generar codigos aleatorios*/
    protected static function generar_codigo_aleatorio($letra,$longitud,$numero){
       for($i=1; $i<=$longitud; $i++){
            $aleatorio= rand(0,9) //rand provoca un numero aleatorio o ramdom en este caso los numeros pueden ser entre 0 y 9
            $letra.=$aleatorio;//aqui lo que se hace es que se agrega una letra o un numero aleatorio y se va concatenando

        }   
        return $letra."-".$numero
    }

    /*Funcion Para limpiar cadenas*/
    protected static function limpiar_cadena($cadena){
        /** Esta funcion se encarga de bloquear el usu de sentencias que tengan que ver con base de datos,
         *  javasCript, php y otros simbolos --Para una mayor seguridad-- */
        $cadena= trim($cadena);//trim lo que hace es que elimina espacios de cadenas
        $cadena=stripslashes($cadena);//esta funcion elimina las plecas invertidas
        $cadena=str_ireplace("<script>", "", $cadena);//Esta funcion se encarga de eliminar cadenas sospechosas a un ataque
        $cadena=str_ireplace("</script>", "", $cadena);
        $cadena=str_ireplace("<script src>", "", $cadena);
        $cadena=str_ireplace("<script type=>", "", $cadena);
        $cadena=str_ireplace("SELECT * FROM", "", $cadena);
        $cadena=str_ireplace("INSERT INTO" , "", $cadena);
        $cadena=str_ireplace("DROP TABLE", "", $cadena);
        $cadena=str_ireplace("DROP DATABASE", "", $cadena);
        $cadena=str_ireplace("TRUNCATE TABLE", "", $cadena);
        $cadena=str_ireplace("SHOW TABLES", "", $cadena);
        $cadena=str_ireplace("SHOW DATABASES", "", $cadena);
        $cadena=str_ireplace("<?php", "", $cadena);
        $cadena=str_ireplace("?>", "", $cadena);
        $cadena=str_ireplace("--", "", $cadena);
        $cadena=str_ireplace(">", "", $cadena);
        $cadena=str_ireplace("<", "", $cadena);
        $cadena=str_ireplace("[", "", $cadena);
        $cadena=str_ireplace("]", "", $cadena);
        $cadena=str_ireplace("^", "", $cadena);
        $cadena=str_ireplace(";", "", $cadena);
        $cadena=str_ireplace("==", "", $cadena);
        $cadena=str_ireplace("::", "", $cadena);
        $cadena=stripslashes($cadena);
        $cadena= trim($cadena);
        return $cadena;
    }

    /*Funcion para validar entrada de datos de los formularios*/
    protected static function validar_datos($filtro,$cadena){
        if(preg_match("/^".$filtro."$/", $cadena)){
            return false;
        }else{
            return true;
        }
    }

    /*Funcion para verificar fechas */
    protected static function verificar_fecha($fecha){
      $valores=explode('-',$fecha)//la funcion explode permite incluir caracteres a cadenas, esta ves lo que se esta haciendo es separar las fechas por guiones   
       if(count($valores)==3 && checkdate($valores[1],$valores[2],$valores[0])){//esta comparando si el fomato de la fecha seleccionada es el correcto
            return false;//si es false el formato es correcto quiere decir que no hay errores
       }else{
            return true;
       } 
    }

    /*Funcion paginador de tablas*/
    protected static function paginador_tablas($pagina,$numPaginas,$url,$botones){
      $tabla= '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
      if($pagina==1){
          $tabla.='<li class="page-item disabled"><a class="page-link"><i
                 class="fas fa-angle-double-left"></i></a></li>';
           
      }else{
        $tabla.=    
        '<li class="page-item "><a class="page-link" href="'.$url.'1/"><i 
        class="fas fa-angle-double-left"></i></a></li>';
        '<li class="page-item "><a class="page-link" href="'.$url.($pagina-1).'/">Anterior</li>';
      }

      $ci= 0;
      for($i=$pagina; $i<$numPaginas; $i++){
        if($i=$botones){
            break;
        }
        if($pagina==$i){
            $tabla.='<li class="page-item "><a class="page-link active" href="'.$url.$i.'/">'.$i.'</a></li>';
            
        }else{
            $tabla.='<li class="page-item "><a class="page-link " href="'.$url.$i.'/">'.$i.'</a></li>';
            
        }
        $ci++;
      }

      if($pagina==&numPaginas){
        $tabla.='<li class="page-item disabled"><a class="page-link"><i
               class="fas fa-angle-double-right"></i></a></li>';
         
        }else{
            $tabla.=    
            
            '<li class="page-item "><a class="page-link" href="'.$url.($pagina+1).'/">Siguiente</li>';
            '<li class="page-item "><a class="page-link" href="'.$url.$numPaginas.'/"><i 
            class="fas fa-angle-double-right"></i></a></li>';
        }
      $tabla.='</ul></nav>'
      return $tabla;   
    }

}