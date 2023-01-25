
const form  =   document.getElementById('formularioClases');
var  clase, subclase;
const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}

function init(){
    clase       =   document.getElementById("txtCategorias").value;
    subclase       =   document.getElementById("txtCategoria").value;
}

function validarDatos(v, v1){

    let messages = []

    if(v === '' || v == null || v ==="SELECIONE LA CATEGORIA"){
        messages.push('El campo ' + v1 + ' es obligatorio');
        console.log(messages);
    }
    return messages;
}

form.addEventListener('submit', (e) =>{

    let messages = []
    init();

    messages    =   validarDatos(clase, "clase");
    if(subclase === '' || subclase == null){
        messages.push('El nombre es obligatorio');
    }  
    if(messages.length > 0){
        e.preventDefault()
        Swal.fire(messages[0]);
        console.log(messages);
        }
})

function mostrarJuridica(){
    var persona = document.formularioClases.txtModTipoPersona[document.formularioClases.txtModTipoPersona.selectedIndex].value;
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