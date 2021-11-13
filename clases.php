<?php

Class Usuario{
	private $ID_User;
	private $Nombre_U;
	private $Email;
	private $tipo_usuario;
	private $gender;
	private $Pass;
	private $Imagen_U;
	private $FechaNac_U;
	private $FechaC_U;
	private $Update_U;
	private $Is_eliminado_U;

	function __construct($ID_User,$Nombre_U,$Email,$tipo_usuario,$gender,$Pass,$Imagen_U,$FechaNac_U,$FechaC_U,$Update_U,$Is_eliminado_U){
		$this->ID_User = $ID_User;
		$this->Nombre_U = $Nombre_U;
		$this->Email = $Email;
		$this->tipo_usuario = $tipo_usuario;
		$this->gender = $gender;
		$this->Pass = $Pass;
		$this->Imagen_U = $Imagen_U;
		$this->FechaNac_U = $FechaNac_U;
		$this->FechaC_U = $FechaC_U;
		$this->Update_U = $Update_U;
		$this->Is_eliminado_U = $Is_eliminado_U;
	}

	function getID_User(){ return $this->ID_User; }

	function getNombre_U(){ return $this->Nombre_U; }

	function getEmail(){ return $this->Email; }

	function gettipo_usuario(){ return $this->tipo_usuario; }

	function getgender(){ return $this->gender; }

	function getPass(){ return $this->Pass; }

	function getImagen_U(){ return $this->Imagen_U; }

	function getFechaNac_U(){ return $this->FechaNac_U; }

	function getFechaC_U(){ return $this->FechaC_U; }

	function getUpdate_U(){ return $this->Update_U; }

	function getIs_eliminado_U(){ return $this->Is_eliminado_U; }

	function setID_User($aux){ $this->ID_User = $aux; }

	function setNombre_U($aux){ $this->Nombre_U = $aux; }

	function setEmail($aux){ $this->Email = $aux; }

	function settipo_usuario($aux){ $this->tipo_usuario = $aux; }

	function setgender($aux){ $this->gender = $aux; }

	function setPass($aux){ $this->Pass = $aux; }

	function setImagen_U($aux){ $this->Imagen_U = $aux; }

	function setFechaNac_U($aux){ $this->FechaNac_U = $aux; }

	function setFechaC_U($aux){ $this->FechaC_U = $aux; }

	function setUpdate_U($aux){ $this->Update_U = $aux; }

	function setIs_eliminado_U($aux){ $this->Is_eliminado_U = $aux; }

}

Class Curso{
	private $ID_Curso;
	private $Nombre_C;
	private $Precio_C;
	private $Descripcion_C;
	private $niveles;
	private $calificacion_Curso;
	private $Imagen_C;
	private $Update_C;
	private $FechaC_C;
	private $Is_eliminado_C;
	private $FK_ID_Creador;

	function __construct($ID_Curso,$Nombre_C,$Precio_C,$Descripcion_C,$niveles,$calificacion_Curso,$Imagen_C,$Update_C,$FechaC_C,$Is_eliminado_C,$FK_ID_Creador){
		$this->ID_Curso = $ID_Curso;
		$this->Nombre_C = $Nombre_C;
		$this->Precio_C = $Precio_C;
		$this->Descripcion_C = $Descripcion_C;
		$this->niveles = $niveles;
		$this->calificacion_Curso = $calificacion_Curso;
		$this->Imagen_C = $Imagen_C;
		$this->Update_C = $Update_C;
		$this->FechaC_C = $FechaC_C;
		$this->Is_eliminado_C = $Is_eliminado_C;
		$this->FK_ID_Creador = $FK_ID_Creador;
	}

	function getID_Curso(){ return $this->ID_Curso; }

	function getNombre_C(){ return $this->Nombre_C; }

	function getPrecio_C(){ return $this->Precio_C; }

	function getDescripcion_C(){ return $this->Descripcion_C; }

	function getniveles(){ return $this->niveles; }

	function getcalificacion_Curso(){ return $this->calificacion_Curso; }

	function getImagen_C(){ return $this->Imagen_C; }

	function getUpdate_C(){ return $this->Update_C; }

	function getFechaC_C(){ return $this->FechaC_C; }

	function getIs_eliminado_C(){ return $this->Is_eliminado_C; }

	function getFK_ID_Creador(){ return $this->FK_ID_Creador; }

	function setID_Curso($aux){ $this->ID_Curso = $aux; }

	function setNombre_C($aux){ $this->Nombre_C = $aux; }

	function setPrecio_C($aux){ $this->Precio_C = $aux; }

	function setDescripcion_C($aux){ $this->Descripcion_C = $aux; }

	function setniveles($aux){ $this->niveles = $aux; }

	function setcalificacion_Curso($aux){ $this->calificacion_Curso = $aux; }

	function setImagen_C($aux){ $this->Imagen_C = $aux; }

	function setUpdate_C($aux){ $this->Update_C = $aux; }

	function setFechaC_C($aux){ $this->FechaC_C = $aux; }

	function setIs_eliminado_C($aux){ $this->Is_eliminado_C = $aux; }

	function setFK_ID_Creador($aux){ $this->FK_ID_Creador = $aux; }
}

