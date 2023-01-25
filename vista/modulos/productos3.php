<link rel="stylesheet" href="vista/css/producto.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Productos

    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-female"></i> Producto</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box ">
      <div class="box-header with-border">
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="table-responsive">
        <table id="tablaHumano" class="table table-dark table-striped">
          <thead>
            <tr>
              <th>id</th>
              <th>Nombre</th>
              <th>Producto</th>
              <th>Cantidad</th>
            </tr>
          </thead>
          <tbody>
            <?php

            $objHumano = new ControladorProducto();
            $arrayHumano = $objHumano->ctrListarProductos();


            foreach ($arrayHumano as $campo) {
              $cod = $campo['id_producto'];
              $foto = "http://localhost/ALMACEN_SENA/vista/img/up/" . $campo['foto'];
            ?>
              <div>
                <h1 class="dpl" id="<?php echo 'umed' . $cod; ?>"><?php echo $campo['unidadMedida'];  ?></h1>

                <h1 class="dpl" id="<?php echo 'img' . $cod; ?>"><?php echo $foto;  ?></h1>
                <h1 class="dpl" id="<?php echo 'ctli' . $cod; ?>"><?php echo $campo['controlInventario'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'pcm' . $cod; ?>"><?php echo $campo['paraConsumo'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'pvt' . $cod; ?>"><?php echo $campo['paraVenta'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'pint' . $cod; ?>"><?php echo $campo['produccionInterna'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'mlts' . $cod; ?>"><?php echo $campo['manejaLotes'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'srv' . $cod; ?>"><?php echo $campo['servicio'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'cntf' . $cod; ?>"><?php echo $campo['conteoFisicas'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'pract' . $cod; ?>"><?php echo $campo['productoActivo'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'dfc' . $cod; ?>"><?php echo $campo['datosFabricante'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'ref' . $cod; ?>"><?php echo $campo['refetencia'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'med' . $cod; ?>"><?php echo $campo['medidas'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'pres' . $cod; ?>"><?php echo $campo['presentacion'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'ubif' . $cod; ?>"><?php echo $campo['ubicacionFisica'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'prodequi' . $cod; ?>"><?php echo $campo['productoEquivalente'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'unitpro' . $cod; ?>"><?php echo $campo['unitarioPromedio'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'totpro' . $cod; ?>"><?php echo $campo['totalPromedio'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'stokmin' . $cod; ?>"><?php echo $campo['stockMinimo'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'stokmax' . $cod; ?>"><?php echo $campo['stockMaximo'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'tiemrep' . $cod; ?>"><?php echo $campo['tiempoReposicion'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'cuentInv' . $cod; ?>"><?php echo $campo['cuentaInventario'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'contIng' . $cod; ?>"><?php echo $campo['contableDeIngresos'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'contAj' . $cod; ?>"><?php echo $campo['contableIngresoAjuste'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'contDev' . $cod; ?>"><?php echo $campo['contableDevolucionVentas'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'contCost' . $cod; ?>"><?php echo $campo['contableCostos'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'devCom' . $cod; ?>"><?php echo $campo['devolucionCompras'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'contGas' . $cod; ?>"><?php echo $campo['contableGastos'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'contgasAju' . $cod; ?>"><?php echo $campo['contableGastosPorAjuste'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'impCom' . $cod; ?>"><?php echo $campo['impuestoCompras'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'impVen' . $cod; ?>"><?php echo $campo['impuestoVentas'];  ?></h1>
                <h1 class="dpl" id="<?php echo 'user_id' . $cod; ?>"><?php echo $campo['usuario_id'];  ?></h1>

              </div>
              <tr>
                <td id="<?php echo 'cod' . $cod; ?>"><?php echo $cod;  ?></td>
                <td id="<?php echo 'nom' . $cod; ?>"><?php echo $campo['nombreProducto'];  ?></td>
                <td id="<?php echo 'ced' . $cod; ?>">
                  <div class="div_img">
                    <a data-toggle='modal' data-target="#modalMostrar" style="cursor:pointer">
                      <img src="<?php echo $foto ?>" alt="" class="img_table" onclick='mostrarProducto(<?php echo "umed" . $cod ?>,<?php echo "nom" . $cod ?>,<?php echo "cant" . $cod ?>,<?php echo "img" . $cod ?>,<?php echo "ctli" . $cod ?>,<?php echo "pcm" . $cod ?>,<?php echo "pvt" . $cod ?>,<?php echo "pint" . $cod ?>,<?php echo "mlts" . $cod ?>,<?php echo "srv" . $cod ?>,<?php echo "cntf" . $cod ?>,<?php echo "pract" . $cod ?>,<?php echo "dfc" . $cod ?>,<?php echo "ref" . $cod ?>,<?php echo "med" . $cod ?>,<?php echo "pres" . $cod ?>,<?php echo "ubif" . $cod ?>,<?php echo "prodequi" . $cod ?>,<?php echo "unitpro" . $cod ?>,<?php echo "totpro" . $cod ?>,<?php echo "stokmin" . $cod ?>,<?php echo "stokmax" . $cod ?>,<?php echo "tiemrep" . $cod ?>,<?php echo "cuentInv" . $cod ?>,<?php echo "contIng" . $cod ?>,<?php echo "contAj" . $cod ?>,<?php echo "contDev" . $cod ?>,<?php echo "contCost" . $cod ?>,<?php echo "devCom" . $cod ?>,<?php echo "contGas" . $cod ?>,<?php echo "contgasAju" . $cod ?>,<?php echo "impCom" . $cod ?>,<?php echo "impVen" . $cod ?>,<?php echo "user_id" . $cod ?>)'>
                    </a>
                  </div>
                </td>
                <td id="<?php echo 'cant' . $cod; ?>"><?php echo $campo['cantidad'];  ?></td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>

<!-- Modal Modificar-->
<div tabindex="-1" class="modal fade" id="modalMostrar" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style='background:#3c8dbc; color:white;'>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h1 id="nombre_producto_mdl" class="modal-title">NOMBRE PRODUCTO</h1>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class='col-sm-5 col-md-5 col-lg-5 col-xl-5'>
              <div>
                <img id="img_mld" src="" alt="" class="img_div">
              </div>
            </div>
            <div class='col-sm-4 col-md-4 col-lg-4 col-xl-4'>
              <div class="info-producto">
                <h2 id="unidad_medida_mld"></h2>
                <h2 id="cantidad_inventario_mld"></h2>
                <h2 id="control_inventario_mdl"></h2>
                <h2 id="para_consumo_mdl"></h2>
                <h2 id="para_venta_mld"></h2>
                <h2 id="produccion_interna_mld"></h2>
                <h2 id="maneja_lotes_mld"></h2>
                <h2 id="servicio_mld"></h2>
                <h2 id="conteo_fisicas_mld"></h2>
                <h2 id="producto_activo_mld"></h2>
                <h2 id="datos_fabricante_mld"></h2>
                <h2 id="referencia_mld"></h2>
                <h2 id="medidas_mld"></h2>
                <h2 id="presentacion_mld"></h2>
                <h2 id="ubicacion_fisica_mld"></h2>
                <h2 id="producto_equivalente_mld"></h2>
                <h2 id="unitario_promedio_mld"></h2>
                <h2 id="total_promedio_mld"></h2>
                <h2 id="stock_minimo_mld"></h2>
                <h2 id="stock_maximo_mld"></h2>
                <h2 id="tiempo_reposicion_mld"></h2>
                <h2 id="cuenta_inventario_mld"></h2>
                <h2 id="contable_de_ingresos_mld"></h2>
                <h2 id="contable_ingreso_ajuste_mld"></h2>
                <h2 id="contable_devolucion_ventas_mld"></h2>
                <h2 id="contable_costos_mld"></h2>
                <h2 id="devolucion_compras_mld"></h2>
                <h2 id="contable_gastos_mld"></h2>
                <h2 id="contable_gastos_por_ajuste_mld"></h2>
                <h2 id="impuesto_compras_mld"></h2>
                <h2 id="impuesto_ventas_mld"></h2>
                <h2 id="usuario_id_mld"></h2>

              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>

<?php
if (isset($_GET['codigoHumano'])) {
  $objHumano = new ControladorHumano();
  if ($objHumano->ctrEliminarHumano($_GET['codigoHumano'])) {
    echo '
        <script>
          window.location="humano";
        </script>
        ';
  }
}
?>