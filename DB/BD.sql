create table usuario;
use usuario;
-- ==================================================================
create table usu(
id int primary key AUTO_INCREMENT,
nombre varchar(45),
clave varchar(45)
)
-- ==================================================================
 create procedure regitrar(nombre varchar(45),clave varchar(45))
 insert usu(nombre, clave)values(nombre,clave);
 
 call regitrar('juan','perales');         
 call regitrar('pedro', '123');
               
 select *from usu;
               
 create procedure login(nom varchar(45),cla varchar(45))
 select *fron usu where nombre=nom and clave=cla;

 call login('pedro', '123');
-- ==================================================================