Class Nivel{
	private $ID_Nivel;
	private $Nombre_N;
	private $Descripcion_N;
	private $Video;
	private $FechaC_N;
	private $Update_N;
	private $FK_ID_Curso;

	function __construct($ID_Nivel,$Nombre_N,$Descripcion_N,$Video,$FechaC_N,$Update_N,$FK_ID_Curso){
		$this->ID_Nivel = $ID_Nivel;
		$this->Nombre_N = $Nombre_N;
		$this->Descripcion_N = $Descripcion_N;
		$this->Video = $Video;
		$this->FechaC_N = $FechaC_N;
		$this->Update_N = $Update_N;
		$this->FK_ID_Curso = $FK_ID_Curso;
	}

	function getID_Nivel(){ return $this->ID_Nivel; }

	function getNombre_N(){ return $this->Nombre_N; }

	function getDescripcion_N(){ return $this->Descripcion_N; }

	function getVideo(){ return $this->Video; }

	function getFechaC_N(){ return $this->FechaC_N; }

	function getUpdate_N(){ return $this->Update_N; }

	function getFK_ID_Curso(){ return $this->FK_ID_Curso; }

	function setID_Nivel($aux){ $this->ID_Nivel = $aux; }

	function setNombre_N($aux){ $this->Nombre_N = $aux; }

	function setDescripcion_N($aux){ $this->Descripcion_N = $aux; }

	function setVideo($aux){ $this->Video = $aux; }

	function setFechaC_N($aux){ $this->FechaC_N = $aux; }

	function setUpdate_N($aux){ $this->Update_N = $aux; }

	function setFK_ID_Curso($aux){ $this->FK_ID_Curso = $aux; }

}

Class Categoria{
	private $ID_Catego;
	private $Nombre_Catego;
	private $Descripcion_Catego;

	function __construct($ID_Catego,$Nombre_Catego,$Descripcion_Catego){
		$this->ID_Catego = $ID_Catego;
		$this->Nombre_Catego = $Nombre_Catego;
		$this->Descripcion_Catego = $Descripcion_Catego;
	}

	function getID_Catego(){ return $this->ID_Catego; }

	function getNombre_Catego(){ return $this->Nombre_Catego; }

	function getDescripcion_Catego(){ return $this->Descripcion_Catego; }

	function setID_Catego($aux){ $this->ID_Catego = $aux; }

	function setNombre_Catego($aux){ $this->Nombre_Catego = $aux; }

	function setDescripcion_Catego($aux){ $this->Descripcion_Catego = $aux; }

}

Class Categoria_Curso{
	private $ID_CurCat;
	private $FK_ID_Curso;
	private $FK_ID_Catego;

	function __construct($ID_CurCat,$FK_ID_Curso,$FK_ID_Catego){
		$this->ID_CurCat = $ID_CurCat;
		$this->FK_ID_Curso = $FK_ID_Curso;
		$this->FK_ID_Catego = $FK_ID_Catego;
	}

	function getID_CurCat(){ return $this->ID_CurCat; }

	function getFK_ID_Curso(){ return $this->FK_ID_Curso; }

	function getFK_ID_Catego(){ return $this->FK_ID_Catego; }

	function setID_CurCat($aux){ $this->ID_CurCat = $aux; }

	function setFK_ID_Curso($aux){ $this->FK_ID_Curso = $aux; }

	function setFK_ID_Catego($aux){ $this->FK_ID_Catego = $aux; }
}

Class Metodo_Pago{
	private $ID_MetodoPago;
	private $Nombre;

	function __construct($ID_MetodoPago,$Nombre){
		$this->ID_MetodoPago = $ID_MetodoPago;
		$this->Nombre = $Nombre;
	}

	function getID_MetodoPago(){ return $this->ID_MetodoPago; }

	function getNombre(){ return $this->Nombre; }

	function setID_MetodoPago($aux){ $this->ID_MetodoPago = $aux; }

	function setNombre($aux){ $this->Nombre = $aux; }
}

