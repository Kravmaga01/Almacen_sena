<?php

require_once 'modelo/conexion.php';

/*================================================== 
                        MODELO DE USUARIO
    ===================================================*/

class SolicitudesDao
{
    /*====================================================
                    ATRIBUTOS DE LA CLASE USUARIO
        ====================================================*/
    private $Id;
    private $Producto;
    private $Cantidad;
    private $Id_user;
    private $Estado;

    /*====================================================
                            METODO CONSTRUCTOR
        ====================================================*/

    function __construct($objSolicitudes)
    {

        $this->Id               = $objSolicitudes->getId();
        $this->Producto         = $objSolicitudes->getProducto();
        $this->Cantidad         = $objSolicitudes->getCantidad();
        $this->Id_user         = $objSolicitudes->getId_user();
        $this->Estado         = $objSolicitudes->getEstado();
    }
    /*====================================================*/
    public function mdlListarSolicitudesPendientes()
    {
        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/
        $sql = "call SpConsultarSolicitudesPendientes ( );";

        try {

            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);

            $stmt->execute();

            $resultSet = $stmt;
        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al listar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH

        return $resultSet;
    }
    public function mdlListarSolicitudesAprovadas()
    {
        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/
        $sql = "call SpConsultarSolicitudesAprovadas ( );";

        try {

            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);

            $stmt->execute();

            $resultSet = $stmt;
        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al listar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH

        return $resultSet;
    }
    public function mdlEliminarSolicitudes()
    {

        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/

        $sql = "call SpDeleteUser( ? )";

        try {
            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);

            /*====================================================
                    SE INGRESA EL CODIGO QUE SE DESEA ELIMINAR
                ====================================================*/
            echo "<script>console.log( 'Debug Objects: " . $this->codigo . "' );</script>";

            $stmt->bindParam(1, $this->codigo,    PDO::PARAM_INT);

            $stmt->execute();
        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al eliminar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH
    } //FIN DEL METODO ELIMINAR
    public function mdlAceptarSolicitudes()
    {

        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/

        $sql = 'call SpAceptarSolicitudes( ?, ?, ?, ?)';

        try {

            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);

            /*====================================================
                            LOS VALORES QUE SE VAN A MODIFICAR
                ====================================================*/
            $stmt->bindParam(1, $this->Id,        PDO::PARAM_INT);

            $stmt->bindParam(2, $this->Estado,        PDO::PARAM_STR);
            $stmt->bindParam(3, $this->Cantidad,        PDO::PARAM_INT);
            $stmt->bindParam(4, $this->Producto,        PDO::PARAM_INT);

            $stmt->execute();
            $resultSet = $stmt;
            if ($resultSet) {
                return $resultSet;
            }

        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al modificar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH

    } // FIN DEL METODO MODIFICAR
    public function mdlInsertarSolicitudes()
    {

        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/

        $sql = 'call SpCreateSolicitud( ?, ?, ?)';

        try {

            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);

            /*====================================================
                            LOS VALORES QUE SE VAN A MODIFICAR
                ====================================================*/
            $stmt->bindParam(1, $this->Id_user,        PDO::PARAM_INT);
            $stmt->bindParam(2, $this->Producto,        PDO::PARAM_INT);
            $stmt->bindParam(3, $this->Cantidad,        PDO::PARAM_INT);

            $stmt->execute();
        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al modificar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH

    } // FIN DEL METODO MODIFICAR
}
