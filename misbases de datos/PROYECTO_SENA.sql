drop database if exists PROYECTO_SENA;
drop table usuario;
use proyecto_sena;
use bolitcm17gznhmyd2rid;

select * from usuario
;
CREATE DATABASE PROYECTO_SENA;
USE PROYECTO_SENA;

create table rolUsuario(
idRolUsuario int not null ,
primary key(idRolUsuario),
descripcionRolUsuario varchar(30) not null,
estadoRolUsuario varchar(30)not null
);

CREATE TABLE Producto(
idProducto int not null auto_increment,
primary key(idProducto),
descripProducto varchar(100) NOT NULL,
precioProducto double not null,
categoriaProducto varchar(40) not null,
estadoProducto varchar(30)
);

CREATE TABLE Usuario(
idUsuario int not null auto_increment,
PRIMARY KEY(idUsuario),
tipoDocUsuario VARCHAR (30),
noDocUsuario VARCHAR (20) ,

nombreUsuario varchar (50),
apellidoUsuario varchar (50),
direccionUsuario varchar (80),
telefonoUsuario varchar (20),
correoUsuario varchar (70),
passwordusuario varchar (20),
fotoUsuario blob ,
estadoUsuario varchar (30),
idRolUsuarioFK int not null,

FOREIGN KEY(idRolUsuarioFK) REFERENCES rolUsuario (idRolUsuario)

);
insert into
 usuario (tipoDocUsuario,noDocUsuario,nombreUsuario,apellidoUsuario,direccionUsuario,telefonoUsuario,correoUsuario,passwordusuario,idRolUsuarioFK) 
 values ('cedula',7854437,'pedro','barragan','Calle 10 No. 9 - 78  Centro ',3245623754,'pedrobgn55@gmail.com','454535345',1);
create table Pedido(
idPedido int not null auto_increment,
primary key(idPedido),
fechaPedido date not null,
horaPedido time not null,
totalPedido double not null,
estadoPedido varchar (30) not null,
pedidoaDomicilio char (3) not null,
idUsuarioFK int not null,
FOREIGN KEY (idUsuarioFK) REFERENCES Usuario (idUsuario)

);

SHOW CREATE TABLE Domicilio;
create table Domicilio(
idDomicilio int not null auto_increment,
primary key(idDomicilio),
horaDomicilio time not null,
estadoDomicilio varchar (30) not null,
idPedidoFK int not null,
idDomiciliarioFK int not null,
FOREIGN KEY (idDomiciliarioFK) REFERENCES Usuario (idUsuario)
);

ALTER TABLE Domicilio ADD FOREIGN KEY (idPedidoFK) REFERENCES Pedido (idPedido);


create table detallePedido(
idDetallePedido int not null auto_increment,
primary key(idDetallePedido),
cantidadProducto int not null,
precioProducto double not null,
subtotalProducto double not null,
idPedidoFK int not null,
idProductoFK int not null,
FOREIGN KEY (idPedidoFK) REFERENCES Pedido (idPedido)
);
ALTER TABLE detallePedido ADD FOREIGN KEY (idProductoFK) REFERENCES Producto (idProducto);


#rol usuario

show tables;

-- CONSULTAS

-- replace

REPLACE INTO rolUsuario VALUES (21,'administrador','A');
REPLACE INTO Usuario VALUES (7,'ti',1375434,'pedro','emili','callesur2a5-193',3245623754,'pedrobgn55@gmailcom','pedro4356barragan12' ,'activo');
REPLACE INTO Pedido VALUES (5,10-2-22,'24:47:36.0000',23000,'en camino');
REPLACE INTO Producto VALUES (1,'biscoho de achiras 240gramos',16000,'pasabocas','disponible');
REPLACE INTO rolUsuario VALUES (17,'cliente','A');

#select

SELECT * FROM Producto;



SELECT * FROM Usuario;
SELECT * FROM rolUsuario;
SELECT * FROM Domicilio;
SELECT * FROM detallePedido;

#select-where

SELECT * FROM rolUsuario WHERE descripcionRolUsuario ='administrador';
SELECT * FROM rolUsuario WHERE descripcionRolUsuario ='domiciliario';
SELECT * FROM rolUsuario WHERE descripcionRolUsuario ='cliente';
SELECT * FROM Usuario WHERE tipoDocUsuario = 'ti';
SELECT * FROM Usuario WHERE tipoDocUsuario = 'cedula';
SELECT * FROM Usuario WHERE idUsuario = 23;
SELECT * FROM Pedido WHERE pedidoaDomicilio='si' AND estadoPedido='en camino';
SELECT * FROM Usuario WHERE estadoUsuario = 'activo';
SELECT * FROM detallePedido WHERE idDetallePedido = '5';
SELECT * FROM detallePedido WHERE cantidadProducto = 2;
SELECT * FROM Domicilio WHERE estadoDomicilio = 'entregado';
SELECT * FROM Usuario WHERE nombreUsuario = 'einer';
SELECT * FROM Pedido WHERE horaPedido = '24:47:36.0000';
SELECT * FROM Usuario WHERE noDocUsuario = '7834218';
SELECT * FROM Producto WHERE descripProducto = 'cuca huilense';

