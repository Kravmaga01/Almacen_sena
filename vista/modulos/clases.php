<!-- Content Wrapper. Contains page content -->
<link rel="stylesheet" href="vista/css/producto.css">

<script src="vista/js/jquery-3.6.0.min.js"></script>
<script src="vista/js/sub_categorias.js"></script>

<div class="content-wrapper">
    <link rel="stylesheet" href="vista/css/info_user.css">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Clasificación
        </h1>
        <button type="button" class='btn btn-primary' data-toggle="modal" data-target="#modalCrear"> CREAR CATEGORIA
        </button>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-female"></i> Usuarios</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container" style="width: auto;">
            <div class="row">
                <div class='col-sm-5 col-md-5 col-lg-5 col-xl-5'>
                    <div>
                        <?php
                        $objHumano1 = new ControladorProducto();
                        $arrayHumano1 = $objHumano1->ctrListarProducto($_GET["txtIdProducto"]);
                        foreach ($arrayHumano1 as $campo1) {
                        ?>
                            <img id="img_mld" src=" <?php echo 'http://localhost/ALMACEN_SENA/vista/img/up/' . $campo1['foto'] ?>" alt="" class="img_div">
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class='col-sm-4 col-md-4 col-lg-4 col-xl-4'>
                    <form action="" method="post">
                        <div class="info-producto">
                            <!-- ingreso de Categorias-->
                            <div class='form-group'>
                                <div class='input-group'>
                                    <span class='input-group-addon'><i class='fa  fa-sticky-note'></i></span>
                                    <?php
                                    $objHumano1 = new ControladorProducto();
                                    $arrayHumano1 = $objHumano1->ctrListarCategorias();
                                    ?>
                                    <select onchange="mostrarClases(<?php echo $_GET['txtIdProducto'] ?>);" id="txtCategorias" name="txtCategorias" class='form-control input-lg'>
                                        <option selected disabled="">Seleccione la categoria</option>
                                        <?php

                                        if (sizeof($arrayHumano1) != 0) {
                                            foreach ($arrayHumano1 as $campo1) {
                                        ?>
                                                <option><?php echo $campo1['nombreCategoria'] ?></option>
                                        <?php
                                            }
                                        } else {
                                            echo "<script>console.log( 'Debug Objects: " . "txtModCodigoClasificacion" . $cod . "' );</script>";
                                        }
                                        $objHumano1 = new ControladorProducto();
                                        $arrayHumano1 = $objHumano1->ctrListarCategoriasProducto($_GET['txtIdProducto']);
                                        $var = null;
                                        foreach ($arrayHumano1 as $campo1) {
                                            $var = $campo1['nombreCategoria'];
                                        }
                                        if (sizeof($var) != 0) {
                                            echo "<script>document.getElementById('txtCategorias').value = '" . $var . "';</script>";
                                        }
                                        ?>
                                    </select>

                                </div>

                            </div>
                            <div id="cuerpo" class='form-group'>
                                <div class='check-group' id="checksbtn" name="checksbtn">
                                    <?php
                                    $objHumano1 = new ControladorProducto();
                                    $arrayHumano1 = $objHumano1->ctrListarSubCategorias($var);
                                    if (sizeof($arrayHumano1) != 0) {
                                        foreach ($arrayHumano1 as $campo1) {
                                    ?>
                                            <input onclick="subclasesocl(`<?php echo 'check' . $campo1['id'] ?>`,`<?php echo $campo1['nombreCategoria'] ?>`, `<?php echo $campo1['id'] ?>` , <?php echo $_GET['txtIdProducto'] ?>);" id='<?php echo 'check' . $campo1['id'] ?>' type='checkbox' class='form-check-input' name='txtInsertControlInventario'>
                                            <label for="<?php echo 'check' . $campo1['id'] ?>"><?php echo $campo1['nombreCategoria'] ?></label>
                                    <?php
                                        }
                                    } else {
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
    <!-- Modal Crear-->
    <div tabindex="-1" class="modal fade" id="modalCrear" role="dialog">

        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="post" name="formularioClases" id="formularioClases" enctype="multipart/form-data">
                    <div class="modal-header" style='background:#3c8dbc; color:white;'>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Crear producto</h4>
                    </div>

                    <div class='form-group'>
                        <div class="modal-body">
                            <div>
                                <!-- ingreso de UnidadMedida -->
                                <div class='form-group'>
                                    <div class='input-group'>
                                        <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                                        <select id="txtCategorias" name="txtCategorias" class='form-control input-lg'>
                                            <option disabled="">SELECIONE LA CATEGORIA</option>
                                            <option>CATEGORIA PRINCIPAL</option>

                                            <?php
                                            $objHumano1 = new ControladorProducto();
                                            $arrayHumano1 = $objHumano1->ctrListarCategorias();

                                            if (sizeof($arrayHumano1) != 0) {
                                                foreach ($arrayHumano1 as $campo1) {
                                            ?>
                                                    <option><?php echo $campo1['nombreCategoria'] ?></option>
                                            <?php
                                                }
                                            } else {
                                                echo "<script>console.log( 'Debug Objects: " . "txtModCodigoClasificacion" . $cod . "' );</script>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- ingreso de UnidadMedida -->
                                <div class='form-group'>
                                    <div class='input-group'>
                                        <span class='input-group-addon'><i class='fa fa-sticky-note'></i></span>
                                        <input id='txtCategoria' type='text' class='form-control input-lg' name='txtCategoria' placeholder='Ingrese la categoria'>
                                    </div>
                                </div>
                            </div>
                        </div><!-- fin del modal-body -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Guardar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        </div>

                        <!-- ingreso de Codigo de pais-->
                    </div>
                    <?php
                    if (isset($_POST['txtCategoria'])) {
                        if ($_POST['txtCategorias'] != 'CATEGORIA PRINCIPAL') {
                            $objProducto    = new ControladorProducto();
                            if ($objProducto->crtCreateSubCategoria()) {
                                echo "<script>
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Completo!',
                                            confirmButtonText: 'Save',
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                            document.location= document.location;
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
                        } else {
                            $objProducto    = new ControladorProducto();
                            if ($objProducto->crtCreateCategoria()) {
                                echo "<script>
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Completo!',
                                            confirmButtonText: 'Save',
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                            document.location= document.location;
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
                        }
                    }


                    ?>
                </form>
            </div>
        </div>
    </div>
</div>
<?php

$objHumano1 = new ControladorProducto();
$arrayHumano1 = $objHumano1->ctrListarSubCategoriasProducto($_GET['txtIdProducto']);


foreach ($arrayHumano1 as $campo1) {
    echo "<script>load('check" . $campo1['id_sub_categoria'] . "')</script>";
}
if (isset($_GET['subclase'])) {
    $objProducto    = new ControladorProducto();
    if ($objProducto->crtEditarSubCategoriaProducto()) {
        echo '
            <script>
                window.location="index.php?ruta=clases&txtIdProducto=' . $_GET['txtIdProducto'] . '&lol=e";
            </script>
            ';
    }
} else {

    if (isset($_GET['clase'])) {

        $objProducto    = new ControladorProducto();
        if ($objProducto->crtEditarCategoriaProducto()) {
            echo '
            <script>
              window.location="index.php?ruta=clases&txtIdProducto=' . $_GET['txtIdProducto'] . '&lol=e";
            </script>
            ';
        }
    }
}

?>
<script src="vista/js/desplegar3.js"></script>