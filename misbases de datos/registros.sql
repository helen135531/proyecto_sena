#rol usuario
INSERT INTO rolUsuario(descripcionRolUsuario,estadoRolUsuario) VALUES 
('cliente','A'),
('domiciliario','I'),
('cliente','I'),
('administrador','A'),
('cliente','I'),
('cliente','I'),
('domiciliario','I'),
('administrador','A'),
('domiciliario','A'),
('aministrador','A'),
('cliente','I'),
('domiciliario','I'),
('cliente','A'),
('domiciliario','I'),
('domiciliario','A'),
('cliente','A'),
('domiciliario','I'),
('cliente','I'),
('cliente','I'),
('domiciliario','A'),
('cliente','A'),
('domiciliario','I'),
('cliente','I'),
('cliente','A'),
('cliente','I');

select * from rolUsuario ; 
update rolUsuario set jdescripcionRolUsuario=''  where idRolUsuario=10;

#producto

INSERT INTO Producto(descripProducto,precioProducto,categoriaProducto,estadoProducto) VALUES
('biscoho de achiras 240gramos',16000,'pasabocas','disponible'),
('biscoho de achiras 160gramos',10700,'pasabocas','disponible'),
('biscoho de maiz 240gramos',16000,'pasabocas','disponible'),
('biscoho de maiz 240gramos',16000,'pasabocas','disponible'),
('alfandoques',9000,'pasabocas','disponible'),
('biscoho de manteca 270gramos',9000,'pasabocas','disponible'),
('panderos 130gramos',16000,'pasabocas','disponible'),
('tamales',7000,'armuerzo','no disponible'),
('asado huilence acompañado con embuelto de arror y arepas delgadas',75000,'almuerzo','disponible'),
('cuca huilense',6000,'postre','disponible'),
('biscochuelo',6000,'postre','disponible'),
('gaseosa cola condor 250ml',2000,'bebida','disponible'),
('gasesosa cola condor 1000ml',5500,'bebida','disponible'),
('aguardiente doble anis',30000,'bebida','disponible'),
('emnvuelto de mazato x 5',6000,'otros','disponible'),
('quesillo huilense',10000,'otros','disponible');

update Producto set estadoProducto='no disponible'  where idProducto=10;
select * from Producto;

