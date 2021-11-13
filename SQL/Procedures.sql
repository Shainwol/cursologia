insert into usuario(Nombre_U,Email,tipo_usuario,gender,Pass,Imagen_U,FechaNac_U,FechaC_U,Update_U,Is_eliminado_U)
values ('Irene', 'irenerdz0327@gmail.com', '2', 'f', 'Irene','Perfil.png', 19980327, now(),now(),0);
insert into usuario(Nombre_U,Email,tipo_usuario,gender,Pass,Imagen_U,FechaNac_U,FechaC_U,Update_U,Is_eliminado_U)
values ('Maria', 'c', '1', 'f', 'Irene','Perfil.png', 19980327, now(),now(),0);

insert into usuario(Nombre_U,Email,tipo_usuario,gender,Pass,Imagen_U,FechaNac_U,FechaC_U,Update_U,Is_eliminado_U)
values ('f', 'f', '1', '3', 'f','', 19980327, now(),now(),0);

update usuario set FormatoImagen_U = 'image/png' where ID_User >= 1;

select @@secure_file_priv;

select * from Usuario;
select * from Curso;
insert into curso(Nombre_C,Precio_C,Descripcion_C,niveles,calificacion_Curso,Imagen_C,Update_C,FechaC_C,Is_eliminado_C,FK_ID_Creador)
values ('Curso1', '100', 'descripcion del curso uno', '5', '0','kda.jpg', now(), now(),0,1);

call AgregarUsuario()