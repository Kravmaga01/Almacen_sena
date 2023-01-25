<?php

class Usuario
{
    /*====================================
                        ATRIBUTOS
        ====================================*/
    private $codigo;
    private $usuario;
    private $clave;
    private $rol;

    function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    function getCodigo()
    {
        return $this->codigo;
    }
    function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }
    function getUsuario()
    {
        return $this->usuario;
    }
    function setClave($clave)
    {
        $this->clave = $clave;
    }
    function getClave()
    {
        return $this->clave;
    }
    function setRol($rol)
    {
        $this->rol = $rol;
    }
    function getRol()
    {
        return $this->rol;
    }
}
