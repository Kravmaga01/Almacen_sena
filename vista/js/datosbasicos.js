function mostrarProducto(umed,nom, cant, foto,ctli, pcm,pvt,pint,mlts,srv,cntf,pract,dfc,ref, med,pres,ubif,prodequi,unitpro,totpro,stokmin,stokmax,tiemrep,cuentInv,contIng,contAj,contDev,contCost,devCom,contGas,contgasAju,impCom, impVen,user_id) {
  document.getElementById("unidad_medida_mld").innerHTML = "Unidad medida: " + umed.innerHTML; 
  document.getElementById("nombre_producto_mdl").innerHTML = nom.innerHTML;
  document.getElementById("img_mld").src = foto.innerHTML;
  document.getElementById("cantidad_inventario_mld").innerHTML = "Cantidad: " + cant.innerHTML;
  document.getElementById("control_inventario_mdl").innerHTML = "Control inventario: " + verificarBool(ctli.innerHTML); 
  document.getElementById("para_consumo_mdl").innerHTML = "Para consumo: " + verificarBool(pcm.innerHTML); 
  document.getElementById("para_venta_mld").innerHTML = "Para ventas: " + verificarBool(pvt.innerHTML); 
  document.getElementById("produccion_interna_mld").innerHTML = "Para producción interna: " + verificarBool(pint.innerHTML); 
  
  document.getElementById("maneja_lotes_mld").innerHTML = "Maneja lotes: " + verificarBool(mlts.innerHTML); 
  document.getElementById("servicio_mld").innerHTML = "Servicio: " + verificarBool(srv.innerHTML); 
  document.getElementById("conteo_fisicas_mld").innerHTML = "Conteo físicas: " + verificarBool(cntf.innerHTML);
  document.getElementById("producto_activo_mld").innerHTML = "Producto activo: " + verificarBool(pract.innerHTML);
  document.getElementById("datos_fabricante_mld").innerHTML = "Datos fabricante: " + dfc.innerHTML; 
  document.getElementById("referencia_mld").innerHTML = "Referencia: " + ref.innerHTML; 
  document.getElementById("medidas_mld").innerHTML = "Medidas: " + med.innerHTML; 
  document.getElementById("presentacion_mld").innerHTML = "Presentación: " + pres.innerHTML; 
  document.getElementById("ubicacion_fisica_mld").innerHTML = "Ubicación física: " + ubif.innerHTML; 
  document.getElementById("producto_equivalente_mld").innerHTML = "Producto equivalente: " + prodequi.innerHTML; 
  document.getElementById("unitario_promedio_mld").innerHTML = "Unitario promedio: " + unitpro.innerHTML; 
  document.getElementById("total_promedio_mld").innerHTML = "Total promedio: " + totpro.innerHTML; 
  document.getElementById("stock_minimo_mld").innerHTML = "Stock minimo: " + stokmin.innerHTML; 
  document.getElementById("stock_maximo_mld").innerHTML = "Stock maximo: " + stokmax.innerHTML; 
  document.getElementById("tiempo_reposicion_mld").innerHTML = "Tiempo reposicion: " + tiemrep.innerHTML; 
  document.getElementById("cuenta_inventario_mld").innerHTML = "Cuenta inventario: " + cuentInv.innerHTML; 
  document.getElementById("contable_de_ingresos_mld").innerHTML = "Contable de ingresos: " + contIng.innerHTML; 
  document.getElementById("contable_ingreso_ajuste_mld").innerHTML = "Contable de ingresos ajuste: " + contAj.innerHTML; 
  document.getElementById("contable_devolucion_ventas_mld").innerHTML = "Contable devolucion ventas: " + contDev.innerHTML; 
  document.getElementById("contable_costos_mld").innerHTML = "Contable de costos: " + contCost.innerHTML; 
  document.getElementById("devolucion_compras_mld").innerHTML = "Devolucion de compras: " + devCom.innerHTML; 
  document.getElementById("contable_gastos_mld").innerHTML = "Contable de gastos: " + contGas.innerHTML; 
  document.getElementById("contable_gastos_por_ajuste_mld").innerHTML = "Contable de gastos por ajuste: " + contgasAju.innerHTML; 
  document.getElementById("impuesto_compras_mld").innerHTML = "Impuesto de compras: " + impCom.innerHTML; 
  document.getElementById("impuesto_ventas_mld").innerHTML = "impuesto de ventas: " + impVen.innerHTML; 
  // document.getElementById("usuario_id_mld").innerHTML = "Usuario id: " + user_id.innerHTML; 

}
function getScrollHeight(elm) {
  var savedValue = elm.value;
  elm.value = "";
  elm._baseScrollHeight = elm.scrollHeight;
  elm.value = savedValue;
}

