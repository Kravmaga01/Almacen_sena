<?php

require_once 'modelo/conexion.php';

/*================================================== 
                        MODELO DE USUARIO
    ===================================================*/

class ProductoDao
{
    /*====================================================
                    ATRIBUTOS DE LA CLASE USUARIO
        ====================================================*/
    private $id_producto;
    private $unidadMedida;
    private $nombreProducto;
    private $cantidad;
    private $foto;
    private $controlInventario;
    private $paraConsumo;
    private $paraVenta;
    private $produccionInterna;
    private $manejaLotes;
    private $servicio;
    private $conteoFisicas;
    private $productoActivo;
    private $datosFabricante;
    private $refetencia;
    private $medidas;
    private $presentacion;
    private $ubicacionFisica;
    private $productoEquivalente;
    private $unitarioPromedio;
    private $totalPromedio;
    private $stockMinimo;
    private $stockMaximo;
    private $tiempoReposicion;
    private $cuentaInventario;
    private $contableDeIngresos;
    private $contableIngresoAjuste;
    private $contableDevolucionVentas;
    private $contableCostos;
    private $devolucionCompras;
    private $contableGastos;
    private $contableGastosPorAjuste;
    private $impuestoCompras;
    private $impuestoVentas;
    private $usuario_id;
    private $id_categoria;
    private $nombreCategoria;
    private $resultSet = false;
    private $nombreSubCategoria;
    private $id_SubCategoria;
    /*====================================================
                            METODO CONSTRUCTOR
        ====================================================*/

    function __construct($objProducto)
    {
        $this->id_producto  =   $objProducto->getId_producto();
        $this->unidadMedida = $objProducto->getUnidadMedida();
        $this->nombreProducto = $objProducto->getNombreProducto();
        $this->cantidad = $objProducto->getCantidad();
        $this->foto = $objProducto->getFoto();
        $this->controlInventario = $objProducto->getControlInventario();
        $this->paraConsumo = $objProducto->getParaConsumo();
        $this->paraVenta = $objProducto->getParaVenta();
        $this->produccionInterna = $objProducto->getProduccionInterna();
        $this->manejaLotes = $objProducto->getManejaLotes();
        $this->servicio = $objProducto->getServicio();
        $this->conteoFisicas = $objProducto->getConteoFisicas();
        $this->productoActivo = $objProducto->getProductoActivo();
        $this->datosFabricante = $objProducto->getDatosFabricante();
        $this->refetencia = $objProducto->getRefetencia();
        $this->medidas = $objProducto->getMedidas();
        $this->presentacion = $objProducto->getPresentacion();
        $this->ubicacionFisica = $objProducto->getUbicacionFisica();
        $this->productoEquivalente = $objProducto->getProductoEquivalente();
        $this->unitarioPromedio = $objProducto->getUnitarioPromedio();
        $this->totalPromedio = $objProducto->getTotalPromedio();
        $this->stockMinimo = $objProducto->getStockMinimo();
        $this->stockMaximo = $objProducto->getStockMaximo();
        $this->tiempoReposicion = $objProducto->getTiempoReposicion();
        $this->cuentaInventario = $objProducto->getCuentaInventario();
        $this->contableDeIngresos = $objProducto->getContableDeIngresos();
        $this->contableIngresoAjuste = $objProducto->getContableIngresoAjuste();
        $this->contableDevolucionVentas = $objProducto->getContableDevolucionVentas();
        $this->contableCostos = $objProducto->getContableCostos();
        $this->devolucionCompras = $objProducto->getDevolucionCompras();
        $this->contableGastos = $objProducto->getContableGastos();
        $this->contableGastosPorAjuste = $objProducto->getContableGastosPorAjuste();
        $this->impuestoCompras = $objProducto->getImpuestoCompras();
        $this->impuestoVentas = $objProducto->getImpuestoVentas();
        $this->usuario_id = $objProducto->getUsuario_id();
        $this->nombreCategoria = $objProducto->getnombreCategoria();
        $this->id_categoria = $objProducto->getid_categoria();
        $this->id_SubCategoria = $objProducto->getIdSubCategoria();
        $this->nombreSubCategoria = $objProducto->getnombreSubCategoria();
    }
    /*====================================================*/
    public function mdlInsertarProducto()
    {
        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/
        $sql = "call SpCreateProducto(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        try {
            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);