-- operadores logicos
SELECT * FROM Usuario WHERE tipoDocUsuario <> 'cedula';
SELECT * FROM Pedido WHERE totalPedido <= 10000;
SELECT * FROM detallePedido WHERE cantidadProducto >= 2;
SELECT * FROM producto WHERE precioProducto >= 10000;
SELECT * FROM pedido WHERE estadoPedido <> 'recibido';
SELECT * FROM pedido WHERE pedidoaDomicilio <> 'no';
SELECT * FROM Usuario WHERE apellidoUsuario = 'barragan';

-- like - No like
SELECT * FROM Usuario WHERE correoUsuario NOT LIKE'%@gmail%' ;
SELECT * FROM Usuario WHERE telefonoUsuario LIKE '305%';
SELECT * FROM Usuario WHERE tipoDocUsuario NOT LIKE'ti' AND tipoDocUsuario NOT LIKE'pasaporte' ;
SELECT * FROM Usuario WHERE tipoDocUsuario NOT LIKE'cedula';

-- havuing
SELECT MIN(precioProducto) FROM Producto GROUP BY precioProducto HAVING MIN(precioProducto) >1000;


-- update
UPDATE Usuario SET correoUsuario='olakeace@gmail.com'  where idUsuario=3; 
UPDATE Usuario SET passwordUsuario='123654'  where idUsuario=4; 
UPDATE Usuario SET correoUsuario='olakeace@gmail.com'  where idUsuario=3; 
UPDATE Usuario SET correoUsuario='olakeace@gmail.com'  where idUsuario=3; 
UPDATE Usuario SET correoUsuario='olakeace@gmail.com'  where idUsuario=3; 
UPDATE Usuario SET correoUsuario='olakeace@gmail.com'  where idUsuario=3; 
UPDATE Usuario SET correoUsuario='olakeace@gmail.com'  where idUsuario=3; 
UPDATE Usuario SET correoUsuario='olakeace@gmail.com'  where idUsuario=3; 
UPDATE Usuario SET correoUsuario='olakeace@gmail.com'  where idUsuario=3; 
UPDATE Usuario SET correoUsuario='olakeace@gmail.com'  where idUsuario=3; 
UPDATE Usuario SET correoUsuario='olakeace@gmail.com'  where idUsuario=3; 
UPDATE Usuario SET correoUsuario='olakeace@gmail.com'  where idUsuario=3; 
UPDATE Usuario SET correoUsuario='olakeace@gmail.com'  where idUsuario=3; 
UPDATE Usuario SET correoUsuario='olakeace@gmail.com'  where idUsuario=3; 
UPDATE Usuario SET correoUsuario='olakeace@gmail.com'  where idUsuario=3; 
UPDATE Usuario SET correoUsuario='olakeace@gmail.com'  where idUsuario=3; 
-- delete

DELETE FROM Usuario  Where tipoDocUsuario = 'ti' and idUsuario = 13;
DELETE FROM Usuario  Where tipoDocUsuario = 'ti' and idUsuario = 10;
DELETE FROM Usuario  Where tipoDocUsuario = 'ti' and idUsuario = 25;
DELETE FROM Usuario  Where tipoDocUsuario = 'ti' and idUsuario = 7;
DELETE FROM Usuario  Where tipoDocUsuario = 'ti' and idUsuario = 1;
-- ordenar
select U.idUsuario, U.nombreUsuario, U.telefonoUsuario, R.descripcionRolUsuario from Usuario U left join rolUsuario R on U.idRolUsuarioFK = R.idRolUsuario;
select U.idUsuario, U.nombreUsuario, U.telefonoUsuario, R.descripcionRolUsuario from Usuario U left join rolUsuario R on U.idRolUsuarioFK = R.idRolUsuario 
where R.descripcionRolUsuario='domiciliario';
select P.idProducto, P.descripProducto, P.precioProducto, DP.subtotalProducto from detallePedido DP right join Producto P on P.idProducto=DP.idProductoFK;
select D.estadoDomicilio,Pe.totalPedido from Pedido Pe left join Domicilio D on idPedido=idPedidoFK;
select P.descripProducto,DP.subtotalProducto ,DP.cantidadProducto from detallePedido DP left join Producto P on idProductoFK = idProducto;
-- TRIGUER

create view


delimiter$
create procedure Crear_usuario (in descripcionRolUsuario varchar(30),in estadoRolUsuario varchar(30)) 
begin
insert into rolUsuario(descripcionRolUsuario,estadoRolUSuario) values ('domiciliario','A');
end $
call Crear_usuario('domicilario','A');

















