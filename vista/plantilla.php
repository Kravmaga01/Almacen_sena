<!DOCTYPE html>
<html lang="es">
<?php
session_start();
// $_SESSION['inicioSesion'] = 'PROVEEDOR';

?>


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Almacen sena</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vista/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vista/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="vista/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vista/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="vista/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="vista/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="vista/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="vista/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="vista/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="vista/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- Icono de la aplicacion -->
  <link rel="shortcut icon" href="vista/img/icono.png" type="image/x-icon">
  <!-- DataTables -->
  <link rel="stylesheet" href="vista/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Estilos de los mensajes sweetalert2-->
  <link rel="stylesheet" href="vista/css/sweetalert2.min.css">
  <!-- javascript de los mensajes sweetalert2-->
  <script src="vista/js/sweetalert2.all.min.js"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">

  <?php
  if (isset($_SESSION['inicioSesion'])) {
    echo '<div class="wrapper">';
    if ($_SESSION['inicioSesion'] == 'ADMIN') {
      /*===============================================
                                    CABEZOTE
                  ===============================================*/
      include_once 'vista/modulos/cabezote.php';
      /*===============================================
                                      MENU
                  ===============================================*/
      include_once 'vista/modulos/menu.php';
      /*===============================================
                                    CONTENIDO
                  ===============================================*/

      if (isset($_GET["ruta"])) {
        if (
          $_GET["ruta"] == 'inicio' ||
          $_GET["ruta"] == 'productos' ||
          $_GET["ruta"] == 'proveedores' ||
          $_GET["ruta"] == 'instructores' ||
          $_GET["ruta"] == 'solicitudes' ||
          $_GET["ruta"] == 'clases' ||

          $_GET["ruta"] == 'salir'
        ) {

          include_once 'vista/modulos/' . $_GET["ruta"] . '.php';
        }
      }

      /*===============================================
                                  FOOTER
                  ===============================================*/
      include_once 'vista/modulos/footer.php';

      echo '</div><!-- ./wrapper -->';
    } else {
      if ($_SESSION['inicioSesion'] == 'INSTRUCTOR') {
        include_once 'vista/modulos/cabezote.php';
        /*===============================================
                                        MENU
                    ===============================================*/
        include_once 'vista/modulos/menu1.php';
        /*===============================================
                                      CONTENIDO
                    ===============================================*/

        if (isset($_GET["ruta"])) {
          if (
            $_GET["ruta"] == 'inicio1' ||
            $_GET["ruta"] == 'productos1' ||
            $_GET["ruta"] == 'salir'
          ) {

            include_once 'vista/modulos/' . $_GET["ruta"] . '.php';
          }
        }
      } else {
        if ($_SESSION['inicioSesion'] == 'PROVEEDOR') {
          include_once 'vista/modulos/cabezote.php';
          /*===============================================
                                          MENU
                      ===============================================*/
          include_once 'vista/modulos/menu2.php';
          /*===============================================
                                        CONTENIDO
                      ===============================================*/

          if (isset($_GET["ruta"])) {
            if (
              $_GET["ruta"] == 'inicio2' ||
              $_GET["ruta"] == 'productos2' ||
              $_GET["ruta"] == 'clases' ||
              $_GET["ruta"] == 'salir'
            ) {

              include_once 'vista/modulos/' . $_GET["ruta"] . '.php';
            }
          }
        }
      }
    }
  } else {

    include_once 'vista/modulos/login.php';
  }

  ?>


  <!-- jQuery 3 -->
  <script src="vista/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="vista/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="vista/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="vista/bower_components/raphael/raphael.min.js"></script>
  <script src="vista/bower_components/morris.js/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="vista/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="vista/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="vista/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="vista/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="vista/bower_components/moment/min/moment.min.js"></script>
  <script src="vista/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="vista/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="vista/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="vista/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="vista/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="vista/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="vista/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="vista/dist/js/demo.js"></script>
  <!-- Datos basicos  -->
  <script src="vista/js/datosbasicos.js"></script>
  <!-- DataTables -->
  <script src="vista/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vista/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script>
    $(function() {
      $('#tablaHumano').DataTable({
        language: {
          "decimal": "",
          "emptyTable": "No hay información",
          "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
          "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
          "infoFiltered": "(Filtrado de _MAX_ total entradas)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Mostrar _MENU_ Entradas",
          "loadingRecords": "Cargando...",
          "processing": "Procesando...",
          "search": "Buscar:",
          "zeroRecords": "Sin resultados encontrados",
          "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
          }
        }
      })
    })
  </script>
  <script>
    $(function() {
      $('#tablaHumano2').DataTable({
        language: {
          "decimal": "",
          "emptyTable": "No hay información",
          "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
          "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
          "infoFiltered": "(Filtrado de _MAX_ total entradas)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Mostrar _MENU_ Entradas",
          "loadingRecords": "Cargando...",
          "processing": "Procesando...",
          "search": "Buscar:",
          "zeroRecords": "Sin resultados encontrados",
          "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
          }
        }
      })
    })
  </script>
</body>

</html>