#usuarios

 insert into Usuario (tipoDocUsuario,noDocUsuario,nombreUsuario,apellidoUsuario,direccionUsuario,telefonoUsuario,correoUsuario,passwordusuario,estadoUsuario,idRolUsuarioFK) value 
 ('cedula',7854437,'pedro','barragan','Calle 10 No. 9 - 78  Centro ',3245623754,'pedrobgn55@gmail.com','pedro4356barragan12' ,'activo',1),
 ('ti',21356737,'juan','piñeda','Carrera 20 No. 25 - 53  Primer piso centro ',3701805504,'056hj@hotmail.com','ibñhc9647dyr4' ,'activo',2),
 ('cedula',3247896,'duvan','gomez','Calle 31 No. 13 - 71 of. 301 Edif. Rey ',3761726767,'ghktyi@gmail.com','pemjp0qf0ñx' ,'activo',3),
 ('cedula',789348,'roberto','castro','Calle 19 No. 8 - 34  of. 502 ',3265860447,'mbnv@gmail.com','8r20ommjt2tdnvgewkf' ,'desactivo',4),
 ('cedula',6873425,'julian','garzon','Cr 5 No. 9 - 08 ',3151838195,'opktyf67@gmail.com','eurh48gh' ,'activo',5),
 ('cedula',7893542,'oscar','castañeda','Calle 12 No. 4 - 19  Edificio Panamericano Of. 406 ',3619574969,'okjiyu6@gmail.com','r12ocu2lw67dyboo667z2v' ,'activo',6),
 ('ti',1375434,'emili','castañeda','',3054505032,'ui89@gmail.com','omertyero' ,'activo',7),
 ('cedula',8094563,'einer','villa','Calle 16 No. 23 - 57 piso 4  Edificio Autoservicio Abraham Delgado ',3848046712,'njkvbcc@gmail.com','9rpeio1kp' ,'activo',8),
 ('cedula',3246747,'william','hernandes','Calle 33B  No. 38 - 42  Barrio Barzal ',3756866890,'ñlkiop89@gmail.com','pj0ni29fui7bw9ñwjcm2e9cn8' ,'desactivo',9),
 ('cedula',3217646,'joseph','londoño','Calle 20 No. 3 - 22 ',3418342663,'fdg90@gmail.com','anxr7syy' ,'activo',10),
 ('pasaporte',7893412,'emanuel','velasquez','Carrera 9  No. 7 - 34 ',3345615512,'9860956@gmail.com','5eyñw63k03rux7a' ,'activo',11),
 ('cedula',23154675,'leopoldo','cruz','Calle 7 No. 5 - 25  Edificio Segunda ',3454765754,'vbnhkl@gmail.com','7ncdnwxs813ln77m' ,'desactivo',12),
 ('cedula',8096743,'beatriz','quevedo','Calle 28 No. 8 - 69 CENTRO ',3590557243,'klfg89@hotmail.com','qx2q0xrfzg5syr0mlbul7' ,'activo',13),
 ('cedula',7834218,'jeison','piñeda','Calle 28 No. 8 - 69 CENTRO ',3035929270,'nvbchjf@gmail.com','ckye85v33ñ' ,'activo',14),
 ('cedula',9856324,'jhon','romero','Calle 25 No. 4 - 38 piso 2  Barrio Pandeyuca ',3945915324,'89hjdf@gmail.com','xk5bz863uegf' ,'desactivo',15),
 ('pasaporte',8967342,'sebastian','rojas','Calle 15 No. 9 - 56 centro ',3688210396,'nbjvcgd@gmail.com','z8mffbodphv2uñd' ,'activo',16),
 ('cedula',8967435,'daniel','davila','Carrera  5 No. 3 -74  centro Carrera  5 No. 3 -74  centro ',3016554683,'unigdf5@gmail.com','l4z53eekyff0rujzqlnw' ,'activo',17),
 ('cedula',4356978,'alegandro','arristisabal','Carrera 8a No. 7 - 88 /94  Barrio  La Estrella ',3682675050,'lkhmg435@gmail.com','rhiy39on3ñi8b5ggk' ,'activo',18),
 ('cedula',6543216,'helen','ortiz','Calle 20 No. 22 - 27 piso 3 Edificio Cumanday ',3021874883,'fgd65@gmail.com','sols0p4sw63cikwfhw6net5' ,'desactivo',19),
 ('ti',127854437,'jonatan','cuevas','Carrera 8  No. 20 - 59 ',3601812267,'47gjf@gmail.com','35d4248iz6ca0' ,'activo',20),
 ('cedula',4356232,'mafe','cantor','Carrera 10A No. 20 - 40  Edificio El Clarín piso 3 Centro La Matuna ',3155231387,'rthdfb@gmail.com','ñzaot7mdyñ48pññ' ,'activo',21),
 ('cedula',7645321,'ana','linda','Calle 59 No. 27 - 35 Barrio Galán ',3169275047,'rtmho@gmail.com','ifyk002z6tsb12nehgmpz' ,'activo',22),
 ('pasaporte',1873452,'sofia','izquierdo','Carrera 54 No. 68 - 80 Barrio el Prado ',3044174200,'ghjy5@gmail.com','ozfjerxvzmrwdu5aam44g2o' ,'activo',23),
 ('cedula',2359861,'david','lopez','Carrera 22 No. 17-31',3753262510,'pdsdsd@gmail.com','f8att9xm4rf7ghib4qgp2ek5' ,'desactivo',24),
 ('pasaporte',6362147,'milena','pardo','Carrera 56A No. 51 - 81',3059083824,'adsfdg@hotmail.com','h3fyl6a05lax','activo',25);




select * from Usuario;

#pedido

