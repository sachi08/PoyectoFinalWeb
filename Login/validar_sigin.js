function validar(){
	var nombre, apellido, celular, correo, usuario, contrasena, confirmar_contrasena, expresion;

	nombre = document.getElementById("nombre").value;
	apellido = document.getElementById("apellido").value;
	celular = document.getElementById("celular").value;
	correo = document.getElementById("correo").value;
	usuario = document.getElementById("usuario").value;
	contrasena = document.getElementById("contrasena").value;
	confirmar_contrasena = document.getElementById("confirmar_contrasena").value;

	expresion = /\w+@\w+\.+[a-z]/;

	if(nombre === "" || apellido === "" || celular === "" || correo === "" || usuario === "" || contrasena === "" || confirmar_contrasena === ""){
		alert("Todos los campos son obligatorios");
		return false;
	}
	else if(nombre.length>20){
		alert("El Nombre es muy largo. Solo se aceptan 20 caracteres");
		return false;
	}
	else if(apellido.length>20){
		alert("El Apellido es muy largo. Solo se aceptan 20 caracteres");
		return false;
	}
	else if(celular.length>10){
		alert("El Celular es muy largo. Solo se aceptan 10 caracteres");
		return false;
	}
	else if(isNaN(celular)){
		alert("El celular ingresado no es un número");
		return false;
	}
	else if(correo.length>30){
		alert("El Correo es muy largo. Solo se aceptan 30 caracteres");
		return false;
	}
	else if(!expresion.test(correo)){
		alert("El correo no es válido");
		return false;
	}
	else if(usuario.length>20){
		alert("El Usuario es muy largo. Solo se aceptan 20 caracteres");
		return false;
	}
	else if(contrasena.length>20){
		alert("La Contraseña es muy larga. Solo se aceptan 20 caracteres");
		return false;
	}
	else if(confirmar_contrasena.length>20){
		alert("La Confirmación de la Contraseña es muy larga. Solo se aceptan 20 caracteres");
		return false;
	}
	else if(contrasena !== confirmar_contrasena){
		alert("La confirmación de la contraseña no coincide con la contraseña escrita");
		return false;
	}

}