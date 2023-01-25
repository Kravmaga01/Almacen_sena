<link rel="stylesheet" href="vista/css/producto.css">
<script src="vista/js/jquery-3.6.0.min.js"></script>

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
        <!-- <button type="button" class='btn btn-primary' data-toggle="modal" data-target="#modalCrear"> CREAR PRODUCTO
        </button> -->
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
              <th>Categorias</th>
              <th>Cantidad</th>
              <th>Acciones</th>
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
                <td id="<?php echo 'cat' . $cod; ?>">
                  <form method="POST">

                    <?php
                    $objHumano1 = new ControladorProducto();
                    $arrayHumano1 = $objHumano1->ctrListarCategoriasProducto($cod);

                    foreach ($arrayHumano1 as $campo1) {
                      echo $campo1['nombreCategoria'];
                    ?>
                      <br>
                    <?php
                    }
                    ?>
                    <?php
                    $objHumano1 = new ControladorProducto();
                    $arrayHumano1 = $objHumano1->ctrListarSubCategoriasProducto($cod);

                    foreach ($arrayHumano1 as $campo1) {
                      echo $campo1['nombreCategoria'];
                    ?>
                      <br>
                    <?php
                    }
                    ?>
                    <input type="hidden" id="txtIdProducto" name="txtIdProducto" value="<?php echo $cod ?>">
                    <input type="hidden" id="lol" name="lol" value="e">
                    <button type='submit' class='btn btn-warning'><i class='fa fa-edit'></i></button>
                  </form>
                </td>

                <td id="<?php echo 'cant' . $cod; ?>"><?php echo $campo['cantidad'];  ?></td>
                <td>
                  <!-- <button type='button' class='btn btn-success' data-toggle='modal'><i class='fa fa-file' onclick='reporteHumano(<?php echo "nom" . $cod; ?>)'></i></button> -->
                  <button type='button' class='btn btn-warning' data-toggle='modal' data-target="#modalModificar" onclick='modificarProducto(<?php echo "cod" . $cod ?>,<?php echo "umed" . $cod ?>, <?php echo "nom" . $cod ?>,<?php echo "cant" . $cod ?>,<?php echo "img" . $cod ?>,<?php echo "ctli" . $cod ?>,<?php echo "pcm" . $cod ?>,<?php echo "pvt" . $cod ?>,<?php echo "pint" . $cod ?>,<?php echo "mlts" . $cod ?>,<?php echo "srv" . $cod ?>,<?php echo "cntf" . $cod ?>,<?php echo "pract" . $cod ?>,<?php echo "dfc" . $cod ?>,<?php echo "ref" . $cod ?>,<?php echo "med" . $cod ?>,<?php echo "pres" . $cod ?>,<?php echo "ubif" . $cod ?>,<?php echo "prodequi" . $cod ?>,<?php echo "unitpro" . $cod ?>,<?php echo "totpro" . $cod ?>,<?php echo "stokmin" . $cod ?>,<?php echo "stokmax" . $cod ?>,<?php echo "tiemrep" . $cod ?>,<?php echo "cuentInv" . $cod ?>,<?php echo "contIng" . $cod ?>,<?php echo "contAj" . $cod ?>,<?php echo "contDev" . $cod ?>,<?php echo "contCost" . $cod ?>,<?php echo "devCom" . $cod ?>,<?php echo "contGas" . $cod ?>,<?php echo "contgasAju" . $cod ?>,<?php echo "impCom" . $cod ?>,<?php echo "impVen" . $cod ?>,<?php echo "user_id" . $cod ?>)'><i class='fa fa-edit'></i></button>
                  <button type='button' class='btn btn-danger' data-toggle='modal' onclick='eliminarProducto(<?php echo "cod" . $cod; ?>)'><i class='fa fa-trash'></i></button>
                </td>
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


