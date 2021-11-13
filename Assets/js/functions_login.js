var divLoading = document.querySelector("#divLoading");
document.addEventListener('DOMContentLoaded', function(){
	if(document.querySelector("#formLogin")){
		let formLogin = document.querySelector("#formLogin");
		formLogin.onsubmit = function(e) {
			e.preventDefault();
			let strCorreo = document.querySelector('#txtCorreo').value;
			let strContraseña = document.querySelector('#txtContraseña').value;

			if(strCorreo == "" || strContraseña == "")
			{
				swal("Por favor", "Escribe usuario y contraseña.", "error");
				return false;
			}else{
				//divLoading.style.display = "flex";
				var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
				var ajaxUrl = base_url()+'/Login/loginUser'; 
				var formData = new FormData(formLogin);
				request.open("POST",ajaxUrl,true);
				request.send(formData);
				console.log(request);
				request.onreadystatechange = function(){
					if(request.readyState != 4) return;
					if(request.status == 200){
						var objData = JSON.parse(request.responseText);
						if(objData.status)
						{
							window.location = base_url();
						}else{
							swal("Atención", objData.msg, "error");
							document.querySelector('#txtContraseña').value = "";
						}
					}else{
						swal("Atención","Error en el proceso", "error");
					}
					//divLoading.style.display = "none";
					return false;
				}
			}
		}
	}
}, false);