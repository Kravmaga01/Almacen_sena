<!-- Content Wrapper. Contains page content -->
<script src="vista/js/jquery-3.6.0.min.js"></script>

<div class="content-wrapper">
    <link rel="stylesheet" href="vista/css/info_user.css">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Personal
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-female"></i> Usuarios</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php

        $objHumano = new ControladorUsuario();
        $arrayUsuario = $objHumano->ctrListarUsuario();

        foreach ($arrayUsuario as $campo) {

            $cod = $campo['id_usuario'];
        ?>
            <!-- Default box -->
            <div class="box">
                <div>
                    <form method="post">
                        <div class="conten_info">
                            <h1>INFORMACIÓN PERSONAL</h1>
                            <div id="contentNombre" class="conten_camp_info">
                                <input type="hidden" id="txtModCodigo" name="txtModCodigo" value=" <?php echo $campo['Id_instructor']; ?>">

                                <input type="hidden" id="txtModCodigoUser" name="txtModCodigoUser" value="<?php echo $campo['id_usuario']; ?>">
                                <div onmouseover='lol(1)' class="wrap-input100 validate-input bg1">

                                    <span class="label-input100">NOMBRE</span>
                                    <textarea onmouseover='lol(1)' readonly onmouseout="lol2()" id="nombre" class='autoExpand input100' name="txtModNombre" rows='2' data-min-rows='2' placeholder='Nombre'><?php echo $campo['nombre'];  ?></textarea>
                                    <input class="dpl" type="submit" name="btnnombre" id="btnnombre">
                                </div>
                                <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
                                    <span class="label-input100">APELLIDO</span>
                                    <textarea onmouseover='lol(2)' readonly onmouseout="lol2()" id="apellido" class='autoExpand input100' name="txtModApellido" rows='2' data-min-rows='2' placeholder='Apellido'><?php echo $campo['apellido'];  ?></textarea>
                                    <input class="dpl" type="submit" name="btnapellido" id="btnapellido">
                                </div>
                                <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
                                    <span class="label-input100">USERNAME</span>

                                    <textarea onmouseover='lol(3)' readonly onmouseout="lol2()" id="UserName" class='autoExpand input100' name="txtModUsuario" rows='2' data-min-rows='2' placeholder='UserName'><?php echo $campo['UserName'];  ?></textarea>
                                    <input class="dpl" type="submit" name="btnUserName" id="btnUserName">
                                </div>
                                <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
                                    <span class="label-input100">CONTRASEÑA</span>

                                    <textarea onmouseover='lol(4)' readonly onmouseout="lol2()" id="Password" class='autoExpand input100' name="txtModContraseña" rows='2' data-min-rows='2' placeholder='Password'><?php echo $campo['Password'];  ?></textarea>
                                    <input class="dpl" type="submit" name="btnPassword" id="btnPassword">
                                </div>
                                <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your documento">
                                    <span class="label-input100">Número documento</span>

                                    <textarea onmouseover='lol(5)' readonly onmouseout="lol2()" id="numero_documento" name="txtModDocumento" class='autoExpand input100' rows='2' data-min-rows='2' placeholder='numero_documento'><?php echo $campo['numero_documento'];  ?></textarea>
                                    <input class="dpl" type="submit" name="btnnumero_documento" id="btnnumero_documento">
                                </div>
                                <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your teléfono">
                                    <span class="label-input100">TELÉFONO</span>

                                    <textarea onmouseover='lol(6)' readonly onmouseout="lol2()" id="telefono" class='autoExpand input100' name="txtModTelefono" rows='2' data-min-rows='2' placeholder='telefono'><?php echo $campo['telefono'];  ?></textarea>
                                    <input class="dpl" type="submit" name="btntelefono" id="btntelefono">
                                </div>
                                <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your gmail">
                                    <span class="label-input100">CORREO</span>

                                    <textarea onmouseover='lol(7)' name="txtModGmail" readonly onmouseout="lol2()" id="gmail" class='autoExpand input100' rows='2' data-min-rows='2' placeholder='gmail'><?php echo $campo['gmail'];  ?></textarea>
                                    <input class="dpl" type="submit" name="btngmail" id="btngmail">
                                </div>
                                <?php
                                if (isset($_POST['txtModCodigo'])) {
                                    $objProveedor = new ControladorInstructor();
                                    $objUser      = new ControladorUsuario();
                                    if ($objUser->ctrModificarUsuario() & $objProveedor->ctrModificarInstructor()) {
                                        echo "<script>
                                        Swal.fire({
                                        icon: 'success',
                                        title: 'Completo',
                                        confirmButtonText: 'Save',
                                        }).then((result) => {
                                        if (result.isConfirmed) {
                                            window.location='inicio1';
                                        } 
                                        })
                                        </script>";
                                    }
                                }
                                ?>
                            </div>
                    </form>
                </div>
            </div>
            <!-- /.box-body -->
</div>
<?php
        }
?>


</section>
<!-- /.content -->
</div>
<?php
?>