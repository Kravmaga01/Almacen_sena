<!-- Content Wrapper. Contains page content -->

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
                    <form method="POST" name="formularioJuridica" id="formularioJuridica">
                        <div class="conten_info">
                            <h1>INFORMACIÓN PERSONAL</h1>
                            <input type="hidden" id="txtModCodigo" name="txtModCodigo" value=" <?php echo $campo['id_proveedor']; ?>">

                            <input type="hidden" id="txtModCodigoUser" name="txtModCodigoUser" value="<?php echo $campo['id_usuario']; ?>">
                            <input type="hidden" id="txtModRol" name="txtModRol">
                            <div id="contentNombre" class="conten_camp_info">
                                <div onmouseover='lol(9)' class='wrap-input100 validate-input bg1'>
                                    <span class='label-input100'>Tipo_persona</span>
                                    <textarea onmouseover='lol(9)' readonly onmouseout='lol3()' id='Tipo_persona' name='Tipo_persona' class='autoExpand input100' rows='2' data-min-rows='2' placeholder='Tipo persona'><?php echo $campo['Tipo_persona']; ?></textarea>
                                    <select id="txtModTipoPersona" name="txtModTipoPersona" class='form-control input-lg dpl' onchange="mostrarJuridica();">
                                        <?php
                                        if ($campo['Tipo_persona'] == 'NATURAL') {
                                        ?>
                                            <option onmouseover='lol(9)'>Seleccione el tipo de persona</option>
                                            <option>JURIDICA</option>
                                            <option selected> NATURAL</option>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        if ($campo['Tipo_persona'] == 'JURIDICA') {
                                        ?>
                                            <option disabled="">Seleccione el tipo de persona</option>
                                            <option selected>JURIDICA</option>
                                            <option> NATURAL</option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <input class='dpl' type='submit' name='btnTipo_persona' id='btnTipo_persona'>
                                </div>
                                <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
                                    <span class="label-input100">USERNAME</span>

                                    <textarea onmouseover='lol(3)' readonly onmouseout="lol3()" id="UserName" class='autoExpand input100' name="txtModUsuario" rows='2' data-min-rows='2' placeholder='UserName'><?php echo $campo['UserName'];  ?></textarea>
                                    <input class="dpl" type="submit" name="btnUserName" id="btnUserName">
                                </div>
                                <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
                                    <span class="label-input100">CONTRASEÑA</span>

                                    <textarea onmouseover='lol(4)' readonly onmouseout="lol3()" id="Password" class='autoExpand input100' name="txtModContraseña" rows='2' data-min-rows='2' placeholder='Password'><?php echo $campo['Password'];  ?></textarea>
                                    <input class="dpl" type="submit" name="btnPassword" id="btnPassword">
                                </div>
                                <div class='wrap-input100 validate-input bg1'>
                                    <span class='label-input100'>NOMBRE</span>
                                    <textarea onmouseover='lol(13)' readonly onmouseout='lol3()' id='Nombre' name='txtModNombre' class='autoExpand input100' rows='2' data-min-rows='2' placeholder='Nombre'><?php echo $campo['Nombre']; ?></textarea>
                                    <input class='dpl' type='submit' name='btnNombre' id='btnNombre'>
                                </div>
                                <div id="Natural">
                                    <div class='wrap-input100 validate-input bg1'>
                                        <span class='label-input100'>APELLIDO</span>
                                        <textarea onmouseover='lol(14)' readonly onmouseout='lol3()' id='Apellido' name='txtModApellido' class='autoExpand input100' rows='2' data-min-rows='2' placeholder='Apellido'><?php echo $campo['Apellido']; ?></textarea>
                                        <input class='dpl' type='submit' name='btnApellido' id='btnApellido'>
                                    </div>
                                    <div class='wrap-input100 validate-input bg1'>
                                        <span class='label-input100'>RUT</span>
                                        <textarea onmouseover='lol(12)' readonly onmouseout='lol3()' id='RUT' name='txtModRut' class='autoExpand input100' rows='2' data-min-rows='2' placeholder='Nombre'><?php echo $campo['RUT']; ?></textarea>
                                        <input class='dpl' type='submit' name='btnRUT' id='btnRUT'>
                                    </div>
                                    <div class='wrap-input100 validate-input bg1'>
                                        <span class='label-input100'>DOCUMENTO</span>
                                        <textarea onmouseover='lol(10)' readonly onmouseout='lol3()' id='Numero_documento' name='txtModDocumento' class='autoExpand input100' rows='2' data-min-rows='2' placeholder='Nombre'><?php echo $campo['Numero_documento']; ?></textarea>
                                        <input class='dpl' type='submit' name='btnNumero_documento' id='btnNumero_documento'>
                                    </div>
                                </div>
                                <div id="Juridica">
                                    <div class='wrap-input100 validate-input bg1'>
                                        <span class='label-input100'>RAZÓN SOCIAL</span>
                                        <textarea onmouseover='lol(15)' readonly onmouseout='lol3()' id='Razon_social' name='txtModRazonSocial' class='autoExpand input100' rows='2' data-min-rows='2' placeholder='Nombre'><?php echo $campo['Razon_social']; ?></textarea>
                                        <input class='dpl' type='submit' name='btnRazon_social' id='btnRazon_social'>
                                    </div>
                                    <div class='wrap-input100 validate-input bg1'>
                                        <span class='label-input100'>NIT</span>
                                        <textarea onmouseover='lol(11)' readonly onmouseout='lol3()' id='NIT' name='txtModNIT' class='autoExpand input100' rows='2' data-min-rows='2' placeholder='Nombre'><?php echo $campo['NIT']; ?></textarea>
                                        <input class='dpl' type='submit' name='btnNIT' id='btnNIT'>
                                    </div>

                                </div>
                                <div class='wrap-input100 validate-input bg1'>
                                    <span class='label-input100'>CÓDIGO PAÍS</span>
                                    <textarea onmouseover='lol(16)' readonly onmouseout='lol3()' id='Codigo_pais' name='txtModCodPais' class='autoExpand input100' rows='2' data-min-rows='2' placeholder='Nombre'><?php echo $campo['Codigo_pais']; ?></textarea>
                                    <input class='dpl' type='submit' name='btnCodigo_pais' id='btnCodigo_pais'>
                                </div>
                                <div class='wrap-input100 validate-input bg1'>
                                    <span class='label-input100'>NOMBRE PAÍS</span>
                                    <textarea onmouseover='lol(17)' readonly onmouseout='lol3()' id='Nombre_pais' name='txtModNomPais' class='autoExpand input100' rows='2' data-min-rows='2' placeholder='Nombre'><?php echo $campo['Nombre_pais']; ?></textarea>
                                    <input class='dpl' type='submit' name='btnNombre_pais' id='btnNombre_pais'>
                                </div>
                                <div class='wrap-input100 validate-input bg1'>
                                    <span class='label-input100'>CÓDIGO DEPARTAMENTO</span>
                                    <textarea onmouseover='lol(18)' readonly onmouseout='lol3()' id='Codigo_departamento' name='txtModCodDep' class='autoExpand input100' rows='2' data-min-rows='2' placeholder='Nombre'><?php echo $campo['Codigo_departamento']; ?></textarea>
                                    <input class='dpl' type='submit' name='btnCodigo_departamento' id='btnCodigo_departamento'>
                                </div>
                                <div class='wrap-input100 validate-input bg1'>
                                    <span class='label-input100'>NOMBRE DEPARTAMENTO</span>
                                    <textarea onmouseover='lol(19)' readonly onmouseout='lol3()' id='Nombre_departamento' name='txtModNomDep' class='autoExpand input100' rows='2' data-min-rows='2' placeholder='Nombre'><?php echo $campo['Nombre_departamento']; ?></textarea>
                                    <input class='dpl' type='submit' name='btnNombre_departamento' id='btnNombre_departamento'>
                                </div>
                                <div class='wrap-input100 validate-input bg1'>
                                    <span class='label-input100'>CÓDIGO CIUDAD</span>
                                    <textarea onmouseover='lol(20)' readonly onmouseout='lol3()' id='Codigo_ciudad' name='txtModCodCiud' class='autoExpand input100' rows='2' data-min-rows='2' placeholder='Nombre'><?php echo $campo['Codigo_ciudad']; ?></textarea>
                                    <input class='dpl' type='submit' name='btnCodigo_ciudad' id='btnCodigo_ciudad'>
                                </div>
                                <div class='wrap-input100 validate-input bg1'>
                                    <span class='label-input100'>NOMBRE CIUDAD</span>
                                    <textarea onmouseover='lol(21)' readonly onmouseout='lol3()' id='Nombre_ciudad' name='txtModNomCiud' class='autoExpand input100' rows='2' data-min-rows='2' placeholder='Nombre'><?php echo $campo['Nombre_ciudad']; ?></textarea>
                                    <input class='dpl' type='submit' name='btnNombre_ciudad' id='btnNombre_ciudad'>
                                </div>
                                <div class='wrap-input100 validate-input bg1'>
                                    <span class='label-input100'>DIRECCIÓN</span>
                                    <textarea onmouseover='lol(22)' readonly onmouseout='lol3()' id='Direccion' name='txtModDir' class='autoExpand input100' rows='2' data-min-rows='2' placeholder='Nombre'><?php echo $campo['Direccion']; ?></textarea>
                                    <input class='dpl' type='submit' name='btnDireccion' id='btnDireccion'>
                                </div>
                                <div class='wrap-input100 validate-input bg1'>
                                    <span class='label-input100'>TELÉFONO</span>
                                    <textarea onmouseover='lol(23)' readonly onmouseout='lol3()' id='Telefono' name='txtModTel' class='autoExpand input100' rows='2' data-min-rows='2' placeholder='Nombre'><?php echo $campo['Telefono']; ?></textarea>
                                    <input class='dpl' type='submit' name='btnTelefono' id='btnTelefono'>
                                </div>
                                <div class='wrap-input100 validate-input bg1'>
                                    <span class='label-input100'>CORREO</span>
                                    <textarea onmouseover='lol(24)' readonly onmouseout='lol3()' id='Gmail' name='txtModGma' class='autoExpand input100' rows='2' data-min-rows='2' placeholder='Nombre'><?php echo $campo['Gmail']; ?></textarea>
                                    <input class='dpl' type='submit' name='btnGmail' id='btnGmail'>
                                </div>
                                <div class='wrap-input100 validate-input bg1'>
                                    <span class='label-input100'>AUTORIZACIÓN txtModControlInventario</span>
                                    <textarea onmouseover='lol(25)' readonly onmouseout='lol3()' id='Autorizacion_Gmail' name='txtModAutGma' class='autoExpand input100' rows='2' data-min-rows='2' placeholder='Nombre'><?php echo $campo['Autorizacion_Gmail']; ?></textarea>
                                    <input class='dpl' type='submit' name='btnAutorizacion_Gmail' id='btnAutorizacion_Gmail'>
                                </div>
                                <?php
                                if (isset($_POST['txtModCodigo'])) {
                                    $objProveedor = new ControladorProveedor();
                                    $objUser      = new ControladorUsuario();
                                    if ($objUser->ctrModificarUsuario() & $objProveedor->ctrModificarProveedor()) {
                                        echo "<script>
                                        Swal.fire({
                                        icon: 'success',
                                        title: 'Completo',
                                        confirmButtonText: 'Save',
                                        }).then((result) => {
                                        if (result.isConfirmed) {
                                            window.location='inicio2';
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
<script src="vista/js/jquery-3.6.0.min.js"></script>

<script src="vista/js/desplegar2.js"></script>