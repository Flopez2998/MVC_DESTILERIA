<?php
if($peticionAjax){
    require_once "../modelos/usuariosModelos.php";
}else{
    require_once "./usuariosModelos.php";
}

class usuariosControlador extends usuariosModelos{
    
        /*--Controlador Para agregar usuario-- */
        public function agregarUsuarioControlador(){
            $id=modeloPrincipal::limpiar_cadena($_POST['usuario_id_reg']);
            $nombre=modeloPrincipal::limpiar_cadena($_POST['usuario_nombre_reg']);
            $identidad=modeloPrincipal::limpiar_cadena($_POST['usuario_identidad_reg']);
            $correo=modeloPrincipal::limpiar_cadena($_POST['usuario_correo_reg']);
            $direccion=modeloPrincipal::limpiar_cadena($_POST['usuario_direccion_reg']);
            $telefono=modeloPrincipal::limpiar_cadena($_POST['usuario_telefono_reg']);
            $fecha_ingreso=modeloPrincipal::limpiar_cadena($_POST['usuario_fecha_reg']);
            $sueldo=modeloPrincipal::limpiar_cadena($_POST['usuario_sueldo_reg']);
            $estado=modeloPrincipal::limpiar_cadena($_POST['usuario_estado_reg']);
        }
}
