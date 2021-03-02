
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
<form  class="form-neon FormularioAjax" action="" method="POST" data-form="save"  autocomplete="off">
<fieldset>
<legend><i class="fas fa-user"></i> &nbsp; Información Del Usuario</legend>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="usuario_id" class="bmd-label-floating">Identidad</label>
                <input type="text" pattern="[0-9-]{1,27}" class="form-control" name="usuario_id_rtn_reg" id="usuario_id" maxlength="27">
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="usuario_nombre" class="bmd-label-floating">Nombre</label>
                <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="usuario_nombre_reg" id="usuario_nombre" maxlength="40">
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="form-group">
                <label for="usuario_correo" class="bmd-label-floating">Correo Electronico</label>
                <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="usuario_correo_reg" id="usuario_correo" maxlength="40">
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="form-group">
                <label for="usuario_fecha" class="bmd-label-floating">Fecha de Ingreso</label>
                <input type="text" pattern="[0-9()+]{8,20}" class="form-control" name="usuario_fecha_reg" id="usuario_fecha" maxlength="20">
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="form-group">
                <label for="usuario_rol" class="bmd-label-floating">Rol</label>
                <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,150}" class="form-control" name="usuario_rol_reg" id="usuario_rol" maxlength="150">
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="form-group">
                <label for="usuario_estado" class="bmd-label-floating">Estado</label>
                <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,150}" class="form-control" name="usuario_estado_reg" id="usuario_estado" maxlength="150">
            </div>
        </div>
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