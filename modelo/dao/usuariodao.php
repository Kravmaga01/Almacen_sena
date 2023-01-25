<?php

require_once 'modelo/conexion.php';

/*================================================== 
                        MODELO DE USUARIO
    ===================================================*/

class UsuarioDao
{
    /*====================================================
                    ATRIBUTOS DE LA CLASE USUARIO
        ====================================================*/
    private $codigo;
    private $usuario;
    private $clave;
    private $rol;

    /*====================================================
                            METODO CONSTRUCTOR
        ====================================================*/

    function __construct($objUsuario)
    {

        $this->codigo             = $objUsuario->getCodigo();
        $this->usuario            = $objUsuario->getUsuario();
        $this->clave              = $objUsuario->getClave();
        $this->rol                = $objUsuario->getRol();
    }

    public function mdlConsultarUser()
    {
        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/
        $sql = "call SpConsultUser (?, ?);";

        try {

            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);
            $stmt->bindParam(1, $this->usuario,    PDO::PARAM_STR);
            $stmt->bindParam(2, $this->clave,      PDO::PARAM_STR);
            $stmt->execute();

            $resultSet = $stmt;
        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al listar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH

        return $resultSet;
    }
    /*====================================================*/
    public function mdlListarUsuarios()
    {
        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/
        $sql = "call SpConsultUsers ( );";

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

    public function mdlListarUsuario()
    {
        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/
        $sql = "call SpListarUser (?);";

        try {

            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);
            $stmt->bindParam(1, $this->codigo,    PDO::PARAM_INT);

            $stmt->execute();

            $resultSet = $stmt;
        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al listar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH

        return $resultSet;
    }
    function mdlInsertarUsuario()
    {

        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/
        $sql = 'call SpCreateUser( ?, ?, ?)';

        try {

            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);

            /*====================================================
                            LOS VALORES QUE SE INSERTARAN
                ====================================================*/

            $stmt->bindParam(1, $this->usuario,    PDO::PARAM_STR);
            $stmt->bindParam(2, $this->clave,      PDO::PARAM_STR);
            $stmt->bindParam(3, $this->rol,        PDO::PARAM_STR);

            $stmt->execute();
        } catch (Exception $e) {

            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {

            echo "Se ha presentado un error al insertar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        }
    }
    public function mdlEliminarUsuario()
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
    public function mdlModificarUsuario()
    {

        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/

        $sql = 'call SpUpdateUser( ?, ?, ?)';

        try {

            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);

            /*====================================================
                          LOS VALORES QUE SE VAN A MODIFICAR
                ====================================================*/
            $stmt->bindParam(1, $this->codigo,        PDO::PARAM_INT);
            $stmt->bindParam(2, $this->usuario,       PDO::PARAM_STR);
            $stmt->bindParam(3, $this->clave,       PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al modificar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH

    } // FIN DEL METODO MODIFICAR
}