function modificarProducto(id,umed, nom, cant, foto,ctli, pcm,pvt,pint,mlts,srv,cntf,pract,dfc,ref, med,pres,ubif,prodequi,unitpro,totpro,stokmin,stokmax,tiemrep,cuentInv,contIng,contAj,contDev,contCost,devCom,contGas,contgasAju,impCom, impVen,user_id) {
  console.log(id);
  document.getElementById('txtModId').value = id.innerHTML;
  document.getElementById('txtModUnidadMedida').value = umed.innerHTML;
document.getElementById('txtModNombreProducto').value = nom.innerHTML;
document.getElementById('txtModCantidad').value = cant.innerHTML;
document.getElementById('img_ingMod').src = foto.innerHTML;
document.getElementById('txtModImg').FileList = foto.innerHTML;
document.getElementById('txtModControlInventario').checked = verificarBool2(ctli.innerHTML);
document.getElementById('txtModParaConsumo').checked = verificarBool2(pcm.innerHTML);
document.getElementById('txtModParaVenta').checked = verificarBool2(pvt.innerHTML);
document.getElementById('txtModProduccionInterna').checked = verificarBool2(pint.innerHTML);
document.getElementById('txtModManejaLotes').checked = verificarBool2(mlts.innerHTML);
document.getElementById('txtModServicio').checked = verificarBool2(srv.innerHTML);
document.getElementById('txtModConteoFisicas').checked = verificarBool2(cntf.innerHTML);
document.getElementById('txtModProductoActivo').checked = verificarBool2(pract.innerHTML);
document.getElementById('txtModDatosFabricante').value = dfc.innerHTML;
document.getElementById('txtModRefetencia').value = ref.innerHTML;
document.getElementById('txtModMedidas').value = med.innerHTML;
document.getElementById('txtModPresentacion').value = pres.innerHTML;
document.getElementById('txtModUbicacionFisica').value = ubif.innerHTML;
document.getElementById('txtModProductoEquivalente').value = prodequi.innerHTML;
document.getElementById('txtModUnitarioPromedio').value = unitpro.innerHTML;
document.getElementById('txtModTotalPromedio').value = totpro.innerHTML;
document.getElementById('txtModStockMinimo').value = stokmin.innerHTML;
document.getElementById('txtModStockMaximo').value = stokmax.innerHTML;
document.getElementById('txtModTiempoReposicion').value = tiemrep.innerHTML;
document.getElementById('txtModCuentaInventario').value = cuentInv.innerHTML;
document.getElementById('txtModContableDeIngresos').value = contIng.innerHTML;
document.getElementById('txtModContableIngresoAjuste').value = contAj.innerHTML;
document.getElementById('txtModContableDevolucionVentas').value = contDev.innerHTML;
document.getElementById('txtModContableCostos').value = contCost.innerHTML;
document.getElementById('txtModDevolucionCompras').value = devCom.innerHTML;
document.getElementById('txtModContableGastos').value = contGas.innerHTML;
document.getElementById('txtModContableGastosPorAjuste').value = contgasAju.innerHTML;
document.getElementById('txtModImpuestoCompras').value = impCom.innerHTML;
document.getElementById('txtModImpuestoVentas').value = impVen.innerHTML;
document.getElementById('txtModUsuario_id').value = user_id.innerHTML;
}
function verificarBool(bool) {
  var menssage = "NO";
  if (bool != 0) {
    menssage = "SI"
  }
  return menssage;
}

function verificarBool2(bool) {
  var menssage = false;
  if (bool != 0) {
    menssage = true
  }
  return menssage;
}
function modificarUsuario(cod, use, pas, rol, dir, pro) {
  document.getElementById("txtModCodigoUser").value = cod.innerHTML;
  document.getElementById("txtModUsuario").value = use.innerHTML;
  document.getElementById("txtModContraseña").value = pas.innerHTML;
  document.getElementById("txtModRol").value = rol.innerHTML;
}
function modificarInstructor(cod, use, pas, doc, nom, ape, tel, gma, id_u) {
  document.getElementById("txtModCodigo").value = cod.innerHTML;
  document.getElementById("txtModUsuario").value = use.innerHTML;
  document.getElementById("txtModContraseña").value = pas.innerHTML;
  document.getElementById("txtModDocumento").value = doc.innerHTML;
  document.getElementById("txtModNombre").value = nom.innerHTML;
  document.getElementById("txtModRol").value = "INSTRUCTOR";

  document.getElementById("txtModApellido").value = ape.innerHTML;
  document.getElementById("txtModTelefono").value = tel.innerHTML;
  document.getElementById("txtModGmail").value = gma.innerHTML;
  document.getElementById("txtModCodigoUser").value = id_u.innerHTML;
}

