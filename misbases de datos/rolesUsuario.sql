use proyecto_sena;
use bolitcm17gznhmyd2rid;
insert into rolUsuario(idRolUsuario,descripcionRolUsuario,estadoRolUsuario) values
(1,'usuario','A'),
(2,'domiciliario','A'),
(3,'administrador','A');

select * from  rolUsuario;
select * from  Usuario;

UPDATE usuario SET fotoUsuario=112 WHERE idUsuario=1;