Class Pago{
	private $ID_Pago;
	private $Cantidad;
	private $FechaC_Pago;
	private $FK_ID_MetodoPago;
	private $FK_ID_Curso;
	private $FK_ID_User;

	function __construct($ID_Pago,$Cantidad,$FechaC_Pago,$FK_ID_MetodoPago,$FK_ID_Curso,$FK_ID_User){
		$this->ID_Pago = $ID_Pago;
		$this->Cantidad = $Cantidad;
		$this->FechaC_Pago = $FechaC_Pago;
		$this->FK_ID_MetodoPago = $FK_ID_MetodoPago;
		$this->FK_ID_Curso = $FK_ID_Curso;
		$this->FK_ID_User = $FK_ID_User;
	}

	function getID_Pago(){ return $this->ID_Pago; }

	function getCantidad(){ return $this->Cantidad; }

	function getFechaC_Pago(){ return $this->FechaC_Pago; }

	function getFK_ID_MetodoPago(){ return $this->FK_ID_MetodoPago; }

	function getFK_ID_Curso(){ return $this->FK_ID_Curso; }

	function getFK_ID_User(){ return $this->FK_ID_User; }

	function setID_Pago($aux){ $this->ID_Pago = $aux; }

	function setCantidad($aux){ $this->Cantidad = $aux; }

	function setFechaC_Pago($aux){ $this->FechaC_Pago = $aux; }

	function setFK_ID_MetodoPago($aux){ $this->FK_ID_MetodoPago = $aux; }

	function setFK_ID_Curso($aux){ $this->FK_ID_Curso = $aux; }

	function setFK_ID_User($aux){ $this->FK_ID_User = $aux; }
}

Class Comentario{
	private $ID_Comentario;
	private $Contenido_Com;
	private $Calificacion_Com;
	private $FechaC_Com;
	private $FK_ID_Curso;
	private $FK_ID_User;

	function __construct($ID_Comentario,$Contenido_Com,$Calificacion_Com,$FechaC_Com,$FK_ID_Curso,$FK_ID_User){
		$this->ID_Comentario = $ID_Comentario;
		$this->Contenido_Com = $Contenido_Com;
		$this->Calificacion_Com = $Calificacion_Com;
		$this->FechaC_Com = $FechaC_Com;
		$this->FK_ID_Curso = $FK_ID_Curso;
		$this->FK_ID_User = $FK_ID_User;
	}

	function getID_Comentario(){ return $this->ID_Comentario; }

	function getContenido_Com(){ return $this->Contenido_Com; }

	function getCalificacion_Com(){ return $this->Calificacion_Com; }

	function getFechaC_Com(){ return $this->FechaC_Com; }

	function getFK_ID_Curso(){ return $this->FK_ID_Curso; }

	function getFK_ID_User(){ return $this->FK_ID_User; }

	function setID_Comentario($aux){ $this->ID_Comentario = $aux; }

	function setContenido_Com($aux){ $this->Contenido_Com = $aux; }

	function setCalificacion_Com($aux){ $this->Calificacion_Com = $aux; }

	function setFechaC_Com($aux){ $this->FechaC_Com = $aux; }

	function setFK_ID_Curso($aux){ $this->FK_ID_Curso = $aux; }

	function setFK_ID_User($aux){ $this->FK_ID_User = $aux; }
}

Class Chat{
	private $ID_Chat;
	private $Contenido_Chat;
	private $FechaC_Chat;
	private $Is_Editado_Chat;
	private $Is_Eliminado_Chat;
	private $FK_ID_Emisor;
	private $FK_ID_Receptor;

	function __construct($ID_Chat,$Contenido_Chat,$FechaC_Chat,$Is_Editado_Chat,$Is_Eliminado_Chat,$FK_ID_Emisor,$FK_ID_Receptor){
		$this->ID_Chat = $ID_Chat;
		$this->Contenido_Chat = $Contenido_Chat;
		$this->FechaC_Chat = $FechaC_Chat;
		$this->Is_Editado_Chat = $Is_Editado_Chat;
		$this->Is_Eliminado_Chat = $Is_Eliminado_Chat;
		$this->FK_ID_Emisor = $FK_ID_Emisor;
		$this->FK_ID_Receptor = $FK_ID_Receptor;
	}

	function getID_Chat(){ return $this->ID_Chat; }

	function getContenido_Chat(){ return $this->Contenido_Chat; }

	function getFechaC_Chat(){ return $this->FechaC_Chat; }

	function getIs_Editado_Chat(){ return $this->Is_Editado_Chat; }

	function getIs_Eliminado_Chat(){ return $this->Is_Eliminado_Chat; }

	function getFK_ID_Emisor(){ return $this->FK_ID_Emisor; }

	function getFK_ID_Receptor(){ return $this->FK_ID_Receptor; }

	function setID_Chat($aux){ $this->ID_Chat = $aux; }

	function setContenido_Chat($aux){ $this->Contenido_Chat = $aux; }

	function setFechaC_Chat($aux){ $this->FechaC_Chat = $aux; }

	function setIs_Editado_Chat($aux){ $this->Is_Editado_Chat = $aux; }

	function setIs_Eliminado_Chat($aux){ $this->Is_Eliminado_Chat = $aux; }

	function setFK_ID_Emisor($aux){ $this->FK_ID_Emisor = $aux; }

	function setFK_ID_Receptor($aux){ $this->FK_ID_Receptor = $aux; }
}

