<?php
class ControladorInstructor
{

    /*====================================================
                    ATRIBUTOS DE LA CLASE INSTRUCTOR
        ====================================================*/
    private $objDtoInstructor;
    private $estado = false;

    public function __construct()
    {
        try {
            $this->objDtoInstructor = new instructor();
        } catch (Exception $e) {

            echo "Se ha presentado un error en la metodo constructor Usuario " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        }
    } //FIN DEL METODO CONSTRUCTOR
    public function ctrConsultaInstructor()
    {

        if (isset($_POST['txtUsuario'])) {
            //echo '<script>alert("ingreso")</script>';
            $usuario = $_POST['txtUsuario'];
            $clave = $_POST['txtClave'];

            $objUsuario = new Usuario();
            $objUsuario->setUsuario($usuario);
            $objUsuario->setClave($clave);

            $objModeloUsuario = new UsuarioDao($objUsuario);

            /* Convierte el resultSet en un ARRAY O VECTOR */
            $arrayUsuario = $objModeloUsuario->mdlConsultarUser()->fetch();

            if (is_bool($arrayUsuario)) {

                echo "<script>

                        Swal.fire({
                            icon: 'error',
                            title: 'Error...',
                            text: 'Contraseña equivocada!'                            
                        })

                    </script>";
            } else {

                if ($arrayUsuario['id'] != "" && $arrayUsuario['Rol_user'] != "") {
                    //if ( $usuario == 'adsi' && $clave == 123){
                    if ($arrayUsuario['Rol_user'] == "ADMIN") {
                        $_SESSION['inicioSesion'] = 'ADMIN';
                        header('location:inicio');
                    } else {
                        if ($arrayUsuario['Rol_user'] == "INSTRUCTOR") {
                            $_SESSION['inicioSesion'] = 'INSTRUCTOR';
                            header('location:inicio1');
                        } else {
                            $_SESSION['inicioSesion'] = 'PROVEEDOR';
                            header('location:inicio2');
                        }
                    }
                    //echo '<script>alert("contraseña correcta '.$arrayUsuario['ZZZ'].'")</script>';
                    /*echo '  <script>
                                    window.locate = " index.php";
                                </script>
                        ';*/
                } //if

            } //else

        } //if

    }

    public function ctrListarInstructor()
    {

        $objInstructorDao = new InstructorDao($this->objDtoInstructor);

        $arrayInstructor = $objInstructorDao->mdlListarInstructor()->fetchAll();

        return $arrayInstructor;
    } //metodo

    public function ctrEliminarInstructor($codigoUsuario)
    {

        $this->objDtoInstructor->setId_usuario($codigoUsuario);

        $objInstructorDao = new InstructorDao($this->objDtoInstructor);

        $objInstructorDao->mdlEliminarInstructor();

        return true;
    } // FIN METODO ELIMINAR
    public function ctrModificarInstructor()
    {

        try {

            $this->objDtoInstructor->setId_instructor($_POST['txtModCodigo']);

            $this->objDtoInstructor->setNumero_documento($_POST['txtModDocumento']);
            $this->objDtoInstructor->setNombre($_POST['txtModNombre']);
            $this->objDtoInstructor->setApellido($_POST['txtModApellido']);
            $this->objDtoInstructor->setTelefono($_POST['txtModTelefono']);
            $this->objDtoInstructor->setGmail($_POST['txtModGmail']);
            $this->objDtoInstructor->setId_usuario($_POST['txtModCodigoUser']);
            //echo '<script>alert("'.$_POST['txtModCodigoPersonal'].'");</script>';

            $objInstructorDao = new InstructorDao($this->objDtoInstructor);

            $objInstructorDao->mdlModificarInstructor();
            // echo '
            // <script>
            //   window.location="instructores";
            // </script>
            // ';

            $this->estado = true;
        } catch (Exception $e) {

            echo "Se ha presentado un error en la metodo insertar INSTRUCTOR " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        }

        return $this->estado;
    } // FIN DEL METODO MODIFICAR
}//clase
