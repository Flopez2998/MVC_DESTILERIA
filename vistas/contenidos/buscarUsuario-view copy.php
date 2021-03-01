<!-- Page content -->
<section class="full-box page-content">
    
    <!-- Page header -->
    <div class="full-box page-header">
        <h3 class="text-left">
            <i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR USUARIO
        </h3>
    </div>

    <div class="container-fluid">
        <ul class="full-box list-unstyled page-nav-tabs">
            <li>
                <a href="<?php echo ServerUrl;?>nuevoUsuario/"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR USUARIO</a>
            </li>
            <li>
                <a href="<?php echo ServerUrl;?>listaUsuarios/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE USUARIOS</a>
            </li>
            <li>
                <a class="active" href="<?php echo ServerUrl;?>buscarUsuario/"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR USUARIO</a>
            </li>
        </ul>	
    </div>
    
    <!-- Content here-->
    <div class="container-fluid">
        <form class="form-neon" action="">
            <div class="container-fluid">
                <div class="row justify-content-md-center">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="inputSearch" class="bmd-label-floating">¿Qué usuario estas buscando?</label>
                            <input type="text" class="form-control" name="busqueda-" id="inputSearch" maxlength="30">
                        </div>
                    </div>
                    <div class="col-12">
                        <p class="text-center" style="margin-top: 40px;">
                            <button type="submit" class="btn btn-raised btn-info"><i class="fas fa-search"></i> &nbsp; BUSCAR</button>
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div