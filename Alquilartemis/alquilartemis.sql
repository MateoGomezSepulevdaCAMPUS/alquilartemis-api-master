CREATE DATABASE Alquilartemis;

USE Alquilartemis;

DROP DATABASE Alquilartemis;
DROP TABLE IF EXISTS Cotizacion_Producto;
DROP TABLE IF EXISTS Cotizaciones;
DROP TABLE IF EXISTS Empleados;
DROP TABLE IF EXISTS Clientes;
DROP TABLE IF EXISTS Productos;
DROP TABLE IF EXISTS Constructoras;
DROP TABLE IF EXISTS Personas;

CREATE TABLE Personas(
    id_persona INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(30),
    edad INT,
    telefono INT(20),
    sexo VARCHAR(29),
    direccion VARCHAR(50),
    PRIMARY KEY(id_persona)
);
INSERT INTO `personas` (`id_persona`,`nombre`,`edad`,`telefono`,`sexo`,`direccion`) VALUES
(1, 'MATEO', 23, 3157628210, 'MASCULINO', 'CLL 108A # 15-37');

CREATE TABLE Constructoras(
    id_constructora INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(30) NOT NULL,
    direccion VARCHAR(50) NOT NULL,
    PRIMARY KEY(id_constructora)
);
INSERT INTO `Constructoras` (`id_constructora`,`nombre`,`direccion`) VALUES (1, 'MATEO', 'CLL 108A # 15-37');

CREATE TABLE Productos(
    id_producto INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(30) NOT NULL,
    PRIMARY KEY(id_producto)
);

CREATE TABLE Clientes(
    id_cliente INT NOT NULL AUTO_INCREMENT,
    idetificador_persona INT,
    PRIMARY KEY(id_cliente),
    FOREIGN KEY (idetificador_persona) REFERENCES Personas(id_persona)
);

CREATE TABLE Empleados(
    id_empleado INT NOT NULL AUTO_INCREMENT,
    id_persona INT,
    usuario VARCHAR(30),
    password VARCHAR(255),
    id_constructora INT,
    PRIMARY KEY(id_empleado),
    FOREIGN KEY (id_persona) REFERENCES Personas(id_persona),
    FOREIGN KEY (id_constructora) REFERENCES Constructoras (id_constructora)
);

CREATE TABLE Cotizaciones(
    id_cotizacion INT NOT NULL AUTO_INCREMENT,
    id_cliente INT,
    PRIMARY KEY(id_cotizacion),
    id_empleado INT,
    duracion_alquiler INT NOT NULL,
    precio_total FLOAT(50) NOT NULL,
    fecha DATETIME NOT NULL,
    FOREIGN KEY (id_cliente) REFERENCES Clientes(id_cliente),
    FOREIGN KEY (id_empleado) REFERENCES Empleados(id_empleado)
);

CREATE TABLE Cotizacion_Producto(
    id_cotizacion_producto INT NOT NULL AUTO_INCREMENT,
    id_cotizacion INT,
    id_producto INT,
    PRIMARY KEY(id_cotizacion_producto),
    FOREIGN KEY (id_cotizacion) REFERENCES Cotizaciones(id_cotizacion),
    FOREIGN KEY (id_producto) REFERENCES Productos(id_producto)
);

CREATE TABLE Obras(
    id_obra INT NOT NULL AUTO_INCREMENT,
    nombre_obra VARCHAR(100),
    direccion VARCHAR(100),
    PRIMARY KEY (id_obra)
);

CREATE TABLE Alquiler(
    id_alquiler INT NOT NULL AUTO_INCREMENT,
    id_cliente INT,
    fecha_alquiler DATETIME,
    hora_alquiler DATETIME,
    subtotal_peso INT,
    id_empleado INT,
    placa_transporte VARCHAR(50),
    observaciones VARCHAR(100),
    PRIMARY KEY(id_alquiler),
    FOREIGN KEY (id_cliente) REFERENCES Clientes(id_cliente),
    FOREIGN KEY (id_empleado) REFERENCES Empleados(id_empleado)
);

CREATE TABLE Alquiler_detalle(
    id_alquiler_detalle INT NOT NULL AUTO_INCREMENT,
    id_alquiler INT,
    id_producto INT,
    id_obra INT,
    id_empleado INT,
    cantidad_alquiler INT,
    cantidad_propia INT,
    cantidad_subalquilada INT,
    valor_unidad INT,
    fecha_standBye DATETIME,
    estado VARCHAR(50),
    valorTotal INT,
    PRIMARY KEY(id_alquiler_detalle),
    FOREIGN KEY (id_alquiler) REFERENCES Alquiler(id_alquiler),  
    FOREIGN KEY (id_producto) REFERENCES Productos(id_producto),
    FOREIGN KEY (id_obra) REFERENCES Obras(id_obra),
    FOREIGN KEY (id_empleado) REFERENCES Empleados(id_empleado)
);

CREATE TABLE Devoluciones(
    id_devolucion INT NOT NULL AUTO_INCREMENT,
    id_alquiler INT,
    id_empleado INT,
    id_cliente INT,
    fecha_devolucion DATETIME,
    hora_devolucion DATETIME,
    observaciones VARCHAR(100),
    PRIMARY KEY(id_devolucion),
    FOREIGN KEY (id_alquiler) REFERENCES Alquiler(id_alquiler),
    FOREIGN KEY (id_empleado) REFERENCES Empleados(id_empleado),
    FOREIGN KEY (id_cliente) REFERENCES Clientes(id_cliente)
);

CREATE TABLE Devolucion_detalle(
    id_devolucion_detalle INT NOT NULL AUTO_INCREMENT,
    id_devolucion INT,
    id_producto INT,
    id_obra INT,
    cantidad_devolucion INT,
    cantidad_devolucion_propia INT,
    cantidad_devolucion_subalquilada INT,
    estado VARCHAR(100),
    PRIMARY KEY (id_devolucion_detalle),
    FOREIGN KEY (id_devolucion) REFERENCES Devoluciones(id_devolucion),
    FOREIGN KEY (id_producto) REFERENCES Productos(id_producto),
    FOREIGN KEY (id_obra) REFERENCES Obras(id_obra)
);

CREATE TABLE Inventario(
    id_inventario INT NOT NULL AUTO_INCREMENT,
    id_producto INT,
    cantidad_inicial INT,
    id_devolucion_detalle INT,
    id_alquiler_detalle INT,
    cantidad_final INT,
    fecha_inventario DATETIME,
    tipo_operacion VARCHAR(100),
    PRIMARY KEY (id_inventario),
    FOREIGN KEY (id_producto) REFERENCES Productos(id_producto),
    FOREIGN KEY (id_devolucion_detalle) REFERENCES Devolucion_detalle(id_devolucion_detalle),
    FOREIGN KEY (id_alquiler_detalle) REFERENCES Alquiler_detalle(id_alquiler_detalle)
);