            $stmt->bindParam(1, $this->unidadMedida, PDO::PARAM_STR);
            $stmt->bindParam(2, $this->nombreProducto, PDO::PARAM_STR);
            $stmt->bindParam(3, $this->cantidad, PDO::PARAM_INT);
            $stmt->bindParam(4, $this->foto, PDO::PARAM_STR);
            $stmt->bindParam(5, $this->controlInventario, PDO::PARAM_BOOL);
            $stmt->bindParam(6, $this->paraConsumo, PDO::PARAM_BOOL);
            $stmt->bindParam(7, $this->paraVenta, PDO::PARAM_BOOL);
            $stmt->bindParam(8, $this->produccionInterna, PDO::PARAM_BOOL);
            $stmt->bindParam(9, $this->manejaLotes, PDO::PARAM_BOOL);
            $stmt->bindParam(10, $this->servicio, PDO::PARAM_BOOL);
            $stmt->bindParam(11, $this->conteoFisicas, PDO::PARAM_BOOL);
            $stmt->bindParam(12, $this->productoActivo, PDO::PARAM_BOOL);
            $stmt->bindParam(13, $this->datosFabricante, PDO::PARAM_STR);
            $stmt->bindParam(14, $this->refetencia, PDO::PARAM_STR);
            $stmt->bindParam(15, $this->medidas, PDO::PARAM_STR);
            $stmt->bindParam(16, $this->presentacion, PDO::PARAM_STR);
            $stmt->bindParam(17, $this->ubicacionFisica, PDO::PARAM_STR);
            $stmt->bindParam(18, $this->productoEquivalente, PDO::PARAM_STR);
            $stmt->bindParam(19, $this->unitarioPromedio, PDO::PARAM_INT);
            $stmt->bindParam(20, $this->totalPromedio, PDO::PARAM_INT);
            $stmt->bindParam(21, $this->stockMinimo, PDO::PARAM_INT);
            $stmt->bindParam(22, $this->stockMaximo, PDO::PARAM_INT);
            $stmt->bindParam(23, $this->tiempoReposicion, PDO::PARAM_STR);
            $stmt->bindParam(24, $this->cuentaInventario, PDO::PARAM_STR);
            $stmt->bindParam(25, $this->contableDeIngresos, PDO::PARAM_STR);
            $stmt->bindParam(26, $this->contableIngresoAjuste, PDO::PARAM_STR);
            $stmt->bindParam(27, $this->contableDevolucionVentas, PDO::PARAM_STR);
            $stmt->bindParam(28, $this->contableCostos, PDO::PARAM_STR);
            $stmt->bindParam(29, $this->devolucionCompras, PDO::PARAM_STR);
            $stmt->bindParam(30, $this->contableGastos, PDO::PARAM_STR);
            $stmt->bindParam(31, $this->contableGastosPorAjuste, PDO::PARAM_STR);
            $stmt->bindParam(32, $this->impuestoCompras, PDO::PARAM_STR);
            $stmt->bindParam(33, $this->impuestoVentas, PDO::PARAM_STR);
            $stmt->bindParam(34, $this->usuario_id, PDO::PARAM_INT);

            $stmt->execute();

            $resultSet = $stmt;
        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al listar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH

        return $resultSet;
    }
    public function mdlCreateCategoria()
    {
        echo "<script>
        console.log('sa');
        </script>";
        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/
        $sql = "call SpCreateCategoria(?)";

        try {
            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);

            $stmt->bindParam(1, $this->nombreCategoria, PDO::PARAM_STR);

            $stmt->execute();

            $resultSet = $stmt;
        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al listar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH

        return $resultSet;
    }
    public function mdlCreateSubCategoria()
    {
        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/
        $sql = "call SpCreateSubCategoria(?, ?)";

        try {
            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);
            $stmt->bindParam(1, $this->nombreCategoria, PDO::PARAM_STR);
            $stmt->bindParam(2, $this->nombreSubCategoria, PDO::PARAM_STR);
            echo "<script>console.log( '" . $this->nombreSubCategoria . "' );</script>";

            $stmt->execute();

            $resultSet = $stmt;
        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al listar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH

        return $resultSet;
    }
    public function mdlEditarProducto()
    {
        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/
        $sql = "call SpUpdateProducto(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        try {

            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);

            $stmt->bindParam(1, $this->id_producto, PDO::PARAM_INT);
            $stmt->bindParam(2, $this->unidadMedida, PDO::PARAM_STR);
            $stmt->bindParam(3, $this->nombreProducto, PDO::PARAM_STR);
            $stmt->bindParam(4, $this->cantidad, PDO::PARAM_INT);
            $stmt->bindParam(5, $this->foto, PDO::PARAM_STR);
            $stmt->bindParam(6, $this->controlInventario, PDO::PARAM_BOOL);
            $stmt->bindParam(7, $this->paraConsumo, PDO::PARAM_BOOL);
            $stmt->bindParam(8, $this->paraVenta, PDO::PARAM_BOOL);
            $stmt->bindParam(9, $this->produccionInterna, PDO::PARAM_BOOL);
            $stmt->bindParam(10, $this->manejaLotes, PDO::PARAM_BOOL);
            $stmt->bindParam(11, $this->servicio, PDO::PARAM_BOOL);
            $stmt->bindParam(12, $this->conteoFisicas, PDO::PARAM_BOOL);
            $stmt->bindParam(13, $this->productoActivo, PDO::PARAM_BOOL);
            $stmt->bindParam(14, $this->datosFabricante, PDO::PARAM_STR);
            $stmt->bindParam(15, $this->refetencia, PDO::PARAM_STR);
            $stmt->bindParam(16, $this->medidas, PDO::PARAM_STR);
            $stmt->bindParam(17, $this->presentacion, PDO::PARAM_STR);
            $stmt->bindParam(18, $this->ubicacionFisica, PDO::PARAM_STR);
            $stmt->bindParam(19, $this->productoEquivalente, PDO::PARAM_STR);
            $stmt->bindParam(20, $this->unitarioPromedio, PDO::PARAM_INT);
            $stmt->bindParam(21, $this->totalPromedio, PDO::PARAM_INT);
            $stmt->bindParam(22, $this->stockMinimo, PDO::PARAM_INT);
            $stmt->bindParam(23, $this->stockMaximo, PDO::PARAM_INT);
            $stmt->bindParam(24, $this->tiempoReposicion, PDO::PARAM_STR);
            $stmt->bindParam(25, $this->cuentaInventario, PDO::PARAM_STR);
            $stmt->bindParam(26, $this->contableDeIngresos, PDO::PARAM_STR);
            $stmt->bindParam(27, $this->contableIngresoAjuste, PDO::PARAM_STR);
            $stmt->bindParam(28, $this->contableDevolucionVentas, PDO::PARAM_STR);
            $stmt->bindParam(29, $this->contableCostos, PDO::PARAM_STR);
            $stmt->bindParam(30, $this->devolucionCompras, PDO::PARAM_STR);
            $stmt->bindParam(31, $this->contableGastos, PDO::PARAM_STR);
            $stmt->bindParam(32, $this->contableGastosPorAjuste, PDO::PARAM_STR);
            $stmt->bindParam(33, $this->impuestoCompras, PDO::PARAM_STR);
            $stmt->bindParam(34, $this->impuestoVentas, PDO::PARAM_STR);
            $stmt->bindParam(35, $this->usuario_id, PDO::PARAM_INT);

            $stmt->execute();
            echo "<script>console.log( 'Debug Objects: " . $this->foto . "' );</script>";
        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al listar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH
    }
    public function mdlEditarCategoriaProducto()
    {
        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/
        $sql = "call SpInsertCategoria(?,?)";

        try {

            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);
            $stmt->bindParam(1, $this->nombreCategoria, PDO::PARAM_STR);
            $stmt->bindParam(2, $this->id_producto, PDO::PARAM_INT);
            $stmt->execute();
            echo "<script>console.log( 'Debug Objects: " . $this->foto . "' );</script>";
        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al listar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH
    }
    public function mdlEditarSubCategoriaProducto()
    {
        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/
        $sql = "call SpInsertSubCategoria(?,?)";

        try {

            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);
            $stmt->bindParam(1, $this->id_SubCategoria, PDO::PARAM_INT);
            $stmt->bindParam(2, $this->id_producto, PDO::PARAM_INT);
            $stmt->execute();
            echo "<script>console.log( 'Debug Objects: " . $this->id_SubCategoria . "' );</script>";
            echo "<script>console.log( 'Debug Objects: " . $this->id_producto . "' );</script>";
        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al listar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH
    }
    public function mdlListarProductos()
    {
        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/
        $sql = "call SpConsultProductos( );";

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
    public function mdlListarProducto()
    {
        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/
        $sql = "call SpConsultProducto(?);";

        try {

            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);
            $stmt->bindParam(1, $this->id_producto, PDO::PARAM_INT);

            $stmt->execute();

            $resultSet = $stmt;
        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al listar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH

        return $resultSet;
    }
    public function mdlListarCategorias()
    {
        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/
        $sql = "call SpConsultarTodasLasCategorias( );";

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
    public function mdlListarCategoriasProducto()
    {
        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/
        $sql = "call SpConsultCategorias(?);";

        try {

            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);
            $stmt->bindParam(1, $this->id_producto, PDO::PARAM_INT);

            $stmt->execute();

            $resultSet = $stmt;
        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al listar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH

        return $resultSet;
    }
    public function mdlListarSubCategorias()
    {
        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/
        $sql = "call SpConsultSubCategorias(?);";

        try {

            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);
            $stmt->bindParam(1, $this->id_categoria, PDO::PARAM_STR);

            $stmt->execute();

            $resultSet = $stmt;
        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al listar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH

        return $resultSet;
    }
    public function mdlListarSubCategoriasProducto()
    {
        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/
        $sql = "call SpConsultSubCategoriasProducto(?);";

        try {

            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);
            $stmt->bindParam(1, $this->id_producto, PDO::PARAM_INT);
            $stmt->execute();

            $resultSet = $stmt;
        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al listar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH

        return $resultSet;
    }
    public function mdlListarProductosProveedor()
    {
        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/
        $sql = "call SpConsultProductosProveedor(?);";

        try {

            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);
            $stmt->bindParam(1, $this->usuario_id, PDO::PARAM_INT);

            $stmt->execute();

            $resultSet = $stmt;
        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al listar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH

        return $resultSet;
    }
    public function mdlEliminarProducto()
    {

        /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/

        $sql = "call SpDeleteProducto( ? )";

        try {
            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);

            /*====================================================
                     SE INGRESA EL CODIGO QUE SE DESEA ELIMINAR
                ====================================================*/

            $stmt->bindParam(1, $this->id_producto,    PDO::PARAM_INT);

            $stmt->execute();
            $resultSet = $stmt;
            echo "<script>console.log( 'Debug Objects: " . $this->id_producto . "' );</script>";
        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al eliminar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH
        return $resultSet;
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
            $resultSet = $stmt;
            echo "<script>console.log( 'Debug Objects: " . $this->id_producto . "' );</script>";
        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al modificar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH
        return $resultSet;
    } // FIN DEL METODO MODIFICAR
    public function mdlProductoDisponibleEntrega()
    {
        $sql = 'call SpProductoDisponibleEntrega(?)';

        try {

            /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
            $conexion = new Conexion();
            $stmt = $conexion->conectar()->prepare($sql);

            /*====================================================
                            LOS VALORES QUE SE VAN A MODIFICAR
                ====================================================*/
            $stmt->bindParam(1, $this->id_producto,        PDO::PARAM_INT);

            $stmt->execute();
            $resultSet = $stmt;
            // echo "<script>console.log( 'Debug Objects: " . $this->id_producto . "' );</script>";
        } catch (Exception $e) {
            echo "Se ha presentado un error en la clase DAO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        } catch (PDOException $ex) {
            echo "Se ha presentado un error al modificar los datos " . $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
        } // FIN DEL TRY-CATCH
        return $resultSet;
    }
}
