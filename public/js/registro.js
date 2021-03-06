var nombre, apellido, usuario, telefono, correo, contrasena, re_contrasena, expresion, passExp, plantilla, render;
nombre = document.getElementById('nombre');
apellido = document.getElementById('apellido');
usuario = document.getElementById('usuario');
telefono = document.getElementById('telefono');
correo = document.getElementById('correo');
contrasena = document.getElementById('contrasena');
re_contrasena = document.getElementById('re_contrasena');
expresion = /^([a-zA-Z0-9_.-])+@(([a-zA-z0-9-])+.)+([a-zA-Z0-9-]{2,4})+$/;
passExp = /(?=[#$-/:-?{-~!"^_`\[\]a-zA-Z]*([0-9#$-/:-?{-~!"^_`\[\]]))(?=[#$-/:-?{-~!"^_`\[\]a-zA-Z0-9]*[a-zA-Z])[#$-/:-?{-~!"^_`\[\]a-zA-Z0-9]{4,}/;
plantilla = document.getElementById('mensaje').innerHTML;
render = Handlebars.compile(plantilla);

function revisar(elemento){
    if(elemento.value==""){
        elemento.className = "error";
    } else {
        elemento.className = "form-input";
    }
} 

function revisaremail() {
        if (!expresion.test(correo.value)) {
            correo.className='error';
        } else {
        correo.className='form-input';
        }
	}


function revisarContra() {
        if(!passExp.test(contrasena.value)){
            contrasena.className = 'error';
        } else {
            contrasena.className = 'form-input';
        }
    }

function tiempo(){
    setTimeout(function(){
        document.getElementById('result').innerHTML = '';
    },2000);
}

function validar() {
   if(nombre.value == '' || apellido.value == '' || usuario.value == '' || telefono.value == '' || correo.value == '' || contrasena.value == '' || re_contrasena.value == '') {
       document.getElementById('result'). innerHTML = render({type: 'danger', body: 'Por favor complete todos los campos '});
        tiempo();
        return false;

   } else if(!expresion.test(correo.value)){
        document.getElementById('result'). innerHTML = render({type: 'danger', body: 'El correo ingresado no es valido'});
       $('#correo').val('');
       tiempo(); 
       return false;  
            

   } else if(!passExp.test(contrasena.value)){
       document.getElementById('result'). innerHTML = render({type: 'danger', body: 'La contraseña ingresada no es válida'});
        $(':password').val('');
         tiempo();
         return false;
         
   } else if(contrasena.value != re_contrasena.value) {
       document.getElementById('result'). innerHTML = render({type: 'danger', body: 'Las contraseñas no coinciden, por favor vuelva a intentar'});
        $(':password').val('');
        tiempo();
        return false;
    } 
}