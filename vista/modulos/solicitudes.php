<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <link rel="stylesheet" href="vista/css/producto.css">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            SOLICITUDES
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-female"></i> Instructores</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box ">
            <h3>
                SOLICITUDES PENDIENTES
            </h3>
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
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Instructor</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $objHumano = new ControladorSolicitudes();
                        $arrayUsuario = $objHumano->ctrListarSolicitudesPendientes();


                        foreach ($arrayUsuario as $campo) {
                            $cod = $campo['id'];
                        ?>

                            <tr>
                                <h1 class="dpl" id="<?php echo 'id_prod' . $cod; ?>"><?php echo $campo['id_producto'];  ?></h1>

                                <td id="<?php echo 'cod' . $cod; ?>"><?php echo $cod;  ?></td>
                                <td id="<?php echo 'pas' . $cod; ?>"><?php echo $campo['nombreProducto']; ?></td>
                                <td id="<?php echo 'cant' . $cod; ?>"><?php echo $campo['cantidad']; ?></td>
                                <td id="<?php echo 'nom' . $cod; ?>"><?php echo $campo['nombre'];  ?> <?php echo $campo['apellido'];  ?></td>

                                <td>
                                    <button type='button' class='btn btn-success' data-toggle='modal' onclick='solicitudEstado(<?php echo "cod" . $cod; ?> , "APROBADA", <?php echo "cant" . $cod; ?>, <?php echo "id_prod" . $cod; ?>)'><i class='fa fa-check'></i></button>
                                    <button type='button' class='btn btn-danger' data-toggle='modal' onclick='solicitudEstado(<?php echo "cod" . $cod; ?> , "RECHAZADA" , <?php echo "cant" . $cod; ?> , <?php echo "id_prod" . $cod; ?>)'><i class='fa fa-times'></i></button>
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
        <!-- Default box -->
        <div class="box ">
            <h3>
                SOLICITUDES APROBADAS
            </h3>
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
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Instructor</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $objHumano = new ControladorSolicitudes();
                        $arrayUsuario = $objHumano->ctrListarSolicitudesAprovadas();


                        foreach ($arrayUsuario as $campo) {
                            $cod = $campo['id'];
                        ?>

                            <tr>
                                <h1 class="dpl" id="<?php echo 'id_prod' . $cod; ?>"><?php echo $campo['id_producto'];  ?></h1>
                                <td id="<?php echo 'cod' . $cod; ?>"><?php echo $cod;  ?></td>
                                <td id="<?php echo 'pas' . $cod; ?>"><?php echo $campo['nombreProducto']; ?></td>
                                <td id="<?php echo 'cant' . $cod; ?>"><?php echo $campo['cantidad']; ?></td>
                                <td id="<?php echo 'nom' . $cod; ?>"><?php echo $campo['nombre'];  ?> <?php echo $campo['apellido'];  ?></td>

                                <td>
                                    <button type='button' class='btn btn-success' data-toggle='modal' onclick='solicitudEstado(<?php echo "cod" . $cod; ?> , "ENTREGADO", <?php echo "cant" . $cod; ?>, <?php echo "id_prod" . $cod; ?>)'><i class='fa fa-check'></i></button>
                                    <!-- <button type='button' class='btn btn-danger' data-toggle='modal' onclick='solicitudEstado(<?php echo "cod" . $cod; ?> , "RECHAZADA")'><i class='fa fa-times'></i></button> -->
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

<?php

if (isset($_GET['idSolicitud'])) {

    $objInstructor = new ControladorSolicitudes();
    if ($objInstructor->ctrAceptarSolicitudes()) {
        echo "<script>
        Swal.fire({
          icon: 'success',
          title: 'Completo',
          confirmButtonText: 'Save',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location='solicitudes';
          } 
        })
        </script>";
    }
}
?>