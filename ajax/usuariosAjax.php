<?php
        $peticionAjax=true;
        require_once "../configuracion/app.php";

        if(isset($_POST)){
            require_once "../controladores/usuariosControlador.php";
            $instanciaUsuarios= new usuariosControlador();
        
            if(isset($_POST['usuario_id_reg']) && isset($_POST['usuario_nombre_reg']) ){//si vienen definidades estas variables se va a ejecutar el controlador para insertar a la base de datos
                   echo ins 
            }
        }else{
           session_start(['name'=>'destileria']);
           session_unset();
           session_destroy();
           header("Location:".ServerUrl."login/");
           exit(); 
        }