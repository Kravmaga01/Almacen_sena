<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Instructores
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-female"></i> Instructores</a></li>
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
              <th>Documento</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Teléfono</th>
              <th>Gmail</th>
              <th>Id_usuario</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php

            $objHumano = new ControladorInstructor();
            $arrayUsuario = $objHumano->ctrListarInstructor();


            foreach ($arrayUsuario as $campo) {
              $cod = $campo['Id_instructor'];
            ?>

              <tr>
                <td id="<?php echo 'cod' . $cod; ?>"><?php echo $cod;  ?></td>
                <td id="<?php echo 'use' . $cod; ?>"><?php echo $campo['UserName'];  ?></td>
                <td id="<?php echo 'pas' . $cod; ?>"><?php echo $campo['Password']; ?></td>
                <td id="<?php echo 'doc' . $cod; ?>"><?php echo $campo['numero_documento']; ?></td>
                <td id="<?php echo 'nom' . $cod; ?>"><?php echo $campo['nombre']; ?></td>
                <td id="<?php echo 'ape' . $cod; ?>"><?php echo $campo['apellido'];  ?></td>
                <td id="<?php echo 'tel' . $cod; ?>"><?php echo $campo['telefono'];  ?></td>
                <td id="<?php echo 'gma' . $cod; ?>"><?php echo $campo['gmail'];  ?></td>
                <td id="<?php echo 'id_u' . $cod; ?>"><?php echo $campo['id_usuario'];  ?></td>

                <td>
                  <!-- <button type='button' class='btn btn-success' data-toggle='modal'><i class='fa fa-file' onclick='reporteHumano(<?php echo "nom" . $cod; ?>)'></i></button> -->
                  <button type='button' class='btn btn-warning' data-toggle='modal' data-target="#modalModificar" onclick='modificarInstructor(<?php echo "cod" . $cod ?>,<?php echo "use" . $cod ?>,<?php echo "pas" . $cod ?>,<?php echo "doc" . $cod ?>,<?php echo "nom" . $cod ?>,<?php echo "ape" . $cod ?>,<?php echo "tel" . $cod ?>,<?php echo "gma" . $cod ?>,<?php echo "id_u" . $cod ?>)'><i class='fa fa-edit'></i></button>
                  <button type='button' class='btn btn-danger' data-toggle='modal' onclick='eliminar(<?php echo "id_u" . $cod; ?>)'><i class='fa fa-trash'></i></button>
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


<!-- Modal Modificar-->
<div class="modal fade" id="modalModificar" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <form method="post">
        <div class="modal-header" style='background:#3c8dbc; color:white;'>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modificar Instructor</h4>
        </div>
        <div class="modal-body">
          <!--===================================================================
            =          CREAMOS LOS INPUT DONDE CAPTURAMOS LA INFORMACION
            ====================================================================-->
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
          <!-- ingreso de Documento-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
              <input id="txtModDocumento" type="number" class='form-control input-lg' name="txtModDocumento" placeholder="Ingrese el documento">
            </div>
          </div>
          <!-- ingreso de Nombre-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
              <input id="txtModNombre" type="text" class='form-control input-lg' name="txtModNombre" placeholder="Ingrese el Nombre">
            </div>
          </div>
          <!-- ingreso de Apellido-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
              <input id="txtModApellido" type="text" class='form-control input-lg' name="txtModApellido" placeholder="Ingrese el Apellido">
            </div>
          </div>
          <!-- ingreso de Teléfono-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
              <input id="txtModTelefono" type="number" class='form-control input-lg' name="txtModTelefono" placeholder="Ingrese el Teléfono">
            </div>
          </div>
          <!-- ingreso de Gmail-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
              <input id="txtModGmail" type="email" class='form-control input-lg' name="txtModGmail" placeholder="Ingrese el Gmail">
            </div>
          </div>
          <?php
          if (isset($_POST['txtModUsuario'])) {
            $objInstructor = new ControladorInstructor();
            $objUsuario = new ControladorUsuario();
            if ($objUsuario->ctrModificarUsuario() && $objInstructor->ctrModificarInstructor()) {
              echo '<script>
                    Swal.fire("El registro ha sido modificado");
                  </script>';
            }
            echo '
                <script>
                  window.location="instructores";
                </script>
                ';
          }
          ?>
        </div><!-- fin del modal-body -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Guardar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
      </form>
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