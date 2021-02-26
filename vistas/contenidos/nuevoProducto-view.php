
<!-- Page content -->
<section class="full-box page-content">

<!-- Page header -->
<div class="full-box page-header">
<h3 class="text-left">
    <i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PRODUCTO
</h3>
</div>

<div class="container-fluid">
<ul class="full-box list-unstyled page-nav-tabs">
    <li>
        <a class="active" href="client-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PRODUCTO</a>
    </li>
    <li>
        <a href="client-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PRODUCTO</a>
    </li>
    <li>
        <a href="client-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR PRODUCTO</a>
    </li>
</ul>	
</div>

<!-- Content here-->
<div class="container-fluid">
<form action="" class="form-neon" autocomplete="off">
    <fieldset>
        <legend><i class="fas fa-user"></i> &nbsp; Información Del Producto</legend>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="producto_codigo" class="bmd-label-floating">Codigo</label>
                        <input type="text" pattern="[0-9-]{1,27}" class="form-control" name="producto_codigo_reg" id="producto_codigo" maxlength="27">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="producto_nombre" class="bmd-label-floating">Nombre</label>
                        <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="producto_nombre_reg" id="producto_nombre" maxlength="40">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="producto_descripcion" class="bmd-label-floating">Descripción</label>
                        <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="producto_descripcion_reg" id="producto_descripcion" maxlength="40">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="producto_precio" class="bmd-label-floating">Precio</label>
                        <input type="text" pattern="[0-9()+]{8,20}" class="form-control" name="producto_precio_reg" id="producto_precio" maxlength="20">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="producto_upc" class="bmd-label-floating">Unidades por Caja</label>
                        <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,150}" class="form-control" name="producto_upc_reg" id="producto_upc" maxlength="150">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="producto_stock" class="bmd-label-floating">Stock</label>
                        <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,150}" class="form-control" name="producto_stock_reg" id="producto_stock" maxlength="150">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <label for="producto_categoria" class="bmd-label-floating">Categoria</label>
                        <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,150}" class="form-control" name="producto_categoria_reg" id="producto_categoria" maxlength="150">
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