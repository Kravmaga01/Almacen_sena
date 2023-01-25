<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Proveedor
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-female"></i> Proveedor </a></li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box ">
      <div class="box-header with-border">
        <!-- <button type="button" class='btn btn-primary' data-toggle="modal" data-target="#modalIngresar"> CREAR USUARIO
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
              <th>Cod</th>
              <th>Usuario</th>
              <th>Clave</th>
              <th>Tipo persona</th>
              <th>NIT</th>
              <th>Nombre</th>
              <th>Razo social</th>
              <th>Código país</th>
              <th>Nombre país</th>
              <th>Código departamento</th>
              <th>Nombre departamento</th>
              <th>Código ciudad</th>
              <th>Nombre ciudad</th>
              <th>Direccion</th>
              <th>Teléfono</th>
              <th>Gmail</th>
              <th>Autorización gmail</th>
              <th>Id_usuario</th>
              <th>Acciones</th>



            </tr>
          </thead>
          <tbody>
            <?php

            $objHumano = new ControladorProveedor();
            $arrayUsuario = $objHumano->ctrListarProveedores();


            foreach ($arrayUsuario as $campo) {
              $cod = $campo['id_proveedor'];
              if ($campo['Tipo_persona'] == "JURIDICA") {
                # code...
            ?>

                <tr>
                  <td id="<?php echo 'cod' . $cod; ?>"><?php echo $cod;  ?></td>
                  <td id="<?php echo 'use' . $cod; ?>"><?php echo $campo['UserName'];  ?></td>
                  <td id="<?php echo 'pas' . $cod; ?>"><?php echo $campo['Password']; ?></td>
                  <td id="<?php echo 'tip' . $cod; ?>"><?php echo $campo['Tipo_persona']; ?></td>
                  <td id="<?php echo 'nit' . $cod; ?>"><?php echo $campo['NIT'];  ?></td>
                  <td id="<?php echo 'nom' . $cod; ?>"><?php echo $campo['Nombre'];  ?></td>
                  <td id="<?php echo 'rzc' . $cod; ?>"><?php echo $campo['Razon_social'];  ?></td>
                  <td id="<?php echo 'cod_p' . $cod; ?>"><?php echo $campo['Codigo_pais'];  ?></td>
                  <td id="<?php echo 'nom_p' . $cod; ?>"><?php echo $campo['Nombre_pais'];  ?></td>
                  <td id="<?php echo 'cod_d' . $cod; ?>"><?php echo $campo['Codigo_departamento'];  ?></td>
                  <td id="<?php echo 'nom_d' . $cod; ?>"><?php echo $campo['Nombre_departamento'];  ?></td>
                  <td id="<?php echo 'cod_c' . $cod; ?>"><?php echo $campo['Codigo_ciudad'];  ?></td>
                  <td id="<?php echo 'nom_c' . $cod; ?>"><?php echo $campo['Nombre_ciudad'];  ?></td>
                  <td id="<?php echo 'dir' . $cod; ?>"><?php echo $campo['Direccion'];  ?></td>
                  <td id="<?php echo 'tel' . $cod; ?>"><?php echo $campo['Telefono'];  ?></td>
                  <td id="<?php echo 'gma' . $cod; ?>"><?php echo $campo['Gmail'];  ?></td>
                  <td id="<?php echo 'aut_g' . $cod; ?>"><?php echo $campo['Autorizacion_Gmail'];  ?></td>
                  <td id="<?php echo 'id_u' . $cod; ?>"><?php echo $campo['id_usuario'];  ?></td>

                  <td>
                    <!-- <button type='button' class='btn btn-success' data-toggle='modal'><i class='fa fa-file' onclick='reporteHumano(<?php echo "nom" . $cod; ?>)'></i></button> -->
                    <button type='button' class='btn btn-warning' data-toggle='modal' data-target="#modalModificar" onclick='modificarProveedor1(<?php echo "cod" . $cod ?>,<?php echo "use" . $cod ?>,<?php echo "pas" . $cod ?>,<?php echo "tip" . $cod ?>,<?php echo "nit" . $cod ?>,<?php echo "nom" . $cod ?>,<?php echo "rzc" . $cod ?>,<?php echo "cod_p" . $cod ?>,<?php echo "nom_p" . $cod ?>,<?php echo "cod_d" . $cod ?>,<?php echo "nom_d" . $cod ?>,<?php echo "cod_c" . $cod ?>,<?php echo "nom_c" . $cod ?>,<?php echo "dir" . $cod ?>,<?php echo "tel" . $cod ?>,<?php echo "gma" . $cod ?>,<?php echo "aut_g" . $cod ?>,<?php echo "id_u" . $cod ?>)'><i class='fa fa-edit'></i></button>
                    <button type='button' class='btn btn-danger' data-toggle='modal' onclick='eliminar(<?php echo "id_u" . $cod; ?>)'><i class='fa fa-trash'></i></button>
                  </td>
                </tr>
            <?php
              }
            }
            ?>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

  </section>
  <section class="content">

    <!-- Default box -->
    <div class="box ">
      <div class="box-header with-border">
        <!-- <button type="button" class='btn btn-primary' data-toggle="modal" data-target="#modalIngresar"> CREAR USUARIO
          </button> -->
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="table-responsive">
        <table id="tablaHumano2" class="table table-dark table-striped">
          <thead>
            <tr>
              <th>Cod</th>
              <th>Usuario</th>
              <th>Clave</th>
              <th>Tipo persona</th>
              <th>Documento</th>
              <th>RUT</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Código país</th>
              <th>Nombre país</th>
              <th>Código departamento</th>
              <th>Nombre departamento</th>
              <th>Código ciudad</th>
              <th>Nombre ciudad</th>
              <th>Direccion</th>
              <th>Teléfono</th>
              <th>Gmail</th>
              <th>Autorización gmail</th>
              <th>Id_usuario</th>
              <th>Acciones</th>



            </tr>
          </thead>
          <tbody>
            <?php

            $objHumano = new ControladorProveedor();
            $arrayUsuario = $objHumano->ctrListarProveedores();


            foreach ($arrayUsuario as $campo) {
              $cod = $campo['id_proveedor'];
              if ($campo['Tipo_persona'] == "NATURAL") {
                # code...
            ?>

                <tr>
                  <td id="<?php echo 'cod' . $cod; ?>"><?php echo $cod;  ?></td>
                  <td id="<?php echo 'use' . $cod; ?>"><?php echo $campo['UserName'];  ?></td>
                  <td id="<?php echo 'pas' . $cod; ?>"><?php echo $campo['Password']; ?></td>
                  <td id="<?php echo 'tip' . $cod; ?>"><?php echo $campo['Tipo_persona']; ?></td>
                  <td id="<?php echo 'doc' . $cod; ?>"><?php echo $campo['Numero_documento'];  ?></td>
                  <td id="<?php echo 'rut' . $cod; ?>"><?php echo $campo['RUT'];  ?></td>
                  <td id="<?php echo 'nom' . $cod; ?>"><?php echo $campo['Nombre'];  ?></td>
                  <td id="<?php echo 'ape' . $cod; ?>"><?php echo $campo['Apellido'];  ?></td>
                  <td id="<?php echo 'id_p' . $cod; ?>"><?php echo $campo['Codigo_pais'];  ?></td>
                  <td id="<?php echo 'nom_p' . $cod; ?>"><?php echo $campo['Nombre_pais'];  ?></td>
                  <td id="<?php echo 'cod_d' . $cod; ?>"><?php echo $campo['Codigo_departamento'];  ?></td>
                  <td id="<?php echo 'nom_d' . $cod; ?>"><?php echo $campo['Nombre_departamento'];  ?></td>
                  <td id="<?php echo 'cod_c' . $cod; ?>"><?php echo $campo['Codigo_ciudad'];  ?></td>
                  <td id="<?php echo 'nom_c' . $cod; ?>"><?php echo $campo['Nombre_ciudad'];  ?></td>
                  <td id="<?php echo 'dir' . $cod; ?>"><?php echo $campo['Direccion'];  ?></td>
                  <td id="<?php echo 'tel' . $cod; ?>"><?php echo $campo['Telefono'];  ?></td>
                  <td id="<?php echo 'gma' . $cod; ?>"><?php echo $campo['Gmail'];  ?></td>
                  <td id="<?php echo 'aut_g' . $cod; ?>"><?php echo $campo['Autorizacion_Gmail'];  ?></td>
                  <td id="<?php echo 'id_u' . $cod; ?>"><?php echo $campo['id_usuario'];  ?></td>

                  <td>
                    <!-- <button type='button' class='btn btn-success' data-toggle='modal'><i class='fa fa-file' onclick='reporteHumano(<?php echo "nom" . $cod; ?>)'></i></button> -->
                    <button type='button' class='btn btn-warning' data-toggle='modal' data-target="#modalModificar" onclick='modificarProveedor2(<?php echo "cod" . $cod ?>,<?php echo "use" . $cod ?>,<?php echo "pas" . $cod ?>,<?php echo "tip" . $cod ?>,<?php echo "doc" . $cod ?>,<?php echo "rut" . $cod ?>,<?php echo "nom" . $cod ?>,<?php echo "ape" . $cod ?>,<?php echo "id_p" . $cod ?>,<?php echo "nom_p" . $cod ?>,<?php echo "cod_d" . $cod ?>,<?php echo "nom_d" . $cod ?>,<?php echo "cod_c" . $cod ?>,<?php echo "nom_c" . $cod ?>,<?php echo "dir" . $cod ?>,<?php echo "tel" . $cod ?>,<?php echo "gma" . $cod ?>,<?php echo "aut_g" . $cod ?>,<?php echo "id_u" . $cod ?>)'><i class='fa fa-edit'></i></button>
                    <button type='button' class='btn btn-danger' data-toggle='modal' onclick='eliminar(<?php echo "id_u" . $cod; ?>)'><i class='fa fa-trash'></i></button>
                  </td>
                </tr>
            <?php
              }
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

<!-- Modal Modificar Juridica-->
<div class="modal fade" id="modalModificar" role="dialog">

  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <form method="post" name="formularioJuridica" id="formularioJuridica">
        <div class="modal-header" style='background:#3c8dbc; color:white;'>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modificar Proveedor</h4>
        </div>

        <div class='form-group'>
          <div class="modal-body">

            <input type="hidden" id="txtModCodigo" name="txtModCodigo">

            <input type="hidden" id="txtModCodigoUser" name="txtModCodigoUser">
            <input type="hidden" id="txtModRol" name="txtModRol">
            <!-- ingreso de Usuario-->
            <div class='form-group'>
              <div class='input-group'>
                <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
                <input id="txtModUsuario" type="text" class='form-control input-lg' name="txtModUsuario" placeholder="Ingrese el Usuario">
              </div>
            </div>
            <!-- ingreso de Contraseña-->
            <div class='form-group'>
              <div class='input-group'>
                <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
                <input id="txtModContraseña" type="password" class='form-control input-lg' name="txtModContraseña" placeholder="Ingrese el contraseña">
              </div>
            </div>
            <!-- ingreso de Tipo persona-->
            <div class='form-group'>
              <div class='input-group'>
                <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
                <select id="txtModTipoPersona" name="txtModTipoPersona" class='form-control input-lg' onchange="mostrarJuridica();">
                  <option selected disabled="">Seleccione el tipo de persona</option>
                  <option>JURIDICA</option>
                  <option> NATURAL</option>
                </select>
              </div>
            </div>
            <!-- ingreso de Nombre-->
            <div class='form-group'>
              <div class='input-group'>
                <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
                <input id="txtModNombre" type="text" class='form-control input-lg' name="txtModNombre" placeholder="Ingrese el nombre">
              </div>
            </div>


            <div id="Juridica">
              <!--===================================================================
                    =          CREAMOS LOS INPUT DONDE CAPTURAMOS LA INFORMACION
                    ====================================================================-->
              <!-- ingreso de Razon social-->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
                  <input id="txtModRazonSocial" type="text" class='form-control input-lg' name="txtModRazonSocial" placeholder="Ingrese la razón social">
                </div>
              </div>

              <!-- ingreso de NIT-->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
                  <input id="txtModNIT" type="number" class='form-control input-lg' name="txtModNIT" placeholder="Ingrese el NIT">
                </div>
              </div>
            </div><!-- fin del modal-body -->


            <div id="Natural">
              <!--===================================================================
                    =          CREAMOS LOS INPUT DONDE CAPTURAMOS LA INFORMACION
                    ====================================================================-->
              <!-- ingreso de Apellido-->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
                  <input id="txtModApellido" type="text" class='form-control input-lg' name="txtModApellido" placeholder="Ingrese el apellido">
                </div>
              </div>
              <!-- ingreso de Documento-->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
                  <input id="txtModDocumento" type="number" class='form-control input-lg' name="txtModDocumento" placeholder="Ingrese el documento">
                </div>
              </div>
              <!-- ingreso de Rut-->
              <div class='form-group'>
                <div class='input-group'>
                  <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
                  <input id="txtModRut" type="text" class='form-control input-lg' name="txtModRut" placeholder="Ingrese el rut">
                </div>
              </div>
            </div><!-- fin del modal-body -->


            <div class='form-group'>
              <div class='input-group'>
                <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
                <input id="txtModCodPais" type="number" class='form-control input-lg' name="txtModCodPais" placeholder="Ingrese el Código del pais">
              </div>
            </div>
            <!-- ingreso de Nombre de pais-->
            <div class='form-group'>
              <div class='input-group'>
                <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
                <input id="txtModNomPais" type="text" class='form-control input-lg' name="txtModNomPais" placeholder="Ingrese el Nombre del pais">
              </div>
            </div>
            <!-- ingreso de Código de Departamento-->
            <div class='form-group'>
              <div class='input-group'>
                <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
                <input id="txtModCodDep" type="number" class='form-control input-lg' name="txtModCodDep" placeholder="Ingrese el Código del departamento">
              </div>
            </div>
            <!-- ingreso de Nombre de Departamento-->
            <div class='form-group'>
              <div class='input-group'>
                <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
                <input id="txtModNomDep" type="text" class='form-control input-lg' name="txtModNomDep" placeholder="Ingrese el Nombre del departamento">
              </div>
            </div>
            <!-- ingreso de Código de la ciudad-->
            <div class='form-group'>
              <div class='input-group'>
                <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
                <input id="txtModCodCiud" type="number" class='form-control input-lg' name="txtModCodCiud" placeholder="Ingrese el Código de la ciudad">
              </div>
            </div>
            <!-- ingreso de Nombre de la ciudad-->
            <div class='form-group'>
              <div class='input-group'>
                <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
                <input id="txtModNomCiud" type="text" class='form-control input-lg' name="txtModNomCiud" placeholder="Ingrese el Nombre de la ciudad">
              </div>
            </div>
            <!-- ingreso de Dirección-->
            <div class='form-group'>
              <div class='input-group'>
                <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
                <input id="txtModDir" type="text" class='form-control input-lg' name="txtModDir" placeholder="Ingrese la dirección">
              </div>
            </div>
            <!-- ingreso de Teléfono-->
            <div class='form-group'>
              <div class='input-group'>
                <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
                <input id="txtModTel" type="number" class='form-control input-lg' name="txtModTel" placeholder="Ingrese el Teléfono">
              </div>
            </div>
            <!-- ingreso de Gmail-->
            <div class='form-group'>
              <div class='input-group'>
                <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
                <input id="txtModGma" type="email" class='form-control input-lg' name="txtModGma" placeholder="Ingrese el correo">
              </div>
            </div>
            <!-- ingreso de Autorización Gmail-->
            <div class='form-group'>
              <div class='input-group'>
                <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
                <input id="txtModAutGma" type="text" class='form-control input-lg' name="txtModAutGma" placeholder="Acepta">
              </div>
            </div>
          </div>
        </div><!-- fin del modal-body -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Guardar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        <?php
        if (isset($_POST['txtModCodigo'])) {
          $objProveedor = new ControladorProveedor();
          $objUsuario = new ControladorUsuario();

          if ($objUsuario->ctrModificarUsuario() && $objProveedor->ctrModificarProveedor()) {
            echo "<script>
            Swal.fire({
              icon: 'success',
              title: 'Completo',
              confirmButtonText: 'Save',
            }).then((result) => {
              if (result.isConfirmed) {
                window.location='proveedores';
              } 
            })
            </script>";
          }
          // echo '
          //     <script>
          //       window.location="proveedores";
          //     </script>
          //     ';
        }
        ?>
        <!-- ingreso de Codigo de pais-->
      </form>
    </div>
  </div>
</div>
</div>

<?php
if (isset($_GET['codigoInstructor'])) {
  $objInstructor = new ControladorInstructor();
  if ($objInstructor->ctrEliminarInstructor($_GET['codigoInstructor'])) {
    // echo '
    // <script>
    //   window.location="instructores";
    // </script>
    // ';
  }
}
?>
<script src="vista/js/desplegar.js"></script>