function modificarProveedor1(cod, use, pas, tip, nit, nom, rzc, cod_p, nom_p, cod_d, nom_d, cod_c, nom_c, dir, tel, gma, aut_g, id_u) {
  document.getElementById('Natural').style.display = 'none';
  document.getElementById('Juridica').style.display = 'block';
  document.getElementById("txtModCodigo").value = cod.innerHTML;
  document.getElementById("txtModCodigoUser").value = id_u.innerHTML;
  document.getElementById("txtModUsuario").value = use.innerHTML;
  document.getElementById("txtModContraseña").value = pas.innerHTML;
  document.getElementById("txtModTipoPersona").value = tip.innerHTML;
  document.getElementById("txtModNIT").value = nit.innerHTML;
  document.getElementById("txtModNombre").value = nom.innerHTML;
  document.getElementById("txtModRazonSocial").value = rzc.innerHTML;
  document.getElementById("txtModCodPais").value = cod_p.innerHTML;
  document.getElementById("txtModNomPais").value = nom_p.innerHTML;
  document.getElementById("txtModCodDep").value = cod_d.innerHTML;
  document.getElementById("txtModNomDep").value = nom_d.innerHTML;
  document.getElementById("txtModCodCiud").value = cod_c.innerHTML;
  document.getElementById("txtModNomCiud").value = nom_c.innerHTML;
  document.getElementById("txtModDir").value = dir.innerHTML;
  document.getElementById("txtModTel").value = tel.innerHTML;
  document.getElementById("txtModGma").value = gma.innerHTML;
  document.getElementById("txtModAutGma").value = aut_g.innerHTML;
}
function modificarProveedor2(cod, use, pas, tip, doc, rut, nom, ape, cod_p, nom_p, cod_d, nom_d, cod_c, nom_c, dir, tel, gma, aut_g, id_u) {
  document.getElementById('Juridica').style.display = 'none';
  document.getElementById('Natural').style.display = 'block';
  document.getElementById("txtModCodigo").value = cod.innerHTML;
  document.getElementById("txtModCodigoUser").value = id_u.innerHTML;
  document.getElementById("txtModUsuario").value = use.innerHTML;
  document.getElementById("txtModContraseña").value = pas.innerHTML;
  document.getElementById("txtModTipoPersona").value = tip.innerHTML;
  document.getElementById("txtModDocumento").value = doc.innerHTML;
  document.getElementById("txtModRut").value = rut.innerHTML;
  document.getElementById("txtModNombre").value = nom.innerHTML;
  document.getElementById("txtModApellido").value = ape.innerHTML;
  document.getElementById("txtModCodPais").value = cod_p.innerHTML;
  document.getElementById("txtModNomPais").value = nom_p.innerHTML;
  document.getElementById("txtModCodDep").value = cod_d.innerHTML;
  document.getElementById("txtModNomDep").value = nom_d.innerHTML;
  document.getElementById("txtModCodCiud").value = cod_c.innerHTML;
  document.getElementById("txtModNomCiud").value = nom_c.innerHTML;
  document.getElementById("txtModDir").value = dir.innerHTML;
  document.getElementById("txtModTel").value = tel.innerHTML;
  document.getElementById("txtModGma").value = gma.innerHTML;
  document.getElementById("txtModAutGma").value = aut_g.innerHTML;
}

function eliminarUsuario(cod) {

  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
  })

  swalWithBootstrapButtons.fire({
    title: 'Esta seguro?',
    text: "Esto es irreversible!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Borrar!',
    cancelButtonText: 'Cancelar!',
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {

      window.location = 'index.php?ruta=inicio&codigoUsuario=' + cod.innerHTML;

      swalWithBootstrapButtons.fire(
        'Borrado!',
        'El registro ha sido borrado.',
        'success'
      )
    } else if (
      /* Read more about handling dismissals below */
      result.dismiss === Swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons.fire(
        'Cancelado',
        '',
        'error'
      )
    }
  })

  //
}
function eliminar(cod) {

  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
  })

  swalWithBootstrapButtons.fire({
    title: 'Esta seguro?',
    text: "Esto es irreversible!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Borrar!',
    cancelButtonText: 'Cancelar!',
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {

      window.location = 'index.php?ruta=instructores&codigoInstructor=' + cod.innerHTML;

      swalWithBootstrapButtons.fire(
        'Borrado!',
        'El registro ha sido borrado.',
        'success'
      )
    } else if (
      /* Read more about handling dismissals below */
      result.dismiss === Swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons.fire(
        'Cancelado',
        '',
        'error'
      )
    }
  })

  //
}

