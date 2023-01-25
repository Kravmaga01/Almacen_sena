<?php
class ControladorSolicitudes
{

    /*====================================================
                    ATRIBUTOS DE LA CLASE SOLICITUDES
        ====================================================*/
    private $objDtoSolicitudes;
    private $estado = false;

    public function __construct()
    {
        try {
            $this->objDtoSolicitudes = new Solicitudes();
        } catch (Exception $e) {

            echo "Se ha presentado un error en la metodo constructor Usuario " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        }
    } //FIN DEL METODO CONSTRUCTOR

    public function ctrListarSolicitudesPendientes()
    {

        $objSolicitudesDao = new SolicitudesDao($this->objDtoSolicitudes);

        $arraySolicitudes = $objSolicitudesDao->mdlListarSolicitudesPendientes()->fetchAll();

        return $arraySolicitudes;
    } //metodo

    public function ctrListarSolicitudesAprovadas()
    {

        $objSolicitudesDao = new SolicitudesDao($this->objDtoSolicitudes);

        $arraySolicitudes = $objSolicitudesDao->mdlListarSolicitudesAprovadas()->fetchAll();

        return $arraySolicitudes;
    } //metodo
    public function ctrInsertarSolicitud()
    {
        try {
            //$this -> objDtoUsuario -> setCodigoPersonal($_POST['txtCodigoPersonal']);
            $this->objDtoSolicitudes->setCantidad($_POST['cantidadSolicitada']);
            $this->objDtoSolicitudes->setId_user($_SESSION['id_user']);
            $this->objDtoSolicitudes->setProducto($_POST['id_producto1']);

            // $d = getUsuario();
            //echo "<script>console.log( 'Debug Objects: " . $_POST['txtUsuario'] . "' );</script>";

            $objSolicituDao = new SolicitudesDao($this->objDtoSolicitudes);

            //echo var_dump($objSOLICITUDESDao-> mdlListarSOLICITUDES() -> fetchAll());

            $objSolicituDao->mdlInsertarSolicitudes();

            $this->estado = true;
        } catch (Exception $e) {

            echo "Se ha presentado un error en la metodo insertar SOLICITUDES " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        }
        // echo '
        //     <script>
        //       window.location="inicio";
        //     </script>
        //     ';

        return $this->estado;
    }
    public function ctrAceptarSolicitudes()
    {
        try {
            $this->objDtoSolicitudes->setId($_GET['idSolicitud']);
            $this->objDtoSolicitudes->setEstado($_GET['estadoSolicitud']);
            $this->objDtoSolicitudes->setCantidad($_GET['cantidadSolicitud']);
            $this->objDtoSolicitudes->setProducto($_GET['idProSolicitud']);
            echo "<script>console.log( 'Debug Objects: " . $_GET['estadoSolicitud'] . "' );</script>";

            $objSolicitudesDao = new SolicitudesDao($this->objDtoSolicitudes);

            $arraySolicitudes = $objSolicitudesDao->mdlAceptarSolicitudes()->fetchAll();;
            // echo '
            // <script>
            //   window.location="instructores";
            // </script>
            // ';
            foreach ($arraySolicitudes as $campo) {
                if($campo['error'] != 'ok'){
                    echo '<script>alert("' . $campo['error'] . '");</script>';

                    echo ($campo['error']);
                }

            }
            $this->estado = true;
        } catch (Exception $e) {

            echo "Se ha presentado un error en la metodo aceptar SOLICITUDES " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        }

        return $this->estado;
    } // FIN DEL METODO MODIFICAR
}//clase
