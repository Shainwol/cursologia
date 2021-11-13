drop procedure AgregarUsuario
DELIMITER $$
CREATE PROCEDURE AgregarUsuario (
IN Nombre_UP			 	Varchar(50),
IN EmailP					Varchar(50),
IN tipo_usuarioP			enum('estudiante','maestro'),
IN genderP					enum('m','f', 'o'),
IN PassP					Varchar(20),
IN Imagen_UP				mediumblob,
IN FechaNac_UP				date,
IN FormatoImagen_UP			Varchar(15)
)
BEGIN
    INSERT INTO Usuario(Nombre_U, Email, tipo_usuario, gender, Pass, Imagen_U, 
    FechaNac_U, FechaC_U, Update_U, Is_eliminado_U, FormatoImagen_U)
    Values (Nombre_UP, EmailP, tipo_usuarioP, genderP, PassP, Imagen_UP, 
    FechaNac_UP, now(), now(), 0, FormatoImagen_UP);
END$$ 
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE AgregarCurso (
IN Nombre_CP			 	Varchar(50),
IN Precio_CP				Varchar(50),
IN Descripcion_C			Varchar(50),
IN nivelesP					int,
IN calificacion_CursoP	    Varchar(20),
IN Imagen_CP				Varchar(150),
IN Update_CP				date,
IN FechaC_CP				date,
IN Is_eliminado_CP			BIT,
IN FK_ID_CreadorP			int
)
BEGIN
    INSERT INTO Curso(Nombre_C, Precio_C, Descripcion_C, niveles, calificacion_Curso, Imagen_C, 
    Update_C, FechaC_C, Is_eliminado_C, FK_ID_Creador)
    Values (Nombre_CP, Precio_CP, Descripcion_CP, nivelesP, calificacion_CursoP, Imagen_CP, 
    Update_CP, now(), Is_eliminado_CP, FK_ID_CreadorP);
END$$ 
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE AgregarNivel (
IN Nombre_NP			 	Varchar(50),
IN Descripcion_NP			Varchar(500),
IN VideoP					blob,
IN FechaC_NP				date,
IN Update_NP				date,
IN FK_ID_CursoP				int
)
BEGIN
    INSERT INTO Nivel(Nombre_N, Descripcion_N, Video, 
    FechaC_N, Update_N, FK_ID_Curso)
    Values (Nombre_NP, Descripcion_NP, VideoP, 
    FechaC_NP, now(), FK_ID_CursoP);
END$$ 
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE AgregarCategoria (
IN Nombre_CategoP			 Varchar(50),
IN Descripcion_CategoP		Varchar(50)
)
BEGIN
    INSERT INTO Categoria(Nombre_Catego, Descripcion_Catego)
    Values (Nombre_CategoP, Descripcion_CategoP);
END$$ 
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE AgregarMetodoPago (
IN NombreP			 Varchar(50)
)
BEGIN
    INSERT INTO Metodo_Pago(Nombre)
    Values (NombreP);
END$$ 
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE AgregarPago (
IN CantidadP				float,
IN FechaC_PagoP				date,
IN FK_ID_MetodoPagoP		INT,
IN FK_ID_CursoP				INT,
IN FK_ID_UserP				INT
)
BEGIN
    INSERT INTO Pago(Cantidad, FechaC_Pago, FK_ID_MetodoPago, FK_ID_Curso, FK_ID_User)
    Values (CantidadP, now(), FK_ID_MetodoPagoP, FK_ID_CursoP, FK_ID_UserP);
END$$ 
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE AgregarComentario (
IN Contenido_ComP			varchar(280),
IN Calificacion_ComP		float,
IN FechaC_ComP				date,
IN FK_ID_CursoP				INT,
IN FK_ID_UserP				INT
)
BEGIN
    INSERT INTO Comentario(Contenido_Com, Calificacion_Com, FechaC_Com, FK_ID_Curso, FK_ID_User)
    Values (Contenido_ComP, Calificacion_ComP, now(), FK_ID_CursoP, FK_ID_UserP);
END$$ 
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE AgregarChat (
IN Contenido_ChatP			varchar(280),
IN FechaC_ChatP				date,
IN Is_Editado_ChatP			bit,
IN Is_Eliminado_ChatP			bit,
IN FK_ID_EmisorP				INT,
IN FK_ID_ReceptorP				INT
)
BEGIN
    INSERT INTO Chat(Contenido_Chat, FechaC_Chat, Is_Editado_Chat, Is_Eliminado_Chat, FK_ID_Emisor, FK_ID_Receptor)
    Values (Contenido_ChatP, now(), Is_Editado_ChatP, Is_Eliminado_ChatP, FK_ID_EmisorP, FK_ID_ReceptorP);
END$$ 
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE BuscarUsuario(
IN EmailP        	Varchar(50)
)
BEGIN
SELECT * FROM usuario WHERE Email = EmailP;
END$$
DELIMITER ;
call Login('a','a')
drop procedure Login
DELIMITER $$
CREATE PROCEDURE Login(
pEmail            Varchar(50) ,
pContraseña       Varchar(20) 
)
BEGIN
SELECT * FROM Usuario WHERE pEmail = Email AND Pass = pContraseña;
END$$
DELIMITER ;

