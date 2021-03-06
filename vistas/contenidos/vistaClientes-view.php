<!-- Page header -->
<div class="full-box page-header">
        <h3 class="text-left">
            <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CLIENTES
        </h3>
        
    </div>

    <div class="container-fluid">
        <ul class="full-box list-unstyled page-nav-tabs">
            <li>
                <a href="<?php echo ServerUrl;?>nuevoCliente/"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR CLIENTE</a>
            </li>
            <li>
                <a class="active" href="<?php echo ServerUrl;?>vistaClientes/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CLIENTES</a>
            </li>
            <li>
                <a href="<?php echo ServerUrl;?>buscarCliente/"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR CLIENTE</a>
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
                        <th>RTN</th>
                        <th>NOMBRE</th>
                        <th>CORREO</th>
                        <th>TELEFONO</th>
                        <th>DIRECCIÓN</th>
                        <th>ACTUALIZAR</th>
                        <th>ELIMINAR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center" >
                        <td>1</td>
                        <td>0803199800498</td>
                        <td>Fernando Lopez</td>
                        <td>fd_lopezb@unicah.edu</td>
                        <td>89697943</td>
                        <td>
                            <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Nombre del cliente" data-content="Direccion completa del cliente">
                                <i class="fas fa-info-circle"></i>
                            </button>
                        </td>
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
                        <td>2</td>
                        <td>0803199800498</td>
                        <td>Fernando Lopez</td>
                        <td>fd_lopezb@unicah.edu</td>
                        <td>89697943</td>
                        <td>
                            <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Nombre del cliente" data-content="Direccion completa del cliente">
                                <i class="fas fa-info-circle"></i>
                            </button>
                        </td>
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
                        <td>3</td>
                        <td>0803199800498</td>
                        <td>Fernando Lopez</td>
                        <td>fd_lopezb@unicah.edu</td>
                        <td>89697943</td>
                        <td>
                            <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Nombre del cliente" data-content="Direccion completa del cliente">
                                <i class="fas fa-info-circle"></i>
                            </button>
                        </td>
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
                        <td>4</td>
                        <td>0803199800498</td>
                        <td>Fernando Lopez</td>
                        <td>fd_lopezb@unicah.edu</td>
                        <td>89697943</td>
                        <td>
                            <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Nombre del cliente" data-content="Direccion completa del cliente">
                                <i class="fas fa-info-circle"></i>
                            </button>
                        </td>
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