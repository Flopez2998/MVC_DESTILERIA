<?php
    class vistasModelo{
        /*--Modelo para obtener las vistas */
        protected static function obtenerVistasModelo($vistas){
           $listaBlanca = ["home","vistaClientes", "nuevoCliente", "buscarCliente", "actualizarCliente","listaProductos","nuevoProducto",
                            "buscarProducto","nuevaCotizacion","buscarCotizacion","nuevoUsuario","listaUsuarios","buscarUsuario"];
           if(in_array($vistas, $listaBlanca)){   
                if(is_file("./vistas/contenidos/".$vistas."-view.php")){//si este archivo existe se devolvera la carpeta o esa direccion de contenidos
                    $contenido= "./vistas/contenidos/".$vistas."-view.php";
                }else{
                    $contenido= "404";
                }    

           }elseif($vistas=="login" || $vistas=="index"){ //si existe el valor se mostrara el login
                $contenido= "login";
           }else{
               $contenido= "404";//si no existe el valor se mostrarar la pagina de error 404
           }
           return $contenido; 
        }
    }