<?php
    require_once "./modelos/vistasModelo.php";

        class vistasControlador extends vistasModelo{
            /*--Controlador para obtener la plantilla*/
            public function obtenerPlantillaControlador(){
                return require_once "./vistas/plantilla.php";   
            }
            
            /*--Controlador para obtener la vistas*/
            public function obtenerVistasControlador(){
                if(isset($_GET['views'])){
                    $ruta=explode("/", $_GET['views']);
                    $respuesta = VistasModelo::obtenerVistasModelo($ruta[0]);
                }else{
                    $respuesta = "login";
                }
                return $respuesta;
            }

        }
    