Class Usuario_Contrata_Curso{
	private $ID_UCC;
	private $FechaC_UCC;
	private $FechaF_UCC;
	private $UltimoAcceso;
	private $UltimoNivel;
	private $Is_Terminado;
	private $FK_ID_Curso;
	private $FK_ID_User;

	function __construct($ID_UCC,$FechaC_UCC,$FechaF_UCC,$UltimoAcceso,$UltimoNivel,$Is_Terminado,$FK_ID_Curso,$FK_ID_User){
		$this->ID_UCC = $ID_UCC;
		$this->FechaC_UCC = $FechaC_UCC;
		$this->FechaF_UCC = $FechaF_UCC;
		$this->UltimoAcceso = $UltimoAcceso;
		$this->UltimoNivel = $UltimoNivel;
		$this->Is_Terminado = $Is_Terminado;
		$this->FK_ID_Curso = $FK_ID_Curso;
		$this->FK_ID_User = $FK_ID_User;
	}

	function getID_UCC(){ return $this->ID_UCC; }

	function getFechaC_UCC(){ return $this->FechaC_UCC; }

	function getFechaF_UCC(){ return $this->FechaF_UCC; }

	function getUltimoAcceso(){ return $this->UltimoAcceso; }

	function getUltimoNivel(){ return $this->UltimoNivel; }

	function getIs_Terminado(){ return $this->Is_Terminado; }

	function getFK_ID_Curso(){ return $this->FK_ID_Curso; }

	function getFK_ID_User(){ return $this->FK_ID_User; }

	function setID_UCC($aux){ $this->ID_UCC = $aux; }

	function setFechaC_UCC($aux){ $this->FechaC_UCC = $aux; }

	function setFechaF_UCC($aux){ $this->FechaF_UCC = $aux; }

	function setUltimoAcceso($aux){ $this->UltimoAcceso = $aux; }

	function setUltimoNivel($aux){ $this->UltimoNivel = $aux; }

	function setIs_Terminado($aux){ $this->Is_Terminado = $aux; }

	function setFK_ID_Curso($aux){ $this->FK_ID_Curso = $aux; }

	function setFK_ID_User($aux){ $this->FK_ID_User = $aux; }

}

Class Carrito{
	private $ID_Carrito;
	private $FK_ID_Curso;
	private $FK_ID_User;

	function __construct($ID_Carrito,$FK_ID_Curso,$FK_ID_User){
		$this->ID_Carrito = $ID_Carrito;
		$this->FK_ID_Curso = $FK_ID_Curso;
		$this->FK_ID_User = $FK_ID_User;
	}

	function getID_Carrito(){ return $this->ID_Carrito; }

	function getFK_ID_Curso(){ return $this->FK_ID_Curso; }

	function getFK_ID_User(){ return $this->FK_ID_User; }

	function setID_Carrito($aux){ $this->ID_Carrito = $aux; }

	function setFK_ID_Curso($aux){ $this->FK_ID_Curso = $aux; }

	function setFK_ID_User($aux){ $this->FK_ID_User = $aux; }
}

Class NivelTerminado{
	private $ID_NivelTerminado;
	private $Is_Terminado;
	private $FK_ID_Nivel;
	private $FK_ID_User;

	function __construct($ID_NivelTerminado,$Is_Terminado,$FK_ID_Nivel,$FK_ID_User){
		$this->ID_NivelTerminado = $ID_NivelTerminado;
		$this->Is_Terminado = $Is_Terminado;
		$this->FK_ID_Nivel = $FK_ID_Nivel;
		$this->FK_ID_User = $FK_ID_User;
	}

	function getID_NivelTerminado(){ return $this->ID_NivelTerminado; }

	function getIs_Terminado(){ return $this->Is_Terminado; }

	function getFK_ID_Nivel(){ return $this->FK_ID_Nivel; }

	function getFK_ID_User(){ return $this->FK_ID_User; }

	function setID_NivelTerminado($aux){ $this->ID_NivelTerminado = $aux; }

	function setIs_Terminado($aux){ $this->Is_Terminado = $aux; }

	function setFK_ID_Nivel($aux){ $this->FK_ID_Nivel = $aux; }

	function setFK_ID_User($aux){ $this->FK_ID_User = $aux; }
}

?>