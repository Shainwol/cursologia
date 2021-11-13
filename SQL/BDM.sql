create schema bdm;
use bdm;

Select * from Usuario;
delete from Usuario where ID_User >= 2;

create table IF NOT EXISTS Usuario (
ID_User					INT NOT NULL auto_increment primary key,
Nombre_U				Varchar(50) NOT NULL comment 'Nombre de usuario',
Email					Varchar(50) NOT NULL comment 'Correo electrónico del usuario',
tipo_usuario			enum('estudiante','maestro') comment 'Tipo del usuario que tendrá la cuenta',
gender					enum('m','f', 'o') comment 'Género del usuario',
Pass					Varchar(20) NOT NULL comment 'Contraseña',
Imagen_U				mediumblob comment 'Imagen de perfil',
FormatoImagen_U			Varchar(15) comment 'Formato para decodificar la imagen y mostrarla',
FechaNac_U				date NOT NULL comment 'Fecha de nacimiento del usuario',
FechaC_U				date NOT NULL comment 'Fecha de creación de la cuenta',
Update_U				date NOT NULL comment 'Fecha en la que el ultimo cambio a la cuenta fue realizado',
Is_eliminado_U			BIT comment 'Si el usuario ha sido eliminado o sigue activo'
);

create table IF NOT EXISTS Curso (
ID_Curso				INT NOT NULL auto_increment primary key,
Nombre_C				Varchar(50) NOT NULL comment 'nombre del curso',
Precio_C				Float comment 'Precio del curso',
Descripcion_C			Varchar(500) NOT NULL comment 'Descripción del curso',
niveles					int NOT NULL comment 'Cantidad de niveles del curso',
calificacion_Curso		float comment 'Promedio de estrellas del curso',
Imagen_C				blob comment 'Imagen del curso',
Update_C				date NOT NULL comment 'Fecha en el que el ultimo cambio a un curso fue realizado',
FechaC_C				date NOT NULL comment 'Fecha de creación del curso',
Is_eliminado_C			BIT comment 'Si el curso ha sido eliminado o sigue activo',
FK_ID_Creador			INT NOT NULL comment 'ID del usuario creador del curso',
FOREIGN key (FK_ID_Creador) REFERENCES Usuario (ID_User)
);

create table IF NOT EXISTS Nivel (
ID_Nivel				INT NOT NULL auto_increment primary key,
Nombre_N				Varchar(50) NOT NULL comment 'Nombre del nivel',
Descripcion_N			Varchar(500) NOT NULL comment 'Descripción del nivel',
Video					blob NOT NULL comment 'Video del tema del curso',
FechaC_N				date NOT NULL comment 'Fecha de creación del nivel',
Update_N				date NOT NULL comment 'Fecha en que el ultimo cambio a un curso fue realizado',
FK_ID_Curso				INT NOT NULL comment 'ID del curso al que pertenece este nivel',
FOREIGN key (FK_ID_Curso) REFERENCES Curso (ID_Curso)
);

create table IF NOT EXISTS Categoria (
ID_Catego				INT NOT NULL auto_increment primary key,
Nombre_Catego			Varchar(50) NOT NULL comment 'Nombre de la categoría',
Descripcion_Catego		Varchar(50) NOT NULL comment 'Descripción de la categoría'
);

create table IF NOT EXISTS Categoria_Curso (
ID_CurCat				INT NOT NULL auto_increment primary key,
FK_ID_Curso				INT NOT NULL comment 'Llave foránea de ID del curso',
FOREIGN key (FK_ID_Curso) REFERENCES Curso (ID_Curso),
FK_ID_Catego			INT NOT NULL comment 'Llave foránea de ID de la categoría',
FOREIGN key (FK_ID_Catego) REFERENCES Categoria (ID_Catego)
);

create table IF NOT EXISTS Metodo_Pago (
ID_MetodoPago			INT NOT NULL auto_increment primary key,
Nombre					Varchar(50) NOT NULL comment 'Nombre del método de pago usado para la compra'
);

