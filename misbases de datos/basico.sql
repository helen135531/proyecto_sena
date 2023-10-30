use proyecto_sena;
use bolitcm17gznhmyd2rid;
show tables;
select * from usuario;
select * from Producto;
select * from Pedido;
/*--------------------------------------------------------------------insertar datos------------------------------------------------------------------------*/

/*insertar pedido*/
insert into Pedido (fechaPedido,horaPedido,totalPedido,estadoPedido,pedidoaDomicilio,idUSuarioFK) values ('24/10/23',0131,89000,'pendiente','si',32);
 /*insetra admin*/
 insert into usuario (tipoDocUsuario,noDocUsuario,nombreUsuario,apellidoUsuario,direccionUsuario,telefonoUsuario,correoUsuario,passwordusuario,estadoUsuario,idRolUsuarioFK) value 
 ('cedula',7854437,'helen','hernandez','Calle 10 No. 9 - 78  Centro ',3245623754,'helentatiana170707@gmail.com','moreno123' ,'inactivo',3);
 /*insertar domiciliario*/
 insert into usuario (tipoDocUsuario,noDocUsuario,nombreUsuario,apellidoUsuario,direccionUsuario,telefonoUsuario,correoUsuario,passwordusuario,estadoUsuario,idRolUsuarioFK) value 
 ('cedula',7854437,'julian','sanchez','Calle 10 No. 9 - 78  Centro ',348564556,'domiciliario1@gmail.com','1234' ,'inactivo',2);
/*-----------------------------------------------------------------actualizar---------------------------------------------------------------------------*/
update usuario set idRolUsuarioFK='3' where idUsuario=3;
/*----------------------------------------------------------------------ver datos----------------------------------------------------------------------*/
SELECT COUNT(*) as total FROM Pedido WHERE estadoPedido='pendiente';
/*----------------------------------------------------------------------------eliminar datos----------------------------------------------------------------*/
DELETE 