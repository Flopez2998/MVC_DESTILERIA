USE Destileria2021;


create table `categoria`(`id_categoria` bigint(10) NOT NULL AUTO_INCREMENT,
        `desc_categoria` VARCHAR(50) NOT NULL,
        PRIMARY KEY (`id_categoria`))ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

create table `productos`(`id_producto` bigint(10) NOT NULL AUTO_INCREMENT,
        `nombre` VARCHAR(50) NOT NULL,
        `descripcion` VARCHAR(70) NOT NULL,
        `precio` DECIMAL(13,2) DEFAULT NULL,
        `stock` INT DEFAULT NULL,
        `id_categoria` bigint(10) NOT NULL,
        PRIMARY KEY (`id_producto`) ,
        CONSTRAINT `categorias_key` FOREIGN KEY (`id_categoria`) references `categoria`(`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION)
        ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
        

create table `estados`(`id_estado` INT NOT NULL ,
    `descripcion_estado` VARCHAR(5) NOT NULL,
    PRIMARY KEY (`id_estado`))ENGINE=InnoDB  DEFAULT CHARSET=utf8;

create table `roles`(`id_rol` VARCHAR(10) NOT NULL,
    `descripcion_rol` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`id_rol`))ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table `empleados`(`id_empleado` bigint(10) NOT NULL AUTO_INCREMENT,
        `nombre` VARCHAR(50) NOT NULL,
        `identidad` VARCHAR(15) NOT NULL,
        `correo` VARCHAR(35) NOT NULL,
        `direccion` VARCHAR(100) DEFAULT NULL,
        `telefono` VARCHAR(15) DEFAULT NULL,
        `fecha_ingreso` DATETIME NOT NULL,
        `sueldo` DECIMAL(13,2) DEFAULT NULL,
        `id_estado` INT NOT NULL,
        PRIMARY KEY (`id_empleado`),
        UNIQUE KEY `correo_UNIQUE` (`correo`),
        CONSTRAINT `estados_id` FOREIGN KEY (`id_estado`) references `estados`(`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION)
        ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

create table `clientes`(`id_cliente` bigint(10) NOT NULL AUTO_INCREMENT,
        `nombre` VARCHAR(50) NOT NULL,
        `rtn` VARCHAR(16) DEFAULT NULL,
        `correo` VARCHAR(35) DEFAULT NULL,
        `direccion` VARCHAR(100) DEFAULT NULL,
        `telefono` VARCHAR(15) DEFAULT NULL,
        `id_estado` INT NOT NULL,
            PRIMARY KEY (`id_cliente`),
        CONSTRAINT `estados_key_id`FOREIGN KEY (`id_estado`) references `estados`(`id_estado`)ON DELETE NO ACTION ON UPDATE NO ACTION
        )ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

create table `cuentas_bancarias`(`id_cuenta` bigint(10) NOT NULL AUTO_INCREMENT,
                `No_cuenta` VARCHAR(20) NOT NULL,
                `tipo_cuenta` VARCHAR(25) DEFAULT NULL,
                `beneficiario` VARCHAR(30) DEFAULT NULL,
                PRIMARY KEY (`id_cuenta`)
                )ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

create table `bancos`(`id_banco` bigint(10) NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(50) NOT NULL,
    `id_cuenta` bigint(10) NOT NULL,
    PRIMARY KEY(`id_banco`),
    CONSTRAINT `cuentas_id` FOREIGN KEY(`id_cuenta`) references `cuentas_bancarias`(`id_cuenta`)
    ON DELETE NO ACTION ON UPDATE NO ACTION)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE `cotizacion_resumen`(`id_cotizacion_resumen` bigint(10) NOT NULL AUTO_INCREMENT,
                `nombre_destileria` VARCHAR(50) DEFAULT NULL,
                `rtn_destileria` VARCHAR(16) DEFAULT NULL,
                `direccion_destileria` VARCHAR(100) NOT NULL,
                `fecha_cotizacion` DATETIME NOT NULL,
                `fecha_valida_cotizacion` DATETIME NOT NULL,
                `telefono_destileria` VARCHAR(13) DEFAULT NULL,
                `id_empleado` BIGINT(10) NOT NULL,
                `id_clientes` BIGINT(10) NOT NULL,
                `id_banco` BIGINT(10) NOT NULL,
                PRIMARY KEY (`id_cotizacion_resumen`),
                CONSTRAINT `empleados_id` FOREIGN KEY (`id_empleado`) references `empleados`(`id_empleado`)
                 ON DELETE NO ACTION ON UPDATE NO ACTION,
                CONSTRAINT `clientes_id` FOREIGN KEY (`id_clientes`) references `clientes`(`id_cliente`)
                ON DELETE NO ACTION ON UPDATE NO ACTION,
                CONSTRAINT `bnacos_id` FOREIGN KEY (`id_banco`) references `bancos`(`id_banco`)
                 ON DELETE NO ACTION ON UPDATE NO ACTION
                )ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE `cotizacion_detalle`(`id_cotizacion_resumen` bigint(10) NOT NULL,
                `id_producto` bigint(10) NOT NULL,
                `unidades_por_caja` INT,
                CONSTRAINT `cotizaciones_resumen_id` FOREIGN KEY(`id_cotizacion_resumen`) references `cotizacion_resumen`(`id_cotizacion_resumen`)ON DELETE NO ACTION ON UPDATE NO ACTION,
                CONSTRAINT `productos_id` FOREIGN KEY(`id_producto`) references `productos`(`id_producto`)
                ON DELETE NO ACTION ON UPDATE NO ACTION)ENGINE=InnoDB DEFAULT CHARSET=utf8;
                
CREATE TABLE `usuarios`(`id_usuario` bigint(10) NOT NULL AUTO_INCREMENT,
        `nombre` VARCHAR(30) NOT NULL,
        `contraseña` VARCHAR(30) NOT NULL,
        `id_empleado` BIGINT(10) NOT NULL,
        PRIMARY KEY(`id_usuario`),
        CONSTRAINT `empleados_KEY_id` FOREIGN KEY(`id_empleado`) references `empleados`(`id_empleado`)
        ON DELETE NO ACTION ON UPDATE NO ACTION
        )ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
        
CREATE TABLE `roles_usuarios`(`id_usuario` bigint(10) NOT NULL,
                `id_rol` VARCHAR(10) NOT NULL,
                PRIMARY KEY (`id_usuario`,`id_rol`),
                KEY `rol_usuario_key_idx` (`id_rol`),
                CONSTRAINT `usuario_rol_key` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios`(`id_usuario`) 
                ON DELETE NO ACTION ON UPDATE NO ACTION,
                CONSTRAINT `rol_usuario_key` FOREIGN KEY (`id_rol`) REFERENCES `roles`(`id_rol`) 
                ON DELETE NO ACTION ON UPDATE NO ACTION
            )ENGINE=InnoDB  DEFAULT CHARSET=utf8;