create table IF NOT EXISTS Pago (
ID_Pago					INT NOT NULL auto_increment primary key,
Cantidad				FLOAT comment 'Cantidad a pagar',
FechaC_Pago				datetime NOT NULL comment 'Fecha de creación del pago',
FK_ID_MetodoPago		INT NOT NULL comment 'Llave foránea que tiene el método de pago usado',
FOREIGN key (FK_ID_MetodoPago) REFERENCES Metodo_Pago (ID_MetodoPago),
FK_ID_Curso				INT NOT NULL comment 'Llave foránea del curso comprado',
FOREIGN key (FK_ID_Curso) REFERENCES Curso (ID_Curso),
FK_ID_User				INT NOT NULL comment 'Llave foránea del usuario que hizo la compra',
FOREIGN key (FK_ID_User) REFERENCES Usuario (ID_User)
);

create table IF NOT EXISTS Comentario (
ID_Comentario			INT NOT NULL auto_increment primary key,
Contenido_Com			Varchar(280) NOT NULL comment 'Reseña u opinión del usuario sobre un curso',
Calificacion_Com		Float NOT NULL comment 'Calificación en estrellas de un curso',
FechaC_Com				date NOT NULL comment 'Fecha de creación del comentario',
FK_ID_Curso				INT NOT NULL comment 'Llave foránea del curso al que se le hizo el comentario',
FOREIGN key (FK_ID_Curso) REFERENCES Curso (ID_Curso),
FK_ID_User				INT NOT NULL comment 'Llave foránea que contiene al usuario que hizo el comentario',
FOREIGN key (FK_ID_User) REFERENCES Usuario (ID_User)
);

create table IF NOT EXISTS Chat (
ID_Chat					INT NOT NULL auto_increment primary key,
Contenido_Chat			Varchar(280) NOT NULL comment 'Mensaje a enviar',
FechaC_Chat				datetime NOT NULL comment 'Fecha en la que se envió el mensaje',
Is_Editado_Chat			BIT comment 'Si el mensaje fue editado',
Is_Eliminado_Chat		BIT comment 'Si el mensaje fue eliminado',
FK_ID_Emisor			INT NOT NULL comment 'ID del usuario que envió el mensaje',
FOREIGN key (FK_ID_Emisor) REFERENCES Usuario (ID_User),
FK_ID_Receptor			INT NOT NULL comment 'ID del usuario que recibió el mensaje',
FOREIGN key (FK_ID_Receptor) REFERENCES Usuario (ID_User)
);

create table IF NOT EXISTS Usuario_Contrata_Curso (
ID_UCC					INT NOT NULL auto_increment primary key,
FechaC_UCC				date NOT NULL comment 'Fecha en la que se compró el curso',
FechaF_UCC				date comment 'Fecha en la que se terminó el curso',
UltimoAcceso			date comment 'Fecha del último acceso al curso',
UltimoNivel				INT comment 'Último nivel cursado por el usuario',
Is_Terminado			BIT comment 'Si el curso fue terminado en su totalidad',
FK_ID_Curso				INT NOT NULL comment 'Llave foránea que contiene el curso',
FOREIGN key (FK_ID_Curso) REFERENCES Curso (ID_Curso),
FK_ID_User				INT NOT NULL comment 'Llave foránea que contiene el usuario que lo compró',
FOREIGN key (FK_ID_User) REFERENCES Usuario (ID_User)
);

create table IF NOT EXISTS Carrito (
ID_Carrito				INT NOT NULL auto_increment primary key,
FK_ID_Curso				INT NOT NULL comment 'Llave foránea que contiene el curso',
FOREIGN key (FK_ID_Curso) REFERENCES Curso (ID_Curso),
FK_ID_User				INT NOT NULL comment 'Llave foránea que contiene el usuario que lo quiere comprar',
FOREIGN key (FK_ID_User) REFERENCES Usuario (ID_User)
);

create table IF NOT EXISTS NivelTerminado (
ID_NivelTerminado		INT NOT NULL auto_increment primary key,
Is_Terminado			BIT comment 'Si el nivel fue marcado como terminado o no',
FK_ID_Nivel				INT NOT NULL comment 'Llave foránea que contiene el nivel',
FOREIGN key (FK_ID_Nivel) REFERENCES Nivel (ID_Nivel),
FK_ID_User				INT NOT NULL comment 'Llave foránea que contiene el usuario que lo curso',
FOREIGN key (FK_ID_User) REFERENCES Usuario (ID_User)
);