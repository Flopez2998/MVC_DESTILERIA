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
            
            /**Comprobar los campos vacios*/
            if($id=="" || $nombre=="" || $correo=="" || $fecha_ingreso==""){
               $alerta=[
                   "Alerta"=>"simple",
                   "Titulo"=>"Ocurrio un error inesperado",
                   "Texto"=>"Llene todos los campos",
                   "Tipo"=>"error"
               ];
               echo json_encode($alerta);//el array alerta se pasara a un json por que javascript no comprende esete array y en json si
               exit();
            }

            $datos_usuarios_reg=[
                "Cod_empleado"=>$id,
                "Nombre"=>$nombre,
                "ID"=>$identidad,
                "Correo"=>$correo,
                "Direccion"=>$direccion,
                "Telefono"=>$telefono,
                "Fecha"=>$fecha_ingreso,
                "Sueldo"=>$sueldo,
                "Estado"=>$estado
            ]; 

            $agregar_usuario=usuariosModelos::agregarUsuarioModelo($datos_usuarios_reg);
            if($agregar_usuario->rowCount()==1){
                $alerta=[
                    "Alerta"=>"limpiar",
                    "Titulo"=>"Usuario Registrado",
                    "Texto"=>"Los datos fueron insertados en la base de datos",
                    "Tipo"=>"succes"
                ];
            }else{
                 $alerta=[
                     "Alerta"=>"simple",
                     "Titulo"=>"Ocurrió un error inesperado",
                     "Texto"=>"Los datos nos fueron insertados en la base de datos",
                     "Tipo"=>"error"
                 ];   
            }
          echo json_encode($alerta);
        }
}
