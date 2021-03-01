<!-- Page header -->
<div class="full-box page-header">
        <h3 class="text-left">
            <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PRODUCTOS
        </h3>
        
    </div>

    <div class="container-fluid">
        <ul class="full-box list-unstyled page-nav-tabs">
            <li>
                <a href="<?php echo ServerUrl;?>nuevoProducto/"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PRODUCTO</a>
            </li>
            <li>
                <a class="active" href="<?php echo ServerUrl;?>listaProductos/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PRODUCTOS</a>
            </li>
            <li>
                <a href="<?php echo ServerUrl;?>buscarProducto/"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR PRODUCTOS</a>
            </li>
        </ul>	
    </div>
    
    <!-- Content here-->
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-dark table-sm">
                <thead>
                    <tr class="text-center roboto-medium">
                        <th>#</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>PRECIO</th>
                        <th>UNIDADES POR CAJA</th>
                        <th>STOCK</th>
                        <th>CATEGORIA</th>
                        <th>ACTUALIZAR</th>
                        <th>ELIMINAR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center" >
                        <td>0000001</td>
                        <td>Alcohol</td>
                        <td>Alcohol para eliminar bacterias</td>
                        <td>20.00</td>
                        <td>24</td>
                        <td>6000</td>
                        <td>Alchol Etílico</td>
                        <td>
                            <a href="client-update.html" class="btn btn-success">
                                <i class="fas fa-sync-alt"></i>	
                            </a>
                        </td>
                        <td>
                            <form action="">
                                <button type="button" class="btn btn-warning">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr class="text-center" >
                        <td>0000002</td>
                        <td>Alcohol</td>
                        <td>Alcohol para eliminar bacterias</td>
                        <td>20.00</td>
                        <td>24</td>
                        <td>6000</td>
                        <td>Alchol Etílico</td>
                        <td>
                            <a href="client-update.html" class="btn btn-success">
                                <i class="fas fa-sync-alt"></i>	
                            </a>
                        </td>
                        <td>
                            <form action="">
                                <button type="button" class="btn btn-warning">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr class="text-center" >
                        <td>0000003</td>
                        <td>Alcohol</td>
                        <td>Alcohol para eliminar bacterias</td>
                        <td>20.00</td>
                        <td>24</td>
                        <td>6000</td>
                        <td>Alchol Etílico</td>
                        <td>
                            <a href="client-update.html" class="btn btn-success">
                                <i class="fas fa-sync-alt"></i>	
                            </a>
                        </td>
                        <td>
                            <form action="">
                                <button type="button" class="btn btn-warning">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr class="text-center" >
                        <td>0000003</td>
                        <td>Alcohol</td>
                        <td>Alcohol para eliminar bacterias</td>
                        <td>20.00</td>
                        <td>24</td>
                        <td>6000</td>
                        <td>Alchol Etílico</td>
                        <td>
                            <a href="client-update.html" class="btn btn-success">
                                <i class="fas fa-sync-alt"></i>	
                            </a>
                        </td>
                        <td>
                            <form action="">
                                <button type="button" class="btn btn-warning">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--<nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Anterior</a>
                </li>
                <li class="page-item"><a class="aqui va el link de la pagina" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Siguiente</a>
                </li>
            </ul>
        </nav>-->
    </div>