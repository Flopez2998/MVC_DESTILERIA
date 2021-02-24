
USE destileria

create table categoria(id_categoria INT NOT NULL AUTO_INCREMENT,
						desc_categoria VARCHAR(50) NOT NULL,
                        PRIMARY KEY (id_categoria));

create table productos(id_producto INT NOT NULL AUTO_INCREMENT,
						nombre VARCHAR(50) NOT NULL,
                        descripcion VARCHAR(70) NOT NULL,
                        precio DECIMAL(13,2) NOT NULL,
                        ipc_producto DECIMAL(5,2),
                        stock INT NOT NULL,
                        id_categoria INT NOT NULL,
                        PRIMARY KEY (id_producto),
                        FOREIGN KEY (id_categoria) references categoria(id_categoria));
                        

create table estados(id_estado INT NOT NULL AUTO_INCREMENT,
					descripcion_estado VARCHAR(5) NOT NULL,
                    PRIMARY KEY (id_estado));

create table roles(id_rol INT NOT NULL AUTO_INCREMENT,
					descripcion_rol VARCHAR(50) NOT NULL,
                    PRIMARY KEY (id_rol));

create table empleados(id_empleado INT NOT NULL AUTO_INCREMENT,
						nombre VARCHAR(50) NOT NULL,
                        identidad VARCHAR(15) NOT NULL,
                        correo VARCHAR(35) NOT NULL,
                        direccion VARCHAR(100) NOT NULL,
                        telefono VARCHAR(15) NOT NULL,
                        fecha_ingreso DATETIME NOT NULL,
                        sueldo DECIMAL(13,2),
                        id_rol INT NOT NULL,
                        id_estado INT NOT NULL,
                        PRIMARY KEY (id_empleado),
                        FOREIGN KEY (id_rol) references roles(id_rol),
                        FOREIGN KEY (id_estado) references estados(id_estado));

create table clientes(id_cliente INT NOT NULL AUTO_INCREMENT,
						nombre VARCHAR(50) NOT NULL,
                        rtn VARCHAR(16) NOT NULL,
                        correo VARCHAR(35) NOT NULL,
                        direccion VARCHAR(100) NOT NULL,
                        telefono VARCHAR(15) NOT NULL,
                        id_estado INT NOT NULL,
                        PRIMARY KEY (id_cliente),
                        FOREIGN KEY (id_estado) references estados(id_estado));

create table cuentas_bancarias(id_cuenta INT NOT NULL AUTO_INCREMENT,
								No_cuenta VARCHAR(20) NOT NULL,
                                tipo_cuenta VARCHAR(25) NOT NULL,
                                beneficiario VARCHAR(30),
                                PRIMARY KEY (id_cuenta));

create table bancos(id_banco INT NOT NULL AUTO_INCREMENT,
					nombre VARCHAR(40) NOT NULL,
                    id_cuenta INT NOT NULL,
                    PRIMARY KEY(id_banco),
                    FOREIGN KEY(id_cuenta) references cuentas_bancarias(id_cuenta)
                    );

CREATE TABLE cotizacion_resumen(id_cotizacion_resumen INT NOT NULL AUTO_INCREMENT,
								nombre_destileria VARCHAR(50) NOT NULL,
                                rtn_destileria VARCHAR(16) NOT NULL,
                                direccion_destileria VARCHAR(100) NOT NULL,
                                fecha_cotizacion DATETIME NOT NULL,
                                fecha_valida_cotizacion DATETIME NOT NULL,
                                telefono_destileria VARCHAR(13) NOT NULL,
                                id_empleado INT NOT NULL,
                                id_clientes INT NOT NULL,
                                id_banco INT NOT NULL,
                                PRIMARY KEY (id_cotizacion_resumen),
                                FOREIGN KEY (id_empleado) references empleados(id_empleado),
                                FOREIGN KEY (id_clientes) references clientes(id_cliente),
                                FOREIGN KEY (id_banco) references bancos(id_banco)
                                );

CREATE TABLE cotizacion_detalle(id_cotizacion_resumen INT NOT NULL,
								id_producto INT NOT NULL,
                                unidades_por_caja INT,
                                FOREIGN KEY(id_cotizacion_resumen) references cotizacion_resumen(id_cotizacion_resumen),
                                FOREIGN KEY(id_producto) references productos(id_producto)
                                );
                                
CREATE TABLE usuarios(id_usuario INT NOT NULL,
						nombre VARCHAR(30) NOT NULL,
                        contraseña VARCHAR(30) NOT NULL,
                        id_empleado INT NOT NULL,
                        PRIMARY KEY(id_usuario),
                        FOREIGN KEY(id_empleado) references empleados(id_empleado)
                        );
