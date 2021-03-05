
<!-- Page content -->
<section class="full-box page-content">

<!-- Page header -->
<div class="full-box page-header">
<h3 class="text-left">
<i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR USUARIO
</h3>
</div>

<div class="container-fluid">
<ul class="full-box list-unstyled page-nav-tabs">
<li>
<a class="active" href="<?php echo ServerUrl;?>nuevoUsuario/"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR USUARIO</a>
</li>
<li>
<a href="<?php echo ServerUrl;?>listaUsuarios/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE USUARIOS</a>
</li>
<li>
<a href="<?php echo ServerUrl;?>buscarUsuario/"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR USUARIO</a>
</li>
</ul>	
</div>

<!-- Content here-->
<div class="container-fluid">
<form  class="form-neon FormularioAjax" action="<?php echo ServerUrl;?>ajax/usuariosAjax.php" 
        method="POST" data-form="save"  autocomplete="off">
<fieldset>
<legend><i class="fas fa-user"></i> &nbsp; Información Del Usuario</legend>
<div class="container-fluid">

    <div class="row">
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="usuario_id" class="bmd-label-floating">Codigo Usuario</label>
                <input type="text" pattern="[0-9-]{1,27}" class="form-control" name="usuario_id_reg" id="usuario_id" maxlength="27" required = "">
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="usuario_nombre" class="bmd-label-floating">Nombre</label>
                <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="usuario_nombre_reg" id="usuario_nombre" maxlength="40" required = "" >
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="usuario_identidad" class="bmd-label-floating">Identidad</label>
                <input type="text" pattern="[0-9-]{1,15}" class="form-control" name="usuario_identidad_reg" id="usuario_identidad" maxlength="15">
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="form-group">
                <label for="usuario_correo" class="bmd-label-floating">Correo Electronico</label>
                <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="usuario_correo_reg" id="usuario_correo" maxlength="40" required = "">
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="usuario_direccion" class="bmd-label-floating">Dirección</label>
                <input type="text" pattern="[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ#.,/ ]{1,40}" class="form-control" name="usuario_direccion_reg" id="usuario_direccion" maxlength="100">
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="usuario_telefono" class="bmd-label-floating">Telefono</label>
                <input type="text" pattern="[0-9-]{1,14}" class="form-control" name="usuario_telefono_reg" id="usuario_telefono" maxlength="40">
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="form-group">
                <label for="usuario_fecha" class="bmd-label-floating">Fecha de Ingreso</label>
                <input type="date" pattern="[0-9()+]{8,20}" class="form-control" name="usuario_fecha_reg" id="usuario_fecha_reg" maxlength="20" required="">
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="usuario_sueldo" class="bmd-label-floating">Sueldo</label>
                <input type="text" pattern="[0-9-.,]{1,40}" class="form-control" name="usuario_sueldo_reg" id="usuario_sueldo" maxlength="40">
            </div>
        </div>
        <!--<div class="col-12 col-md-4">
            <div class="form-group">
                <select class="form-control" name="usuario_estado_reg">
                <option value="" selected="" disable="">Seleccione una opción</option>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
                </select>    
            </div>
        </div>-->
    </div>
</div>
</fieldset>
<br><br><br>
<p class="text-center" style="margin-top: 40px;">
<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
&nbsp; &nbsp;
<button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
</p>
</form>
</div>	

</section>