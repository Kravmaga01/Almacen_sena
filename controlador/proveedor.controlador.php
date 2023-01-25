<?php
class ControladorProveedor
{

    /*====================================================
                    ATRIBUTOS DE LA CLASE PROVEEDOR
        ====================================================*/
    private $objDtoProveedor;
    private $estado = false;

    public function __construct()
    {
        try {

            $this->objDtoProveedor    =  new  Proveedor();
        } catch (Exception $e) {

            echo "Se ha presentado un error en la metodo constructor Proveedor " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
        }
    } //FIN DEL METODO CONSTRUCTOR
    public function ctrListarProveedores()
    {

        $objProveedorDao = new ProveedorDao($this->objDtoProveedor);

        $arrayProveedor = $objProveedorDao->mdlListarProveedores()->fetchAll();

        return $arrayProveedor;
    } //metodo

    public function ctrEliminarProveedor($codigoProveedor)
    {
        $this->objDtoUser->setCodigo($codigoProveedor);


        $objProveedorDao = new ProveedorDao($this->objDtoProveedor);

        $objProveedorDao->mdlEliminarProveedor();

        return true;
    } // FIN METODO ELIMINAR
    public function ctrModificarProveedor()
    {

        if ($_POST['txtModTipoPersona'] === "JURIDICA") {
            try {
                // echo '<script>alert("'.$_POST['txtModCodigoUser'].'");</script>';
                $this->objDtoProveedor->setId_proveedor($_POST['txtModCodigo']);
                $this->objDtoProveedor->setTipo_persona("JURIDICA");
                $this->objDtoProveedor->setNumero_documento(null);
                $this->objDtoProveedor->setNIT($_POST['txtModNIT']);
                $this->objDtoProveedor->setRUT(null);
                $this->objDtoProveedor->setNombre($_POST['txtModNombre']);
                $this->objDtoProveedor->setApellido(null);
                $this->objDtoProveedor->setRazon_social($_POST['txtModRazonSocial']);
                $this->objDtoProveedor->setCodigo_pais($_POST['txtModCodPais']);
                $this->objDtoProveedor->setNombre_pais($_POST['txtModNomPais']);
                $this->objDtoProveedor->setCodigo_departamento($_POST['txtModCodDep']);
                $this->objDtoProveedor->setNombre_departamento($_POST['txtModNomDep']);
                $this->objDtoProveedor->setCodigo_ciudad($_POST['txtModCodCiud']);
                $this->objDtoProveedor->setNombre_ciudad($_POST['txtModNomCiud']);
                $this->objDtoProveedor->setDireccion($_POST['txtModDir']);
                $this->objDtoProveedor->setTelefono($_POST['txtModTel']);
                $this->objDtoProveedor->setGmail($_POST['txtModGma']);
                $this->objDtoProveedor->setAutorizacion_Gmail($_POST['txtModAutGma']);
                $this->objDtoProveedor->setId_usuario($_POST['txtModCodigoUser']);


                $objProveedorDao = new ProveedorDao($this->objDtoProveedor);

                $objProveedorDao->mdlModificarProveedor();
                $this->estado = true;
            } catch (Exception $e) {

                echo "Se ha presentado un error en la metodo insertar PROVEEDOR " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
            }
        } elseif ($_POST['txtModTipoPersona'] === "NATURAL") {
            try {

                // echo '<script>alert("'.$_POST['txtModCodigoUser'].'");</script>';
                $this->objDtoProveedor->setId_proveedor($_POST['txtModCodigo']);
                $this->objDtoProveedor->setTipo_persona("NATURAL");
                $this->objDtoProveedor->setNumero_documento($_POST['txtModDocumento']);
                $this->objDtoProveedor->setNIT(null);
                $this->objDtoProveedor->setRUT($_POST['txtModRut']);
                $this->objDtoProveedor->setNombre($_POST['txtModNombre']);
                $this->objDtoProveedor->setApellido($_POST['txtModApellido']);
                $this->objDtoProveedor->setRazon_social(null);
                $this->objDtoProveedor->setCodigo_pais($_POST['txtModCodPais']);
                $this->objDtoProveedor->setNombre_pais($_POST['txtModNomPais']);
                $this->objDtoProveedor->setCodigo_departamento($_POST['txtModCodDep']);
                $this->objDtoProveedor->setNombre_departamento($_POST['txtModNomDep']);
                $this->objDtoProveedor->setCodigo_ciudad($_POST['txtModCodCiud']);
                $this->objDtoProveedor->setNombre_ciudad($_POST['txtModNomCiud']);
                $this->objDtoProveedor->setDireccion($_POST['txtModDir']);
                $this->objDtoProveedor->setTelefono($_POST['txtModTel']);
                $this->objDtoProveedor->setGmail($_POST['txtModGma']);
                $this->objDtoProveedor->setAutorizacion_Gmail($_POST['txtModAutGma']);
                $this->objDtoProveedor->setId_usuario($_POST['txtModCodigoUser']);

                $objProveedorDao = new ProveedorDao($this->objDtoProveedor);

                $objProveedorDao->mdlModificarProveedor();
                $this->estado = true;
            } catch (Exception $e) {

                echo "Se ha presentado un error en la metodo insertar PROVEEDOR " . $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
            }
        }


        return $this->estado;
    } // FIN DEL METODO MODIFICAR
}//clase
