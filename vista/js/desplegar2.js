
mostrarJuridica();

const form  =   document.getElementById('formularioJuridica');
var id_proveedor,Tipo_persona,Nombre,Codigo_pais,Nombre_pais,Codigo_departamento,Nombre_departamento,Codigo_ciudad,Nombre_ciudad,Direccion,Telefono,Gmail,Autorizacion_Gmail,id_usuario;
var nit, Razon_social;
var rut, Numero_documento, Apellido;
const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}

function init(){
    Tipo_persona = document.getElementById('txtModTipoPersona').value;
    Nombre = document.getElementById('Nombre').value;
    Codigo_pais = document.getElementById('Codigo_pais').value;
    Nombre_pais = document.getElementById('Nombre_pais').value;
    Codigo_departamento = document.getElementById('Codigo_departamento').value;
    Nombre_departamento = document.getElementById('Nombre_departamento').value;
    Codigo_ciudad = document.getElementById('Codigo_ciudad').value;
    Nombre_ciudad = document.getElementById('Nombre_ciudad').value;
    Direccion = document.getElementById('Direccion').value;
    Telefono = document.getElementById('Telefono').value;
    Gmail = document.getElementById('Gmail').value;
    Autorizacion_Gmail = document.getElementById('Autorizacion_Gmail').value;
    id_usuario = document.getElementById('txtModCodigo').value;
    if(Tipo_persona  ==  "NATURAL"){
        rut = document.getElementById('RUT').value;
        Numero_documento = document.getElementById('Numero_documento').value;
        Apellido = document.getElementById('Apellido').value;
    }else{
        nit = document.getElementById('NIT').value;
        Razon_social = document.getElementById('Razon_social').value;
    }
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
    console.log(Tipo_persona)
    messages    =   validarDatos(Tipo_persona, "tipo de persona");
    if(Nombre === '' || Nombre == null){
        messages.push('El nombre es obligatorio');
    }  
    if ( Tipo_persona == "NATURAL"){
        if(rut === '' || rut == null){
            messages.push('El rut es obligatorio');
        }        
        if(Numero_documento === '' || Numero_documento == null){
            messages.push('El documento es obligatorio');
        }
        if(Apellido === '' || Apellido == null){
            messages.push('El apellido es obligatorio');
        }
    }else{
        if ( Tipo_persona == "JURIDICA"){
            if(nit === '' || nit == null){
                messages.push('El nit es obligatorio');
            }
            if(Razon_social === '' || Razon_social == null){
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