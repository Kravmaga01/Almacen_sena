<?php

class Proveedor
{
    /*====================================
                        ATRIBUTOS
        ====================================*/
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

    function setId_proveedor($id_proveedor)
    {
        $this->id_proveedor = $id_proveedor;
    }
    function getId_proveedor()
    {
        return $this->id_proveedor;
    }
    function setTipo_persona($Tipo_persona)
    {
        $this->Tipo_persona = $Tipo_persona;
    }
    function getTipo_persona()
    {
        return $this->Tipo_persona;
    }
    function setNumero_documento($Numero_documento)
    {
        $this->Numero_documento = $Numero_documento;
    }
    function getNumero_documento()
    {
        return $this->Numero_documento;
    }
    function setNIT($NIT)
    {
        $this->NIT = $NIT;
    }
    function getNIT()
    {
        return $this->NIT;
    }
    function getRUT()
    {
        return $this->RUT;
    }
    function setRUT($RUT)
    {
        $this->RUT = $RUT;
    }
    function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }
    function getNombre()
    {
        return $this->Nombre;
    }
    function setApellido($Apellido)
    {
        $this->Apellido = $Apellido;
    }
    function getApellido()
    {
        return $this->Apellido;
    }
    function setRazon_social($Razon_social)
    {
        $this->Razon_social = $Razon_social;
    }
    function getRazon_social()
    {
        return $this->Razon_social;
    }
    function setCodigo_pais($Codigo_pais)
    {
        $this->Codigo_pais = $Codigo_pais;
    }
    function getCodigo_pais()
    {
        return $this->Codigo_pais;
    }
    function setNombre_pais($Nombre_pais)
    {
        $this->Nombre_pais = $Nombre_pais;
    }
    function getNombre_pais()
    {
        return $this->Nombre_pais;
    }
    function setCodigo_departamento($Codigo_departamento)
    {
        $this->Codigo_departamento = $Codigo_departamento;
    }
    function getCodigo_departamento()
    {
        return $this->Codigo_departamento;
    }
    function setNombre_departamento($Nombre_departamento)
    {
        $this->Nombre_departamento = $Nombre_departamento;
    }
    function getNombre_departamento()
    {
        return $this->Nombre_departamento;
    }
    function setCodigo_ciudad($Codigo_ciudad)
    {
        $this->Codigo_ciudad = $Codigo_ciudad;
    }
    function getCodigo_ciudad()
    {
        return $this->Codigo_ciudad;
    }
    function setNombre_ciudad($Nombre_ciudad)
    {
        $this->Nombre_ciudad = $Nombre_ciudad;
    }
    function getNombre_ciudad()
    {
        return $this->Nombre_ciudad;
    }
    function setDireccion($Direccion)
    {
        $this->Direccion = $Direccion;
    }
    function getDireccion()
    {
        return $this->Direccion;
    }
    function setTelefono($Telefono)
    {
        $this->Telefono = $Telefono;
    }
    function getTelefono()
    {
        return $this->Telefono;
    }
    function setGmail($Gmail)
    {
        $this->Gmail = $Gmail;
    }
    function getGmail()
    {
        return $this->Gmail;
    }
    function setAutorizacion_Gmail($Autorizacion_Gmail)
    {
        $this->Autorizacion_Gmail = $Autorizacion_Gmail;
    }
    function getAutorizacion_Gmail()
    {
        return $this->Autorizacion_Gmail;
    }
    function setId_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }
    function getId_usuario()
    {
        return $this->id_usuario;
    }
}