function eliminarProducto(cod) {

  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
  })

  swalWithBootstrapButtons.fire({
    title: 'Esta seguro?',
    text: "Esto es irreversible!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Borrar!',
    cancelButtonText: 'Cancelar!',
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {

      window.location = 'index.php?ruta=productos2&codigoProducto=' + cod.innerHTML;

      swalWithBootstrapButtons.fire(
        'Borrado!',
        'El registro ha sido borrado.',
        'success'
      )
    } else if (
      /* Read more about handling dismissals below */
      result.dismiss === Swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons.fire(
        'Cancelado',
        '',
        'error'
      )
    }
  })

  //
}
function editarCategorias(id){
  // window.location = 'index.php?ruta=productos2&codigoClaseProducto=' + id.innerHTML; 
}
function solicitudEstado(id, estado,cant, id_pro){
  console.log(estado)
  window.location = 'index.php?ruta=solicitudes&idSolicitud=' + id.innerHTML + '&estadoSolicitud=' + estado + '&cantidadSolicitud=' + cant.innerHTML + '&idProSolicitud=' + id_pro.innerHTML;
}
function solicitarProducto(id_producto, foto, cant){
  document.getElementById('img_mld1').src = foto.innerHTML;
  $('#cantidadSolicitada').attr('max', cant.innerHTML);
  console.log(id_producto)
  document.getElementById("id_producto1").value = id_producto.innerHTML;

  // document.getElementById('cantidadSolicitada').setAttribute('max','2');
}

function reporteHumano(nom) {
  window.open('vista/reportes/reportehumano.php?nombre=' + nom.innerHTML, '_blank');
}

$(document).on("click", "#img_ing", function(){
  $("#txtInsertImg").click();
})

$(document).on("change", "#txtInsertImg", function(){
  console.log(this.files);

  if(this.files.length > 0){
  var files = this.files;
  var element;
  var supportedImages = ["image/jpeg", "image/png"];
  var elementNotValide  = false;
  
    for(var i = 0;  i < files.length; i++){
      element = files[i];

      if(supportedImages.indexOf(element.type)  !=  -1){
        document.getElementById("img_ing").src = URL.createObjectURL(element);
        document.getElementById("contenedor-btn-file").classList.add("dpl");

      }else{
        elementNotValide  = true;
      }
    }
  }
})
$(document).on("click", "#img_ingMod", function(){
  if( window.location.href == "http://localhost/ALMACEN_SENA/inicio1"){

  }else{
  $("#txtModImg").click();
  }
})
$(document).on("change", "#txtModImg", function(){
  console.log(this.files);

  if(this.files.length > 0){
  var files = this.files;
  var element;
  var supportedImages = ["image/jpeg", "image/png"];
  var elementNotValide  = false;
  
    for(var i = 0;  i < files.length; i++){
      element = files[i];

      if(supportedImages.indexOf(element.type)  !=  -1){
        document.getElementById("img_ingMod").src = URL.createObjectURL(element);
        document.getElementById("contenedor-btn-fileMod").classList.add("dpl");

      }else{
        elementNotValide  = true;
      }
    }
  }
})

function onExpandableTextareaInput({ target: elm }) {
  // make sure the input event originated from a textarea and it's desired to be auto-expandable
  if (!elm.classList.contains("autoExpand") || !elm.nodeName == "TEXTAREA")
  return;
  var minRows = elm.getAttribute("data-min-rows") | 0,
    rows;
  !elm._baseScrollHeight && getScrollHeight(elm);

  elm.rows = minRows;
  rows = Math.ceil((elm.scrollHeight - elm._baseScrollHeight) / 16);
  elm.rows = minRows + rows;
}

