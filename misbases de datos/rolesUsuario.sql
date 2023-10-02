use proyecto_sena;
insert into rolUsuario(idRolUsuario,descripcionRolUsuario) values
(1,'usuario'),
(2,'domiciliario'),
(3,'administrador');

select * from  rolUsuario;
select * from  Usuario;

UPDATE usuario SET fotoUsuario=112 WHERE idUsuario=1;