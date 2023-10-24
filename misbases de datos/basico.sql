use proyecto_sena;
show tables;
select * from usuario;
select * from producto;
select * from pedido;

insert into pedido (fechaPedido,horaPedido,totalPedido,estadoPedido,pedidoaDomicilio,idUSuarioFK) values ('24/10/23',0131,40000,'en camino','si',3);
 insert into Usuario (tipoDocUsuario,noDocUsuario,nombreUsuario,apellidoUsuario,direccionUsuario,telefonoUsuario,correoUsuario,passwordusuario,estadoUsuario,idRolUsuarioFK) value 
 ('cedula',7854437,'helen','hernandez','Calle 10 No. 9 - 78  Centro ',3245623754,'helentatiana170707@gmail.com','moreno123' ,'inactivo',3);

update usuario set idRolUsuarioFK='3' where idUsuario=3;