<!-- Modal Mostrar-->
<div tabindex="-1" class="modal fade" id="modalMostrar" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style='background:#3c8dbc; color:white;'>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h1 id="nombre_producto_mdl" class="modal-title">NOMBRE PRODUCTO</h1>
      </div>
      <div class="modal-body">
        <div class="container" style="width: auto;">
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
<!-- Modal Crear-->
<div tabindex="-1" class="modal fade" id="modalCrear" role="dialog">

  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form method="post" name="formularioJuridica" id="formularioJuridica" enctype="multipart/form-data">
        <div class="modal-header" style='background:#3c8dbc; color:white;'>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Crear producto</h4>
        </div>

        <div class='form-group'>
          <div class="modal-body">

            <input type="hidden" id="txtInsertUsuario_id" name="txtInsertUsuario_id" value="<?php echo $_SESSION['id_user'] ?>">

            <div>
              <img id="img_ing" src="" alt="" class="img_div" style="cursor:pointer">

              <!-- ingreso de Imagen-->
              <div class='form-group' id="contenedor-btn-file">
                <div class='input-group'>
                  <button class="contenedor-btn-file bordeado" disabled="true">
                    Adjuntar foto
                    <label for="txtInsertImg"></label>
                    <input type="file" id="txtInsertImg" name="txtInsertImg" accept="image/*,image/heif,image/heic">
                  </button>
                </div>
              </div>
              <!-- ingreso de UnidadMedida -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertUnidadMedida' type='text' class='form-control input-lg' name='txtInsertUnidadMedida' placeholder='Ingrese la unidad de medida'>
                </div>
              </div>
              <!-- ingreso de NombreProducto -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertNombreProducto' type='text' class='form-control input-lg' name='txtInsertNombreProducto' placeholder='Ingrese el nombre del producto'>
                </div>
              </div>
              <!-- ingreso de Cantidad -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertCantidad' type='number' class='form-control input-lg' name='txtInsertCantidad' placeholder='Ingrese la cantidad'>
                </div>
              </div>
              <!-- ingreso de ControlInventario -->
              <div class='form-group'>
                <div class='check-group'>
                  <input id='txtInsertControlInventario' type='checkbox' class='form-check-input' name='txtInsertControlInventario'>
                  <label for="txtInsertControlInventario">Control inventario</label>

                  <!-- ingreso de ParaConsumo -->
                  <input id='txtInsertParaConsumo' type='checkbox' class='form-check-input' name='txtInsertParaConsumo'>
                  <label for="txtInsertParaConsumo">Para consumo</label>

                  <!-- ingreso de txtInsertParaVenta -->
                  <input id='txtInsertParaVenta' type='checkbox' class='form-check-input' name='txtInsertParaVenta'>
                  <label for="txtInsertParaVenta">Para venta</label>

                  <!-- ingreso de txtInsertProduccionInterna -->
                  <input id='txtInsertProduccionInterna' type='checkbox' class='form-check-input' name='txtInsertProduccionInterna'>
                  <label for="txtInsertProduccionInterna">Para producción interna</label>

                  <!-- ingreso de txtInsertManejaLotes -->
                  <input id='txtInsertManejaLotes' type='checkbox' class='form-check-input' name='txtInsertManejaLotes'>
                  <label for="txtInsertManejaLotes">Maneja lotes</label>

                  <!-- ingreso de txtInsertServicio -->
                  <input id='txtInsertServicio' type='checkbox' class='form-check-input' name='txtInsertServicio'>
                  <label for="txtInsertServicio">Servicio</label>

                  <!-- ingreso de txtInsertConteoFisicas -->
                  <input id='txtInsertConteoFisicas' type='checkbox' class='form-check-input' name='txtInsertConteoFisicas'>
                  <label for="txtInsertConteoFisicas">Conteo físicas</label>

                  <!-- ingreso de txtInsertProductoActivo -->
                  <input id='txtInsertProductoActivo' type='checkbox' class='form-check-input' name='txtInsertProductoActivo'>
                  <label for="txtInsertProductoActivo">Producto activo</label>
                </div>
              </div>

              <!-- ingreso de DatosFabricante -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertDatosFabricante' type='text' class='form-control input-lg' name='txtInsertDatosFabricante' placeholder='Ingrese los datos del fabricante'>
                </div>
              </div>
              <!-- ingreso de Refetencia -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertRefetencia' type='text' class='form-control input-lg' name='txtInsertRefetencia' placeholder='Ingrese la referencia'>
                </div>
              </div>
              <!-- ingreso de Medidas -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertMedidas' type='text' class='form-control input-lg' name='txtInsertMedidas' placeholder='Ingrese las medidas'>
                </div>
              </div>
              <!-- ingreso de Presentacion -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertPresentacion' type='text' class='form-control input-lg' name='txtInsertPresentacion' placeholder='Ingrese la presentación'>
                </div>
              </div>
              <!-- ingreso de UbicacionFisica -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertUbicacionFisica' type='text' class='form-control input-lg' name='txtInsertUbicacionFisica' placeholder='Ingrese la ubicación física'>
                </div>
              </div>
              <!-- ingreso de ProductoEquivalente -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertProductoEquivalente' type='text' class='form-control input-lg' name='txtInsertProductoEquivalente' placeholder='Ingrese el producto equivalente'>
                </div>
              </div>
              <!-- ingreso de UnitarioPromedio -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertUnitarioPromedio' type='number' class='form-control input-lg' name='txtInsertUnitarioPromedio' placeholder='Ingrese el unitario promedio'>
                </div>
              </div>
              <!-- ingreso de TotalPromedio -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertTotalPromedio' type='number' class='form-control input-lg' name='txtInsertTotalPromedio' placeholder='Ingrese total promedio'>
                </div>
              </div>
              <!-- ingreso de StockMinimo -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertStockMinimo' type='number' class='form-control input-lg' name='txtInsertStockMinimo' placeholder='Ingrese stock minimo'>
                </div>
              </div>
              <!-- ingreso de StockMaximo -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertStockMaximo' type='number' class='form-control input-lg' name='txtInsertStockMaximo' placeholder='Ingrese stock maximo'>
                </div>
              </div>
              <!-- ingreso de TiempoReposicion -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertTiempoReposicion' type='date' class='form-control input-lg' name='txtInsertTiempoReposicion' placeholder='Ingrese tiempo reposición'>
                </div>
              </div>
              <!-- ingreso de CuentaInventario -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertCuentaInventario' type='number' class='form-control input-lg' name='txtInsertCuentaInventario' placeholder='Ingrese la cuenta del inventario'>
                </div>
              </div>
              <!-- ingreso de ContableDeIngresos -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertContableDeIngresos' type='number' class='form-control input-lg' name='txtInsertContableDeIngresos' placeholder='Ingrese contable de ingresos'>
                </div>
              </div>
              <!-- ingreso de ContableIngresoAjuste -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertContableIngresoAjuste' type='number' class='form-control input-lg' name='txtInsertContableIngresoAjuste' placeholder='Ingrese contable ingresos por ajuste'>
                </div>
              </div>
              <!-- ingreso de ContableDevolución Ventas -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertContableDevolucionVentas' type='number' class='form-control input-lg' name='txtInsertContableDevolucionVentas' placeholder='Ingrese la devolución de ventas'>
                </div>
              </div>
              <!-- ingreso de ContableCostos -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertContableCostos' type='number' class='form-control input-lg' name='txtInsertContableCostos' placeholder='Ingrese el contable de costos'>
                </div>
              </div>
              <!-- ingreso de DevolucionCompras -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertDevolucionCompras' type='number' class='form-control input-lg' name='txtInsertDevolucionCompras' placeholder='Ingrese la devolución de compras'>
                </div>
              </div>
              <!-- ingreso de ContableGastos -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertContableGastos' type='number' class='form-control input-lg' name='txtInsertContableGastos' placeholder='Ingrese contable de gastos'>
                </div>
              </div>
              <!-- ingreso de ContableGastosPorAjuste -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertContableGastosPorAjuste' type='number' class='form-control input-lg' name='txtInsertContableGastosPorAjuste' placeholder='Ingrese contable de gastos por ajuste'>
                </div>
              </div>
              <!-- ingreso de ImpuestoCompras -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertImpuestoCompras' type='number' class='form-control input-lg' name='txtInsertImpuestoCompras' placeholder='Ingrese el impuesto de compras'>
                </div>
              </div>
              <!-- ingreso de ImpuestoVentas -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtInsertImpuestoVentas' type='number' class='form-control input-lg' name='txtInsertImpuestoVentas' placeholder='Ingrese impuesto de ventas'>
                </div>
              </div>

            </div>
          </div><!-- fin del modal-body -->
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Guardar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
          <?php
          if (isset($_POST['txtInsertUsuario_id'])) {
            $objProducto    = new ControladorProducto();
            $validarImagen  = $objProducto->ctrValidarImagen();
            switch ($validarImagen) {
              case '1':
                echo "<script>
                  Swal.fire({
                      icon: 'error',
                      title: 'Error...',
                      text: 'Debes poner una imagen'                            
                  })
              </script>";
                break;
              case '2':
                echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Error...',
                            text: 'El archivo subido no es una imagen'                            
                        })
                    </script>";
              case '3':
                echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Error...',
                            text: 'La imagen es muy pesada'                            
                        })
                    </script>";
                break;
              default:
                $nameImage  = $objProducto->MoveImage();

                if ($nameImage && $objProducto->crtInsertarProducto($nameImage)) {

                  switch ($nameImage) {
                    case 'false':
                      echo "<script>
                      Swal.fire({
                        text: 'Ocurrio un error'                            
                      })
                      </script>";
                      break;
                    default:
                      echo "<script>
                    Swal.fire({
                      icon: 'success',
                      title: 'Completo',
                      confirmButtonText: 'Save',
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location='productos';
                      } 
                    })
                    </script>";
                      break;
                  }
                }
                break;
            }
            // if ($objUsuario->ctrModificarUsuario() && $objProveedor->ctrModificarProveedor()) {
            //   echo '<script>
            //       Swal.fire("El registro ha sido modificado");
            //     </script>';
            // }
            // echo '
            //   <script>
            //     window.location="proveedores";
            //   </script>
            //   ';
          }
          ?>
          <!-- ingreso de Codigo de pais-->
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Modificar-->
<div tabindex="-1" class="modal fade" id="modalModificar" role="dialog">

  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form method="post" name="formularioJuridica" id="formularioJuridica" enctype="multipart/form-data">
        <div class="modal-header" style='background:#3c8dbc; color:white;'>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modificar producto</h4>
        </div>

        <div class='form-group'>
          <div class="modal-body">

            <input type="hidden" id="txtModId" name="txtModId">
            <input type="hidden" id="txtModUsuario_id" name="txtModUsuario_id" value="<?php echo $_SESSION['id_user'] ?>">

            <div>
              <img id="img_ingMod" src="" alt="" class="img_div" style="cursor:pointer">

              <!-- ingreso de Imagen-->
              <div class='form-group' id="contenedor-btn-fileMod">
                <div class='input-group'>
                  <button class="contenedor-btn-file bordeado" disabled="true">
                    Adjuntar foto
                    <label for="txtModImg"></label>
                    <input type="file" id="txtModImg" name="txtInsertImg" accept="image/*,image/heif,image/heic">
                  </button>
                </div>
              </div>
              <!-- ingreso de UnidadMedida -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModUnidadMedida' type='text' class='form-control input-lg' name='txtModUnidadMedida' placeholder='Ingrese la unidad de medida'>
                </div>
              </div>
              <!-- ingreso de NombreProducto -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModNombreProducto' type='text' class='form-control input-lg' name='txtModNombreProducto' placeholder='Ingrese el nombre del producto'>
                </div>
              </div>
              <!-- ingreso de Cantidad -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModCantidad' type='number' class='form-control input-lg' name='txtModCantidad' placeholder='Ingrese la cantidad'>
                </div>
              </div>
              <!-- ingreso de ControlInventario -->
              <div class='form-group'>
                <div class='check-group'>
                  <input id='txtModControlInventario' type='checkbox' class='form-check-input' name='txtModControlInventario'>
                  <label for="txtModControlInventario">Control inventario</label>

                  <!-- ingreso de ParaConsumo -->
                  <input id='txtModParaConsumo' type='checkbox' class='form-check-input' name='txtModParaConsumo'>
                  <label for="txtModParaConsumo">Para consumo</label>

                  <!-- ingreso de txtModParaVenta -->
                  <input id='txtModParaVenta' type='checkbox' class='form-check-input' name='txtModParaVenta'>
                  <label for="txtModParaVenta">Para venta</label>

                  <!-- ingreso de txtModProduccionInterna -->
                  <input id='txtModProduccionInterna' type='checkbox' class='form-check-input' name='txtModProduccionInterna'>
                  <label for="txtModProduccionInterna">Para producción interna</label>

                  <!-- ingreso de txtModManejaLotes -->
                  <input id='txtModManejaLotes' type='checkbox' class='form-check-input' name='txtModManejaLotes'>
                  <label for="txtModManejaLotes">Maneja lotes</label>

                  <!-- ingreso de txtModServicio -->
                  <input id='txtModServicio' type='checkbox' class='form-check-input' name='txtModServicio'>
                  <label for="txtModServicio">Servicio</label>

                  <!-- ingreso de txtModConteoFisicas -->
                  <input id='txtModConteoFisicas' type='checkbox' class='form-check-input' name='txtModConteoFisicas'>
                  <label for="txtModConteoFisicas">Conteo físicas</label>

                  <!-- ingreso de txtModProductoActivo -->
                  <input id='txtModProductoActivo' type='checkbox' class='form-check-input' name='txtModProductoActivo'>
                  <label for="txtModProductoActivo">Producto activo</label>
                </div>
              </div>

              <!-- ingreso de DatosFabricante -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModDatosFabricante' type='text' class='form-control input-lg' name='txtModDatosFabricante' placeholder='Ingrese los datos del fabricante'>
                </div>
              </div>
              <!-- ingreso de Refetencia -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModRefetencia' type='text' class='form-control input-lg' name='txtModRefetencia' placeholder='Ingrese la referencia'>
                </div>
              </div>
              <!-- ingreso de Medidas -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModMedidas' type='text' class='form-control input-lg' name='txtModMedidas' placeholder='Ingrese las medidas'>
                </div>
              </div>
              <!-- ingreso de Presentacion -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModPresentacion' type='text' class='form-control input-lg' name='txtModPresentacion' placeholder='Ingrese la presentación'>
                </div>
              </div>
              <!-- ingreso de UbicacionFisica -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModUbicacionFisica' type='text' class='form-control input-lg' name='txtModUbicacionFisica' placeholder='Ingrese la ubicación física'>
                </div>
              </div>
              <!-- ingreso de ProductoEquivalente -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModProductoEquivalente' type='text' class='form-control input-lg' name='txtModProductoEquivalente' placeholder='Ingrese el producto equivalente'>
                </div>
              </div>
              <!-- ingreso de UnitarioPromedio -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModUnitarioPromedio' type='number' class='form-control input-lg' name='txtModUnitarioPromedio' placeholder='Ingrese el unitario promedio'>
                </div>
              </div>
              <!-- ingreso de TotalPromedio -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModTotalPromedio' type='number' class='form-control input-lg' name='txtModTotalPromedio' placeholder='Ingrese total promedio'>
                </div>
              </div>
              <!-- ingreso de StockMinimo -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModStockMinimo' type='number' class='form-control input-lg' name='txtModStockMinimo' placeholder='Ingrese stock minimo'>
                </div>
              </div>
              <!-- ingreso de StockMaximo -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModStockMaximo' type='number' class='form-control input-lg' name='txtModStockMaximo' placeholder='Ingrese stock maximo'>
                </div>
              </div>
              <!-- ingreso de TiempoReposicion -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModTiempoReposicion' type='date' class='form-control input-lg' name='txtModTiempoReposicion' placeholder='Ingrese tiempo reposición'>
                </div>
              </div>
              <!-- ingreso de CuentaInventario -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModCuentaInventario' type='number' class='form-control input-lg' name='txtModCuentaInventario' placeholder='Ingrese la cuenta del inventario'>
                </div>
              </div>
              <!-- ingreso de ContableDeIngresos -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModContableDeIngresos' type='number' class='form-control input-lg' name='txtModContableDeIngresos' placeholder='Ingrese contable de ingresos'>
                </div>
              </div>
              <!-- ingreso de ContableIngresoAjuste -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModContableIngresoAjuste' type='number' class='form-control input-lg' name='txtModContableIngresoAjuste' placeholder='Ingrese contable ingresos por ajuste'>
                </div>
              </div>
              <!-- ingreso de ContableDevolucionVentas -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModContableDevolucionVentas' type='number' class='form-control input-lg' name='txtModContableDevolucionVentas' placeholder='Ingrese la devolución de ventas'>
                </div>
              </div>
              <!-- ingreso de ContableCostos -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModContableCostos' type='number' class='form-control input-lg' name='txtModContableCostos' placeholder='Ingrese el contable de costos'>
                </div>
              </div>
              <!-- ingreso de DevolucionCompras -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModDevolucionCompras' type='number' class='form-control input-lg' name='txtModDevolucionCompras' placeholder='Ingrese la devolución de compras'>
                </div>
              </div>
              <!-- ingreso de ContableGastos -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModContableGastos' type='number' class='form-control input-lg' name='txtModContableGastos' placeholder='Ingrese contable de gastos'>
                </div>
              </div>
              <!-- ingreso de ContableGastosPorAjuste -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModContableGastosPorAjuste' type='number' class='form-control input-lg' name='txtModContableGastosPorAjuste' placeholder='Ingrese contable de gastos por ajuste'>
                </div>
              </div>
              <!-- ingreso de ImpuestoCompras -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModImpuestoCompras' type='number' class='form-control input-lg' name='txtModImpuestoCompras' placeholder='Ingrese el impuesto de compras'>
                </div>
              </div>
              <!-- ingreso de ImpuestoVentas -->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                  <input id='txtModImpuestoVentas' type='number' class='form-control input-lg' name='txtModImpuestoVentas' placeholder='Ingrese impuesto de ventas'>
                </div>
              </div>

            </div>
          </div><!-- fin del modal-body -->
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Guardar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
          <?php
          if (isset($_POST['txtModId'])) {
            $objProducto    = new ControladorProducto();
            $validarImagen  = $objProducto->ctrValidarImagen();
            switch ($validarImagen) {
              case '1':
                if ($objProducto->crtEditarProducto(null)) {
                  echo "<script>
                  Swal.fire({
                    icon: 'success',
                    title: 'Completo!',
                    confirmButtonText: 'Save',
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location='productos';
                    } 
                  })
                  </script>";
                } else {
                  echo "<script>
                  Swal.fire({
                    text: 'ocurrio un error'                            
                  })
                  </script>";
                }
                break;
              case '2':
                echo "<script>
                      Swal.fire({
                          icon: 'error',
                          title: 'Error...',
                          text: 'El archivo subido no es una imagen'                            
                      })
                  </script>";
              case '3':
                echo "<script>
                      Swal.fire({
                          icon: 'error',
                          title: 'Error...',
                          text: 'La imagen es muy pesada'                            
                      })
                  </script>";
                break;
              default:
                $nameImage  = $objProducto->MoveImage();

                if ($nameImage && $objProducto->crtEditarProducto($nameImage)) {

                  switch ($nameImage) {
                    case 'false':
                      echo "<script>
                    Swal.fire({
                      text: 'Ocurrio un error'                            
                    })
                    </script>";
                      break;
                    default:
                      echo "<script>
                    Swal.fire({
                      icon: 'success',
                      title: 'Completo',
                      confirmButtonText: 'Save',
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location='productos';
                      } 
                    })
                    </script>";
                      break;
                  }
                }
                break;
            }
            // if ($objUsuario->ctrModificarUsuario() && $objProveedor->ctrModificarProveedor()) {
            //   echo '<script>
            //       Swal.fire("El registro ha sido modificado");
            //     </script>';
            // }
            // echo '
            //   <script>
            //     window.location="proveedores";
            //   </script>
            //   ';
          }
          ?>
          <!-- ingreso de Codigo de pais-->
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal Crear Juridica-->

<?php
if (isset($_GET['codigoProducto'])) {
  $objHumano = new ControladorProducto();
  if ($objHumano->ctrEliminarProducto($_GET['codigoProducto'])) {
    echo '
        <script>
          window.location="productos";
        </script>
        ';
  }
}
if (isset($_POST['lol'])) {
  $var = $_POST['txtIdProducto'];
  echo '
      <script>
        window.location="index.php?ruta=clases&txtIdProducto=' . $var . '&lol=e";
      </script>
      ';
}
?>