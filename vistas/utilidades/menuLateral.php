<!-- Nav lateral -->
<section class="full-box nav-lateral">
    <div class="full-box nav-lateral-bg show-nav-lateral"></div>
    <div class="full-box nav-lateral-content">
        <figure class="full-box nav-lateral-avatar">
            <i class="far fa-times-circle show-nav-lateral"></i>
            <img src="<?php echo ServerUrl;?>vistas/assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
            <figcaption class="roboto-medium text-center">
                Fernando Lopez <br><small class="roboto-condensed-light">Desarrollador Web</small>
            </figcaption>
        </figure>
        <div class="full-box nav-lateral-bar"></div>
        <nav class="full-box nav-lateral-menu">
            <ul>
                <li>
                    <a href="home/"><i class="fab fa-dashcube fa-fw"></i> &nbsp; OPCIONES</a>
                </li>

                <li>
                    <a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Clientes <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href=" <?php echo ServerUrl;?>nuevoCliente/"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Cliente</a>
                        </li>
                        <li>
                            <a href="<?php echo ServerUrl;?>vistaClientes/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de clientes</a>
                        </li>
                        <li>
                            <a href="<?php echo ServerUrl;?>buscarCliente/"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar cliente</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Productos <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="<?php echo ServerUrl;?>nuevoProducto/"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Producto</a>
                        </li>
                        <li>
                            <a href="<?php echo ServerUrl;?>listaProductos/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Productos</a>
                        </li>
                        <li>
                            <a href="<?php echo ServerUrl;?>buscarProducto/"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Producto</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="nav-btn-submenu"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Cotizaciones <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="<?php echo ServerUrl;?>nuevaCotizacion/"><i class="fas fa-plus fa-fw"></i> &nbsp; Nueva Cotizacion</a>
                        </li>
                        <li>
                            <a href="<?php echo ServerUrl;?>listaCotizaciones/"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; Cotizaciones</a>
                        </li>
                        <li>
                            <a href="<?php echo ServerUrl;?>finalizadas/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Finalizadas</a>
                        </li>
                        <li>
                            <a href="reservation-search.html"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; Buscar por fecha</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Usuarios <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="<?php echo ServerUrl;?>nuevoUsuario/"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo usuario</a>
                        </li>
                        <li>
                            <a href="<?php echo ServerUrl;?>listaUsuarios/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de usuarios</a>
                        </li>
                        <li>
                            <a href="<?php echo ServerUrl;?>buscarUsuario"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar usuario</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Cuentas Bancarias <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="<?php echo ServerUrl;?>nuevaCuenta/"><i class="fas fa-plus fa-fw"></i> &nbsp; Nueva cuenta</a>
                        </li>
                        <li>
                            <a href="<?php echo ServerUrl;?>listaCuentas/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de cuentas </a>
                        </li>
                        <li>
                            <a href="<?php echo ServerUrl;?>/buscarCuenta"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar cuenta</a>
                        </li>
                    </ul>
                </li>

                <!--<li>
                    <a href="company.html"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Empresa</a>
                </li>-->
            </ul>
        </nav>
    </div>
</section>