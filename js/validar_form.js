function validarFormulario(){
if(document.frm.nombre.value==""){
	alert("Ingrese su nombre");
	document.frm.nombre.focus();
	return false;
	}
else if(document.frm.email.value==""){
	alert("Ingrese su email");
	document.frm.email.focus();
	return false;
	}
else if(document.frm.asunto.value==""){
	alert("Ingrese asunto");
	document.frm.asunto.focus();
	return false;
	}
else if(document.frm.mensaje.value==""){
	alert("Introduzca un mensaje");
	document.frm.mensaje.focus();
	return false;
	}
return true;
}
function validarCuenta(){
if(document.frm_padres.login_padres.value==""){
	alert("Ingrese su login por favor");
	document.frm_padres.login_padres.focus();
	return false;
	}
else if(document.frm_padres.pass_padres.value==""){
	alert("Ingrese su password por favor");
	document.frm_padres.pass_padres.focus();
	return false;
	}
return true;
}