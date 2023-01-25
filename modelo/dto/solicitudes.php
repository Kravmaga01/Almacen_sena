<?php
class Solicitudes
{

    private $Id;
    private $Producto;
    private $Cantidad;
    private $Id_user;
    private $Estado;

    function setId($Id)
    {
        $this->Id = $Id;
    }
    function getId()
    {
        return $this->Id;
    }
    function setProducto($Producto)
    {
        $this->Producto = $Producto;
    }
    function getProducto()
    {
        return $this->Producto;
    }
    function setCantidad($Cantidad)
    {
        $this->Cantidad = $Cantidad;
    }
    function getCantidad()
    {
        return $this->Cantidad;
    }
    function setId_user($Id_user)
    {
        $this->Id_user = $Id_user;
    }
    function getId_user()
    {
        return $this->Id_user;
    }
    function setEstado($Estado)
    {
        $this->Estado = $Estado;
    }
    function getEstado()
    {
        return $this->Estado;
    }
}
