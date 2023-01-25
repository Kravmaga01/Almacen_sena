<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Usuarios

    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-female"></i> Usuarios</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box ">
      <div class="box-header with-border">
        <button type="button" class='btn btn-primary' data-toggle="modal" data-target="#modalIngresar"> CREAR USUARIO
        </button>
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
              <th>Rol</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php

            $objHumano = new ControladorUsuario();
            $arrayUsuario = $objHumano->ctrListarUsuarios();


            foreach ($arrayUsuario as $campo) {
              $cod = $campo['id'];
            ?>
              <tr>
                <td id="<?php echo 'cod' . $cod; ?>"><?php echo $cod;  ?></td>
                <td id="<?php echo 'use' . $cod; ?>"><?php echo $campo['Usuario'];  ?></td>
                <td id="<?php echo 'pas' . $cod; ?>"><?php echo $campo['Contraseña'];  ?></td>
                <td id="<?php echo 'rol' . $cod; ?>"><?php echo $campo['Rol_user'];  ?></td>

                <td>
                  <!-- <button type='button' class='btn btn-success' data-toggle='modal'><i class='fa fa-file' onclick='reporteHumano(<?php echo "nom" . $cod; ?>)'></i></button> -->
                  <button type='button' class='btn btn-warning' data-toggle='modal' data-target="#modalModificar" onclick='modificarUsuario(<?php echo "cod" . $cod ?>,<?php echo "use" . $cod ?>,<?php echo "pas" . $cod ?>,<?php echo "rol" . $cod ?>)'><i class='fa fa-edit'></i></button>
                  <button type='button' class='btn btn-danger' data-toggle='modal' onclick='eliminarUsuario(<?php echo "cod" . $cod; ?>)'><i class='fa fa-trash'></i></button>
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

<!-- Modal Ingresar-->
<div class="modal fade" id="modalIngresar" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <form method="post">
        <div class="modal-header" style='background:#3c8dbc; color:white;'>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Crear Usuario</h4>
        </div>
        <div class="modal-body">
          <!--===================================================================
            =          CREAMOS LOS INPUT DONDE CAPTURAMOS LA INFORMACION
            ====================================================================-->
          <!-- ingreso de Usuario-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
              <input type="text" class='form-control input-lg' name="txtUsuario" placeholder="Ingrese Usuario" required>
            </div>
          </div>
          <!-- ingreso de Contraseña-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
              <input type="password" class='form-control input-lg' name="txtClave" placeholder="Ingrese Contraseña" required>
            </div>
          </div>
          <!-- ingreso de Rol-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
              <select name="txtRol" class='form-control input-lg'>
                <option>ADMIN</option>
                <option>INSTRUCTOR</option>
                <option>PROVEEDOR</option>
              </select>
            </div>
          </div>
          <?php
          if (isset($_POST['txtUsuario'])) {
            $objHumano = new ControladorUsuario();
            if ($objHumano->ctrInsertarUsuario()) {
              echo '<script>
                    Swal.fire("El registro ha sido insertado");
                  </script>';
            }
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
<!-- Modal Modificar-->
<div class="modal fade" id="modalModificar" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <form method="post">
        <div class="modal-header" style='background:#3c8dbc; color:white;'>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modificar Usuario</h4>
        </div>
        <div class="modal-body">
          <!--===================================================================
            =          CREAMOS LOS INPUT DONDE CAPTURAMOS LA INFORMACION
            ====================================================================-->
          <input type="hidden" id="txtModCodigoUser" name="txtModCodigoUser">
          <!-- ingreso de cedula-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
              <input id="txtModUsuario" type="text" class='form-control input-lg' name="txtModUsuario" placeholder="Ingrese el usuario">
            </div>
          </div>
          <!-- ingreso de cedula-->
          <div class='form-group'>
            <div class='input-group'>
              <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
              <input id="txtModContraseña" type="password" class='form-control input-lg' name="txtModContraseña" placeholder="Ingrese el contraseña">
            </div>
          </div>
          <?php
          if (isset($_POST['txtModUsuario'])) {

            $objUsuario = new ControladorUsuario();
            if ($objUsuario->ctrModificarUsuario()) {
              echo '
                  <script>
                    window.location="inicio";
                  </script>
                ';
              echo '<script>
                    Swal.fire("El registro ha sido modificado");
                  </script>';
            }
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
if (isset($_GET['codigoUsuario'])) {
  $objUsuario = new ControladorUsuario();
  if ($objUsuario->ctrEliminarUsuario($_GET['codigoUsuario'])) {
    echo '
        <script>
          window.location="inicio";
        </script>
        ';
  }
}
?>