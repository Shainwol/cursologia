document.addEventListener('DOMContentLoaded', function(){
    	var formRegistro =document.querySelector("#formRegistro");
    	formRegistro.onsubmit = function(e){
    		e.preventDefault();
    		var strNombres = document.querySelector('#txtNombres').value;
    		var strApellidos = document.querySelector('#txtApellidos').value;
    		var strCorreo = document.querySelector('#txtCorreo').value;
    		var strContraseña = document.querySelector('#txtContraseña').value;
            var error_clave
            error_clave = validar_clave(strContraseña, error_clave);
    		var strGenero = document.querySelector('#txtGenero').value;
    		var strTipoUsuario = document.querySelector('#txtTipoUsuario').value;
    		var strImagen = document.querySelector('#txtImagen').value;
            var fileImagen = document.querySelector('#txtImagen').files;
    		var strFecha = document.querySelector('#txtFecha').value;
    		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    		var ajaxUrl = base_url();
    		var formData = new FormData(formRegistro);
            if(error_clave == ""){
        		request.open("POST",ajaxUrl,true);
        		request.send(formData);
        		request.onreadystatechange = function(){
                    if(request.readyState == 4 && request.status == 200){
                        var objData = JSON.parse(request.responseText);
                        if(objData.status){
                            formRegistro.reset();
                            swal("Usuarios", objData.msg ,"success");
                        }
                        else{
                            swal("Error", objData.msg , "error");
                        }
                    }
                }
            }else{
                swal("Error", error_clave , "error");
            } 
        }
    },false);

$(document).on("change","#txtImagen", function(){
    console.log(this.files);
    var files = this.files;
    var element;
    var supportedImages = ["image/jpeg", "image/png", "image/gif"];
    var limite_kb = 200;
    var setEncontraronElementosNoValidos = false;
    for(var i = 0; i < files.length; i++){
        element = files[i];
        if (supportedImages.indexOf(element.type) != -1 && element.size <= limite_kb * 1024){
            var imgCodified = URL.createObjectURL(element);
            document.querySelector("#FotoRegistro").setAttribute("src", imgCodified);

        }
        else {
            setEncontraronElementosNoValidos= true;
        }
    }
    if(files.length > 0){
        if(setEncontraronElementosNoValidos){
            swal("Error", "Formato o tamaño invalido" ,"error");
        }
        else{
            swal("Registro", "Archivo subido correctamente" ,"success");
        }
    }
});

function borrarImagen(){
    document.querySelector("#FotoRegistro").setAttribute("src", "Assets/images/Perfil.png");
}

$(document).on("keyup","#txtContraseña", function(){
    var clave = document.querySelector('#txtContraseña').value;
    var error_clave = "";
    error_clave = validar_clave(clave, error_clave);
    if(error_clave != ""){
        document.getElementById("texto").hidden = false;
        document.getElementById("texto").innerHTML = error_clave;
    } else {
        document.getElementById("texto").hidden = true;
    }
    if (clave == "") { document.getElementById("texto").hidden = true;}

});

function validar_clave(clave, error){
    error="";
        if(clave.length < 8){
            error = "La clave debe tener al menos 8 caracteres";
            return error;
        }
        if(/[a-z]/.test(clave) == false){
            error = "La clave debe tener al menos una minuscula";
            return error;
        }
        if(/[A-Z]/.test(clave) == false){
            error = "La clave debe tener al menos una mayuscula";
            return error;
        }
        if(/[0-9]/.test(clave) == false){
            error = "La clave debe tener al menos un numero";
            return error;
        }
        if(/[^a-zA-Z\d]/.test(clave) == false){
            error = "La clave debe tener al menos un caracter especial";
            return error;
        }
        return error;
}


