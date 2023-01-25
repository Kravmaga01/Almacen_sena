<?php
class ControladorUsuario
{

    /*====================================================
                    ATRIBUTOS DE LA CLASE USUARIO
        ====================================================*/
    private $objDtoUsuario;
    private $estado = false;

    public function __construct()
    {
        try {

            $this->objDtoUsuario = new usuario();
        } catch (Exception $e) {

            echo "Se ha presentado un error en la metodo constructor Usuario " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        }
    } //FIN DEL METODO CONSTRUCTOR
    public function ctrConsultaUsuario()
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
                    $_SESSION['id_user']    =   $arrayUsuario['id'];
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

    public function ctrListarUsuarios()
    {

        $objUsuarioDao = new UsuarioDao($this->objDtoUsuario);

        $arrayUsuario = $objUsuarioDao->mdlListarUsuarios()->fetchAll();

        return $arrayUsuario;
    } //metodo
    public function ctrListarUsuario()
    {
        $this->objDtoUsuario->setCodigo($_SESSION["id_user"]);

        $objUsuarioDao = new UsuarioDao($this->objDtoUsuario);
        $arrayUsuario = $objUsuarioDao->mdlListarUsuario()->fetchAll();

        return $arrayUsuario;
    } //metodo
    public function ctrInsertarUsuario()
    {
        try {
            //$this -> objDtoUsuario -> setCodigoPersonal($_POST['txtCodigoPersonal']);
            $this->objDtoUsuario->setUsuario($_POST['txtUsuario']);
            $this->objDtoUsuario->setClave($_POST['txtClave']);
            $this->objDtoUsuario->setRol($_POST['txtRol']);
            // $d = getUsuario();
            //echo "<script>console.log( 'Debug Objects: " . $_POST['txtUsuario'] . "' );</script>";

            $objUsuarioDao = new UsuarioDao($this->objDtoUsuario);

            //echo var_dump($objUSUARIODao-> mdlListarUSUARIO() -> fetchAll());

            $objUsuarioDao->mdlInsertarUsuario();

            $this->estado = true;
        } catch (Exception $e) {

            echo "Se ha presentado un error en la metodo insertar USUARIO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        }
        echo '
            <script>
              window.location="inicio";
            </script>
            ';

        return $this->estado;
    }

    public function ctrEliminarUsuario($codigoUsuario)
    {
        $this->objDtoUsuario->setCodigo($codigoUsuario);


        $objUsuarioDao = new UsuarioDao($this->objDtoUsuario);

        $objUsuarioDao->mdlEliminarUsuario();

        return true;
    } // FIN METODO ELIMINAR
    public function ctrModificarUsuario()
    {

        try {
            // echo '<script>alert("'.$_POST['txtModCodigoUser'].'");</script>';

            $this->objDtoUsuario->setCodigo($_POST['txtModCodigoUser']);
            $this->objDtoUsuario->setUsuario($_POST['txtModUsuario']);
            $this->objDtoUsuario->setClave($_POST['txtModContraseña']);

            $objUsuarioDao = new UsuarioDao($this->objDtoUsuario);

            $objUsuarioDao->mdlModificarUsuario();

            // echo '
            // <script>
            //   window.location="inicio";
            // </script>
            // ';
            $this->estado = true;
        } catch (Exception $e) {

            echo "Se ha presentado un error en la metodo insertar USUARIO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        }

        return $this->estado;
    } // FIN DEL METODO MODIFICAR
}//clase