INSERT INTO Pedido(fechaPedido,horaPedido,totalPedido,estadoPedido,pedidoaDomicilio,idUsuarioFK) VALUES
(2022-10-03,'24:47:36.0000',12000,'en camino','no',18),
(2022-10-03,'24:47:36.0000',23000,'recibido','si',17),
(2022-10-03,'24:47:36.0000',14000,'recibido','si',19),
(2022-10-03,'24:47:36.0000',82000,'recibido','si',5),
(2022-10-03,'24:47:36.0000',23000,'en camino','no',12),
(2022-10-03,'24:47:36.0000',61000,'recibido','no',9),
(2022-10-03,'24:47:36.0000',15000,'recibido','si',14),
(2022-10-03,'24:47:36.0000',74000,'en camino','si',8),
(2022-10-03,'24:47:36.0000',98000,'recibido','no',13),
(2022-10-03,'24:47:36.0000',4000,'recibido','no',15),
(2022-10-03,'24:47:36.0000',8000,'recibido','si',11),
(2022-10-03,'24:47:36.0000',9000,'recibido','no',4),
(2022-10-03,'24:47:36.0000',93000,'recibido','no',2),
(2022-10-03,'24:47:36.0000',34000,'en camino','si',6),
(2022-10-03,'24:47:36.0000',24000,'recibido','si',10),
(2022-10-03,'24:47:36.0000',24000,'recibido','no',7),
(2022-10-03,'24:47:36.0000',75000,'recibido','no',3),
(2022-10-03,'24:47:36.0000',39000,'en camino','no',1),
(2022-10-03,'24:47:36.0000',27000,'recibido','no',16),
(2022-10-03,'24:47:36.0000',36000,'recibido','no',20),
(2022-10-03,'24:47:36.0000',36000,'recibido','si',22),
(2022-10-03,'24:47:36.0000',46000,'recibido','si',25),
(2022-10-03,'24:47:36.0000',23000,'en camino','si',21),
(2022-10-03,'24:47:36.0000',8000,'recibido','si',23),
(2022-10-03,'17:03:47.0000',170000,'en camino','si',24);



select * from Pedido;
update Usuario set correoUsuario='pedrobgn55@hotmail.com'  where idUsuario=10;


#domimilio
insert into Domicilio(horaDomicilio,estadoDomicilio,idPedidoFK,idDomiciliarioFK) value
(4.30,'activo',1,1),  
(12.30,'desactivo',2,2), 
(10.50,'activo',3,3), 
(11.30,'activo',4,4), 
(10.30,'desactivo',5,5), 
(11.50,'activo',6,6), 
(5.20,'desactivo',7,7), 
(1.10,'activo',8,8), 
(8.40,'activo',9,9), 
(6.30,'activo',10,10),
(5.32,'desactivo',11,11), 
(9.00,'activo',12,12), 
(9.30,'activo',13,13), 
(8.22,'desactivo',14,14), 
(6.40,'activo',15,15), 
(3.00,'desactivo',16,16), 
(2.00,'activo',17,17), 
(1.50,'activo',18,18), 
(3.20,'desactivo',19,19), 
(7.45,'activo',20,20), 
(4.40,'activo',21,21), 
(3.30,'desactivo',22,22), 
(2.30,'activo',23,23), 
(1.00,'activo',24,24), 
(12.00,'desactivo',25,25);


insert into detallePedido(idProductoFK,cantidadProducto,precioProducto,subtotalProducto,idPedidoFK) value 
(1,2,2500,5000,1),
(2,5,1200,6000,2),
(3,3,3000,9000,3),
(4,9,6000,54000,4),
(5,8,1500,12000,5),
(6,2,1000,2000,6),
(7,4,2500,10000,7),
(8,3,3200,9600,8),
(9,7,4300,30100,9),
(10,1,4000,4000,10),
(11,6,8500,51000,11),
(12,2,15000,30000,12),
(13,8,32000,256000,13),
(14,7,800,5600,14),
(15,3,15000,45000,15),
(16,2,20000,40000,16),
(1,5,4000,20000,17),
(2,3,1000,3000,18),
(3,1,2000,2000,19),
(4,4,2500,10000,20),
(5,6,8000,48000,21),
(6,1,1000,1000,22),
(7,6,3000,18000,23),
(8,4,4600,18400,24),
(9,8,8500,68000,25);



show tables;