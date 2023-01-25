
const form  =   document.getElementById('formularioJuridica');
var usuario, contraseña, tipoPersona, nombre, codigo_pais, nombre_pais, codigo_departamento, nombre_departamento,codigo_ciudad, nombre_ciudad, direccion, telefono, correo, aut_correo;
var nit, razon_social;
var rut, documento, apellido;
const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}

function init(){
    usuario       =   document.getElementById("txtModUsuario").value;
    contraseña       =   document.getElementById("txtModContraseña").value;
    tipoPersona   =   document.getElementById("txtModTipoPersona").value;
    if(tipoPersona  ==  "NATURAL"){
        rut       =   document.getElementById("txtModRut").value;
        documento       =   document.getElementById("txtModDocumento").value;
        apellido       =   document.getElementById("txtModApellido").value;
    }else{
        nit       =   document.getElementById("txtModNIT").value;
        razon_social       =   document.getElementById("txtModRazonSocial").value;
    }
    nombre       =   document.getElementById("txtModNombre").value;
    codigo_pais       =   document.getElementById("txtModCodPais").value;
    nombre_pais       =   document.getElementById("txtModNomPais").value;
    codigo_departamento       =   document.getElementById("txtModCodDep").value;
    nombre_departamento       =   document.getElementById("txtModNomDep").value;
    codigo_ciudad       =   document.getElementById("txtModCodCiud").value;
    nombre_ciudad       =   document.getElementById("txtModNomCiud").value;
    direccion       =   document.getElementById("txtModDir").value;
    telefono       =   document.getElementById("txtModTel").value;
    correo       =   document.getElementById("txtModGma").value;
    aut_correo       =   document.getElementById("txtModAutGma").value;
}

function validarDatos(v, v1){

    let messages = []

    if(v === '' || v == null || v === 'Seleccione el tipo de persona'){
        messages.push('El campo ' + v1 + ' es obligatorio');
        console.log(messages);
    }
    return messages;
}

form.addEventListener('submit', (e) =>{

    let messages = []
    init();

    messages    =   validarDatos(usuario, "usuario");
    messages    =   validarDatos(contraseña, "contraseña");
    messages    =   validarDatos(tipoPersona, "tipo de persona");

    if ( tipoPersona == "NATURAL"){
        if(rut === '' || rut == null){
            messages.push('El rut es obligatorio');
        }        
        if(documento === '' || documento == null){
            messages.push('El documento es obligatorio');
        }
        if(apellido === '' || apellido == null){
            messages.push('El apellido es obligatorio');
        }
    }else{
        if ( tipoPersona == "JURIDICA"){
            if(nit === '' || nit == null){
                messages.push('El nit es obligatorio');
            }
            if(razon_social === '' || razon_social == null){
                messages.push('La razón social es obligatorio');
            }
        }
    }
    if(messages.length > 0){
        e.preventDefault()
        Swal.fire(messages[0]);
        console.log(messages);
        }
})

function mostrarJuridica(){
    var persona = document.formularioJuridica.txtModTipoPersona[document.formularioJuridica.txtModTipoPersona.selectedIndex].value;
    if(persona != 0){
        if(persona == "JURIDICA"){
            document.getElementById('Natural').style.display = 'none';
            document.getElementById('Juridica').style.display = 'block';
            document.getElementById("txtModTipoPersona").value = "JURIDICA";
            document.getElementsByClassName("naturalRequire");    
        }else{
            document.getElementById('Juridica').style.display = 'none';
            document.getElementById('Natural').style.display = 'block';
            document.getElementById("txtModTipoPersona").value = "NATURAL";
        }
    }

}