<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php echo NombreEmpresa;?></title>

    <!---Enlaces a estilos css -->
  <?php include "./vistas/utilidades/linkEstilosCss.php";?>	

</head>
<body>
	<?php
        $peticionAjax = false;
        require_once "./controladores/vistasControlador.php";
        $vistasInstancia = new vistasControlador();

        $vistas = $vistasInstancia->obtenerVistasControlador();

        if($vistas=="login" || $vistas=="404"){
            require_once "./vistas/contenidos/".$vistas."-view.php";
        }else{  
    ?>

	<!-- Main container -->
	<main class="full-box main-container">
		<!---Menu Lateral -->
        <?php include "./vistas/utilidades/menuLateral.php";?>
		
        <!-- Page content -->
		<section class="full-box page-content">
			<!---Barra de Navegacion -->
            <?php include "./vistas/utilidades/barraNavegacion.php";
                include $vistas;
            ?>   
        </section>
	</main>

    	<!---Archivos Scripts -->
    <?php 
        }
        include "./vistas/utilidades/scripts.php";
    ?>
	
	</body>
</html>