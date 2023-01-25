<?php
class ControladorProducto
{

    /*====================================================
                    ATRIBUTOS DE LA CLASE PRODUCTO
        ====================================================*/
    private $objDtoProducto;
    private $estado = false;

    public function __construct()
    {
        try {

            $this->objDtoProducto    =  new  Producto();
        } catch (Exception $e) {

            echo "Se ha presentado un error en la metodo constructor Proveedor " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        }
    } //FIN DEL METODO CONSTRUCTOR
    public function ctrListarProductos()
    {
        $objProveedorDao = new ProductoDao($this->objDtoProducto);

        $arrayProveedor = $objProveedorDao->mdlListarProductos()->fetchAll();

        return $arrayProveedor;
    } //metodo 
    public function ctrListarProducto($var)
    {
        $this->objDtoProducto->setId_producto($var);

        $objProveedorDao = new ProductoDao($this->objDtoProducto);

        $arrayProveedor = $objProveedorDao->mdlListarProducto()->fetchAll();

        return $arrayProveedor;
    } //metodo 
    public function ctrListarCategorias()
    {
        $objProveedorDao = new ProductoDao($this->objDtoProducto);

        $arrayProveedor = $objProveedorDao->mdlListarCategorias()->fetchAll();

        return $arrayProveedor;
    } //metodo   
    public function ctrListarCategoriasProducto($var)
    {
        $this->objDtoProducto->setId_producto($var);
        $objProveedorDao = new ProductoDao($this->objDtoProducto);
        $arrayProveedor = $objProveedorDao->mdlListarCategoriasProducto()->fetchAll();

        return $arrayProveedor;
    } //metodo 
    public function ctrListarSubCategorias($var)
    {
        $this->objDtoProducto->setid_categoria($var);
        $objProveedorDao = new ProductoDao($this->objDtoProducto);
        $arrayProveedor = $objProveedorDao->mdlListarSubCategorias()->fetchAll();

        return $arrayProveedor;
    } //metodo
    public function ctrListarSubCategoriasProducto($var)
    {
        $this->objDtoProducto->setId_producto($var);
        $objProveedorDao = new ProductoDao($this->objDtoProducto);
        $arrayProveedor = $objProveedorDao->mdlListarSubCategoriasProducto()->fetchAll();

        return $arrayProveedor;
    } //metodo    
    public function ctrListarProductosProveedor()
    {
        $this->objDtoProducto->setUsuario_id($_SESSION["id_user"]);

        $objProveedorDao = new ProductoDao($this->objDtoProducto);
        $arrayProveedor = $objProveedorDao->mdlListarProductosProveedor()->fetchAll();

        return $arrayProveedor;
    } //metodo   
    public function crtInsertarProducto($var)
    {
        try {
            $this->objDtoProducto->setUnidadMedida($_POST['txtInsertUnidadMedida']);
            $this->objDtoProducto->setNombreProducto($_POST['txtInsertNombreProducto']);
            $this->objDtoProducto->setCantidad($_POST['txtInsertCantidad']);
            $this->objDtoProducto->setFoto($var);
            $this->objDtoProducto->setControlInventario(isset($_POST['txtInsertControlInventario']));
            $this->objDtoProducto->setParaConsumo(isset($_POST['txtInsertParaConsumo']));
            $this->objDtoProducto->setParaVenta(isset($_POST['txtInsertParaVenta']));
            $this->objDtoProducto->setProduccionInterna(isset($_POST['txtInsertProduccionInterna']));
            $this->objDtoProducto->setManejaLotes(isset($_POST['txtInsertManejaLotes']));
            $this->objDtoProducto->setServicio(isset($_POST['txtInsertServicio']));
            $this->objDtoProducto->setConteoFisicas(isset($_POST['txtInsertConteoFisicas']));
            $this->objDtoProducto->setProductoActivo(isset($_POST['txtInsertProductoActivo']));
            $this->objDtoProducto->setDatosFabricante($_POST['txtInsertDatosFabricante']);
            $this->objDtoProducto->setRefetencia($_POST['txtInsertRefetencia']);
            $this->objDtoProducto->setMedidas($_POST['txtInsertMedidas']);
            $this->objDtoProducto->setPresentacion($_POST['txtInsertPresentacion']);
            $this->objDtoProducto->setUbicacionFisica($_POST['txtInsertUbicacionFisica']);
            $this->objDtoProducto->setProductoEquivalente($_POST['txtInsertProductoEquivalente']);
            $this->objDtoProducto->setUnitarioPromedio($_POST['txtInsertUnitarioPromedio']);
            $this->objDtoProducto->setTotalPromedio($_POST['txtInsertTotalPromedio']);
            $this->objDtoProducto->setStockMinimo($_POST['txtInsertStockMinimo']);
            $this->objDtoProducto->setStockMaximo($_POST['txtInsertStockMaximo']);
            $this->objDtoProducto->setTiempoReposicion($_POST['txtInsertTiempoReposicion']);
            $this->objDtoProducto->setCuentaInventario($_POST['txtInsertCantidad']);
            $this->objDtoProducto->setContableDeIngresos($_POST['txtInsertContableDeIngresos']);
            $this->objDtoProducto->setContableIngresoAjuste($_POST['txtInsertContableIngresoAjuste']);
            $this->objDtoProducto->setContableDevolucionVentas($_POST['txtInsertContableDevolucionVentas']);
            $this->objDtoProducto->setContableCostos($_POST['txtInsertContableCostos']);
            $this->objDtoProducto->setDevolucionCompras($_POST['txtInsertDevolucionCompras']);
            $this->objDtoProducto->setContableGastos($_POST['txtInsertContableGastos']);
            $this->objDtoProducto->setContableGastosPorAjuste($_POST['txtInsertContableGastosPorAjuste']);
            $this->objDtoProducto->setImpuestoCompras($_POST['txtInsertImpuestoCompras']);
            $this->objDtoProducto->setImpuestoVentas($_POST['txtInsertImpuestoVentas']);
            $this->objDtoProducto->setUsuario_id($_POST['txtInsertUsuario_id']);
            //echo "<script>console.log( 'Debug Objects: " . $_POST['txtUsuario'] . "' );</script>";

            $objProductoDao = new ProductoDao($this->objDtoProducto);

            $objProductoDao->mdlInsertarProducto();

            $this->estado = true;
        } catch (Exception $e) {

            echo "Se ha presentado un error en la metodo insertar PRODUCTO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        }
        return true;
    }
    public function crtCreateCategoria()
    {

        try {

            $this->objDtoProducto->setnombreCategoria($_POST['txtCategoria']);

            $objProductoDao = new ProductoDao($this->objDtoProducto);

            $objProductoDao->mdlCreateCategoria();

            $this->estado = true;
        } catch (Exception $e) {

            echo "Se ha presentado un error en la metodo insertar PRODUCTO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        }
        return true;
    }
    public function crtCreateSubCategoria()
    {

        try {

            $this->objDtoProducto->setnombreCategoria($_POST['txtCategorias']);

            $this->objDtoProducto->setnombreSubCategoria($_POST['txtCategoria']);

            $objProductoDao = new ProductoDao($this->objDtoProducto);

            $objProductoDao->mdlCreateSubCategoria();

            $this->estado = true;
        } catch (Exception $e) {

            echo "Se ha presentado un error en la metodo insertar PRODUCTO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        }
        return true;
    }
    public function crtEditarProducto($var)
    {

        try {
            $this->objDtoProducto->setId_producto($_POST['txtModId']);
            $this->objDtoProducto->setUnidadMedida($_POST['txtModUnidadMedida']);
            $this->objDtoProducto->setNombreProducto($_POST['txtModNombreProducto']);
            $this->objDtoProducto->setCantidad($_POST['txtModCantidad']);
            $this->objDtoProducto->setFoto($var);
            $this->objDtoProducto->setControlInventario(isset($_POST['txtModControlInventario']));
            $this->objDtoProducto->setParaConsumo(isset($_POST['txtModParaConsumo']));
            $this->objDtoProducto->setParaVenta(isset($_POST['txtModParaVenta']));
            $this->objDtoProducto->setProduccionInterna(isset($_POST['txtModProduccionInterna']));
            $this->objDtoProducto->setManejaLotes(isset($_POST['txtModManejaLotes']));
            $this->objDtoProducto->setServicio(isset($_POST['txtModServicio']));
            $this->objDtoProducto->setConteoFisicas(isset($_POST['txtModConteoFisicas']));
            $this->objDtoProducto->setProductoActivo(isset($_POST['txtModProductoActivo']));
            $this->objDtoProducto->setDatosFabricante($_POST['txtModDatosFabricante']);
            $this->objDtoProducto->setRefetencia($_POST['txtModRefetencia']);
            $this->objDtoProducto->setMedidas($_POST['txtModMedidas']);
            $this->objDtoProducto->setPresentacion($_POST['txtModPresentacion']);
            $this->objDtoProducto->setUbicacionFisica($_POST['txtModUbicacionFisica']);
            $this->objDtoProducto->setProductoEquivalente($_POST['txtModProductoEquivalente']);
            $this->objDtoProducto->setUnitarioPromedio($_POST['txtModUnitarioPromedio']);
            $this->objDtoProducto->setTotalPromedio($_POST['txtModTotalPromedio']);
            $this->objDtoProducto->setStockMinimo($_POST['txtModStockMinimo']);
            $this->objDtoProducto->setStockMaximo($_POST['txtModStockMaximo']);
            $this->objDtoProducto->setTiempoReposicion($_POST['txtModTiempoReposicion']);
            $this->objDtoProducto->setCuentaInventario($_POST['txtModCuentaInventario']);
            $this->objDtoProducto->setContableDeIngresos($_POST['txtModContableDeIngresos']);
            $this->objDtoProducto->setContableIngresoAjuste($_POST['txtModContableIngresoAjuste']);
            $this->objDtoProducto->setContableDevolucionVentas($_POST['txtModContableDevolucionVentas']);
            $this->objDtoProducto->setContableCostos($_POST['txtModContableCostos']);
            $this->objDtoProducto->setDevolucionCompras($_POST['txtModDevolucionCompras']);
            $this->objDtoProducto->setContableGastos($_POST['txtModContableGastos']);
            $this->objDtoProducto->setContableGastosPorAjuste($_POST['txtModContableGastosPorAjuste']);
            $this->objDtoProducto->setImpuestoCompras($_POST['txtModImpuestoCompras']);
            $this->objDtoProducto->setImpuestoVentas($_POST['txtModImpuestoVentas']);
            $this->objDtoProducto->setUsuario_id($_POST['txtModUsuario_id']);

            $objProductoDao = new ProductoDao($this->objDtoProducto);


            $objProductoDao->mdlEditarProducto();
            $this->estado = true;
        } catch (Exception $e) {

            echo "Se ha presentado un error en la metodo insertar PRODUCTO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        }
        return $this->estado;
    }
    public function crtEditarCategoriaProducto()
    {

        try {

            $this->objDtoProducto->setId_producto($_GET['txtIdProducto']);
            $this->objDtoProducto->setnombreCategoria($_GET['clase']);

            $objProductoDao = new ProductoDao($this->objDtoProducto);


            $objProductoDao->mdlEditarCategoriaProducto();
            $this->estado = true;
        } catch (Exception $e) {

            echo "Se ha presentado un error en la metodo insertar PRODUCTO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        }
        return $this->estado;
    }
    public function crtEditarSubCategoriaProducto()
    {
        try {
            $this->objDtoProducto->setId_producto($_GET['txtIdProducto']);
            $this->objDtoProducto->setIdSubCategoria($_GET['subclase']);

            $objProductoDao = new ProductoDao($this->objDtoProducto);


            $objProductoDao->mdlEditarSubCategoriaProducto();
            $this->estado = true;
        } catch (Exception $e) {

            echo "Se ha presentado un error en la metodo insertar PRODUCTO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        }
        return $this->estado;
    }
    public function crtProductoDisponibleEntrega($var)
    {
        $this->objDtoProducto->setId_producto($var);

        try {

            $objProveedorDao = new ProductoDao($this->objDtoProducto);
            $arrayProveedor = $objProveedorDao->mdlProductoDisponibleEntrega()->fetch();
        } catch (Exception $e) {

            echo "Se ha presentado un error en la metodo insertar PRODUCTO " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        }
        // echo "<script>console.log( 'Debug Objects: " . $var . "' );</script>";

        return $arrayProveedor;
    }

    public function ctrValidarImagen()
    {
        if ($_FILES['txtInsertImg']['name']) {
            $directorio     =   'vista/img/up/';
            $archivo        =   $directorio . basename($_FILES['txtInsertImg']['name']);
            $tipoArchivo    =   strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

            $size_if        =   getimagesize($_FILES['txtInsertImg']['tmp_name']);

            if ($size_if != false) {
                $size       = $_FILES["txtInsertImg"]['size'];
                if ($size   > 600000000) {
                    echo "El documento tiene que ser menor a 600MB";
                    return 3;
                } else {
                    date_default_timezone_set("America/Bogota");
                    $name = date("d-m-Y-h-i-s-u") . "-SENA-PRODUCTO";
                    return $name;
                }
                // elseif (move_uploaded_file($_FILES['txtInsertImg']['tmp_name'], $archivo)) {
                //     date_default_timezone_set("America/Bogota");
                //     $name = date("d-m-Y-h-i-s-u") . "-" . $_FILES['txtInsertImg']['name'];
                //     echo $name;
                //     return $name;
                // } else {
                //     echo " error";
                // }
            } else {
                return 2;
            }
        }
        return 1;
    }
    public function MoveImage()
    {

        if ($_FILES['txtInsertImg']['name']) {
            $directorio     =   'vista/img/up/';
            date_default_timezone_set("America/Bogota");
            $name = date("d-m-Y-h-i-s-u") . "." . strtolower(pathinfo($directorio . basename($_FILES['txtInsertImg']['name']), PATHINFO_EXTENSION));
            $_FILES['txtInsertImg']['name'] = $name;
            $archivo        =   $directorio . basename($_FILES['txtInsertImg']['name']);
            $tipoArchivo    =   strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
            $size_if        =   getimagesize($_FILES['txtInsertImg']['tmp_name']);
            echo "<script>console.log( 'Debug Objects: " . $tipoArchivo . "' );</script>";
            if (move_uploaded_file($_FILES['txtInsertImg']['tmp_name'], $archivo)) {
                return $name;
            } else {
                echo " error";
                return false;
            }
            return false;
        }


        return false;
    }
    public function ctrEliminarProducto($codigoProducto)
    {
        $this->objDtoProducto->setId_producto($codigoProducto);
        $objProductoDao = new ProductoDao($this->objDtoProducto);

        $objProductoDao->mdlEliminarProducto();

        return true;
    } // FIN METODO ELIMINAR

}//clase
