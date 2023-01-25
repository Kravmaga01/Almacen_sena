<?php

require_once 'modelo/conexion.php';

/*================================================== 
                        MODELO DE USUARIO
    ===================================================*/

class ProveedorDao
{
    /*====================================================
                    ATRIBUTOS DE LA CLASE USUARIO
        ====================================================*/
    private $id_proveedor;
    private $Tipo_persona;
    private $Numero_documento;
    private $NIT;
    private $RUT;
    private $Nombre;
    private $Apellido;
    private $Razon_social;
    private $Codigo_pais;
    private $Nombre_pais;
    private $Codigo_departamento;
    private $Nombre_departamento;
    private $Codigo_ciudad;
    private $Nombre_ciudad;
    private $Direccion;
    private $Telefono;
    private $Gmail;
    private $Autorizacion_Gmail;
    private $id_usuario;

    /*====================================================
                            METODO CONSTRUCTOR
        ====================================================*/

    function __construct($objProveedor)
    {

        $this->id_proveedor             = $objProveedor->getId_proveedor();
        $this->Tipo_persona            = $objProveedor->getTipo_persona();
        $this->Numero_documento              = $objProveedor->getNumero_documento();
        $this->NIT                = $objProveedor->getNIT();
        $this->RUT             = $objProveedor->getRUT();
        $this->Nombre            = $objProveedor->getNombre();
        $this->Apellido              = $objProveedor->getApellido();
        $this->Razon_social                = $objProveedor->getRazon_social();
        $this->Codigo_pais             = $objProveedor->getCodigo_pais();
        $this->Nombre_pais            = $objProveedor->getNombre_pais();
        $this->Codigo_departamento              = $objProveedor->getCodigo_departamento();
        $this->Nombre_departamento                = $objProveedor->getNombre_departamento();
        $this->Codigo_ciudad             = $objProveedor->getCodigo_ciudad();
        $this->Nombre_ciudad            = $objProveedor->getNombre_ciudad();
        $this->Direccion              = $objProveedor->getDireccion();
        $this->Telefono                = $objProveedor->getTelefono();
        $this->Gmail              = $objProveedor->getGmail();
        $this->Autorizacion_Gmail              = $objProveedor->getAutorizacion_Gmail();
        $this->id_usuario              = $objProveedor->getId_usuario();
    }
    /*====================================================*/
    public function mdlListarProveedores()
    {
        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/
        $sql = "call SpConsultProveedores ( );";

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
    public function mdlEliminarProveedor()
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
    public function mdlModificarProveedor()
    {

        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/

        $sql = 'call SpUpdateProveedor( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,? ,? ,? )';

        try {

            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);

            /*====================================================
                            LOS VALORES QUE SE VAN A MODIFICAR
                ====================================================*/
            $stmt->bindParam(1, $this->id_proveedor,        PDO::PARAM_INT);
            $stmt->bindParam(2, $this->Tipo_persona,        PDO::PARAM_STR);
            $stmt->bindParam(3, $this->Numero_documento,    PDO::PARAM_INT);
            $stmt->bindParam(4, $this->NIT,                 PDO::PARAM_STR);
            $stmt->bindParam(5, $this->RUT,                 PDO::PARAM_STR);
            $stmt->bindParam(6, $this->Nombre,              PDO::PARAM_STR);
            $stmt->bindParam(7, $this->Apellido,            PDO::PARAM_STR);
            $stmt->bindParam(8, $this->Razon_social,        PDO::PARAM_STR);
            $stmt->bindParam(9, $this->Codigo_pais,         PDO::PARAM_STR);
            $stmt->bindParam(10, $this->Nombre_pais,        PDO::PARAM_STR);
            $stmt->bindParam(11, $this->Codigo_departamento, PDO::PARAM_STR);
            $stmt->bindParam(12, $this->Nombre_departamento, PDO::PARAM_STR);
            $stmt->bindParam(13, $this->Codigo_ciudad,      PDO::PARAM_STR);
            $stmt->bindParam(14, $this->Nombre_ciudad,      PDO::PARAM_STR);
            $stmt->bindParam(15, $this->Direccion,          PDO::PARAM_STR);
            $stmt->bindParam(16, $this->Telefono,           PDO::PARAM_INT);
            $stmt->bindParam(17, $this->Gmail,              PDO::PARAM_STR);
            $stmt->bindParam(18, $this->Autorizacion_Gmail, PDO::PARAM_BOOL);
            $stmt->bindParam(19, $this->id_usuario,         PDO::PARAM_INT);

            $stmt->execute();
        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al modificar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH

    } // FIN DEL METODO MODIFICAR
}