function onExpandableTextareaInput2({ target: elm }) {
  // make sure the input event originated from a textarea and it's desired to be auto-expandable
  if (!elm.classList.contains("autoExpand") || !elm.nodeName == "TEXTAREA")
  return;
  if(document.getElementById("btn"+elm.id).classList !="dpl"){
  $('#'+elm.id).removeAttr('readOnly')
  }else{
  Swal.fire({
    icon: 'warning',
    title: 'Desea editar',
    showCancelButton: true,
    confirmButtonText: 'Si',
    denyButtonText: `Don't save`,
  }).then((result) => {
    if (result.isConfirmed) {
      if(elm.id == 'Tipo_persona'){
        document.getElementById('Tipo_persona').classList.add('dpl');
        document.getElementById('txtModTipoPersona').classList.remove('dpl')
      }
  $('#'+elm.id).removeAttr('readOnly')
  document.getElementById("btn"+elm.id).classList.remove("dpl")
  $("#"+elm.id).click();
    } 
  })
}
}
// global delegated event listener
function lol(va){
  switch (va) {
    case 1:
  $("#nombre").click();
      break;
      case 2:
        $("#apellido").click();
        break;   
      case 3:
        $("#UserName").click();
        break;    
      case 4:
        $("#Password").click();
        break;    
      case 5:
        $("#numero_documento").click();
        break;    
      case 6:
        $("#telefono").click();
        break;
      case 7:
        $("#gmail").click();
        break;
        case 9:
        $('#txtModTipoPersona').click();
        break;
        case 10:
        $('#Numero_documento').click();
        break;
        case 11:
        $('#NIT').click();
        break;
        case 12:
        $('#RUT').click();
        break;
        case 13:
        $('#Nombre').click();
        break;
        case 14:
        $('#Apellido').click();
        break;
        case 15:
        $('#Razon_social').click();
        break;
        case 16:
        $('#Codigo_pais').click();
        break;
        case 17:
        $('#Nombre_pais').click();
        break;
        case 18:
        $('#Codigo_departamento').click();
        break;
        case 19:
        $('#Nombre_departamento').click();
        break;
        case 20:
        $('#Codigo_ciudad').click();
        break;
        case 21:
        $('#Nombre_ciudad').click();
        break;
        case 22:
        $('#Direccion').click();
        break;
        case 23:
        $('#Telefono').click();
        break;
        case 24:
        $('#Gmail').click();
        break;
        case 25:
        $('#Autorizacion_Gmail').click();
        break;
    default:
      break;
  }
}
function lol2(){
  document.getElementById("nombre").setAttribute('rows','2');
  $('#nombre').attr('readonly', 'readonly');
  document.getElementById("apellido").setAttribute('rows','2');

}
function lol3(){
  document.getElementById('Numero_documento').setAttribute('rows','2');
  $('#Numero_documento').attr('readonly', 'readonly');
  document.getElementById('UserName').setAttribute('rows','2');
  $('#UserName').attr('readonly', 'readonly');
  document.getElementById('Password').setAttribute('rows','2');
  $('#Password').attr('readonly', 'readonly');
  document.getElementById('RUT').setAttribute('rows','2');
  $('#RUT').attr('readonly', 'readonly');
  document.getElementById('Nombre').setAttribute('rows','2');
  $('#Nombre').attr('readonly', 'readonly');
  document.getElementById('Apellido').setAttribute('rows','2');
  $('#Apellido').attr('readonly', 'readonly');
  document.getElementById('Razon_social').setAttribute('rows','2');
  $('#Razon_social').attr('readonly', 'readonly');
  document.getElementById('Codigo_pais').setAttribute('rows','2');
  $('#Codigo_pais').attr('readonly', 'readonly');
  document.getElementById('Nombre_pais').setAttribute('rows','2');
  $('#Nombre_pais').attr('readonly', 'readonly');
  document.getElementById('Codigo_departamento').setAttribute('rows','2');
  $('#Codigo_departamento').attr('readonly', 'readonly');
  document.getElementById('Nombre_departamento').setAttribute('rows','2');
  $('#Nombre_departamento').attr('readonly', 'readonly');
  document.getElementById('Codigo_ciudad').setAttribute('rows','2');
  $('#Codigo_ciudad').attr('readonly', 'readonly');
  document.getElementById('Nombre_ciudad').setAttribute('rows','2');
  $('#Nombre_ciudad').attr('readonly', 'readonly');
  document.getElementById('Direccion').setAttribute('rows','2');
  $('#Direccion').attr('readonly', 'readonly');
  document.getElementById('Telefono').setAttribute('rows','2');
  $('#Telefono').attr('readonly', 'readonly');
  document.getElementById('Gmail').setAttribute('rows','2');
  $('#Gmail').attr('readonly', 'readonly');
  document.getElementById('Autorizacion_Gmail').setAttribute('rows','2');
  $('#Autorizacion_Gmail').attr('readonly', 'readonly');
}
document.addEventListener("click", onExpandableTextareaInput);
document.addEventListener("dblclick", onExpandableTextareaInput2);
