var b;
function load(id){
    document.getElementById(id).checked = true;

}
function subclasesocl(id_check, valor, id, producto){
    estado = document.getElementById(id_check).checked;
    console.log(id_check);
    s = document.getElementById("txtCategorias").value;
    window.location="index.php?ruta=clases&txtIdProducto="+producto+"&clase="+s+"&subclase="+id;

}
function mostrarClases(id){
    Swal.fire({
        title: '¿Esta seguro que quiere cambiar la clase?',
        showDenyButton: true,
        confirmButtonText: 'CAMBIAR',
        denyButtonText: `NO CAMBIAR`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            s = document.getElementById("txtCategorias").value;
            window.location="index.php?ruta=clases&txtIdProducto="+id+"&clase="+s;
        } else if (result.isDenied) {
            document.location= document.location;
        }
    })
        
}