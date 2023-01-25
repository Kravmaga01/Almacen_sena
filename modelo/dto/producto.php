<?php

class Producto
{
    /*====================================
                        ATRIBUTOS
        ====================================*/
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
    private $id_SubCategoria;
    private $nombreSubCategoria;

    function setId_producto($id_producto)
    {
        $this->id_producto = $id_producto;
    }
    function getId_producto()
    {
        return $this->id_producto;
    }
    function setUnidadMedida($unidadMedida)
    {
        $this->unidadMedida = $unidadMedida;
    }
    function getUnidadMedida()
    {
        return $this->unidadMedida;
    }
    function setNombreProducto($nombreProducto)
    {
        $this->nombreProducto = $nombreProducto;
    }
    function getNombreProducto()
    {
        return $this->nombreProducto;
    }
    function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }
    function getCantidad()
    {
        return $this->cantidad;
    }
    function setFoto($foto)
    {
        $this->foto = $foto;
    }
    function getFoto()
    {
        return $this->foto;
    }
    function setControlInventario($controlInventario)
    {
        $this->controlInventario = $controlInventario;
    }
    function getControlInventario()
    {
        return $this->controlInventario;
    }
    function setParaConsumo($paraConsumo)
    {
        $this->paraConsumo = $paraConsumo;
    }
    function getParaConsumo()
    {
        return $this->paraConsumo;
    }
    function setParaVenta($paraVenta)
    {
        $this->paraVenta = $paraVenta;
    }
    function getParaVenta()
    {
        return $this->paraVenta;
    }
    function setProduccionInterna($produccionInterna)
    {
        $this->produccionInterna = $produccionInterna;
    }
    function getProduccionInterna()
    {
        return $this->produccionInterna;
    }
    function setManejaLotes($manejaLotes)
    {
        $this->manejaLotes = $manejaLotes;
    }
    function getManejaLotes()
    {
        return $this->manejaLotes;
    }
    function setServicio($servicio)
    {
        $this->servicio = $servicio;
    }
    function getServicio()
    {
        return $this->servicio;
    }
    function setConteoFisicas($conteoFisicas)
    {
        $this->conteoFisicas = $conteoFisicas;
    }
    function getConteoFisicas()
    {
        return $this->conteoFisicas;
    }
    function setProductoActivo($productoActivo)
    {
        $this->productoActivo = $productoActivo;
    }
    function getProductoActivo()
    {
        return $this->productoActivo;
    }
    function setDatosFabricante($datosFabricante)
    {
        $this->datosFabricante = $datosFabricante;
    }
    function getDatosFabricante()
    {
        return $this->datosFabricante;
    }
    function setRefetencia($refetencia)
    {
        $this->refetencia = $refetencia;
    }
    function getRefetencia()
    {
        return $this->refetencia;
    }
    function setMedidas($medidas)
    {
        $this->medidas = $medidas;
    }
    function getMedidas()
    {
        return $this->medidas;
    }
    function setPresentacion($presentacion)
    {
        $this->presentacion = $presentacion;
    }
    function getPresentacion()
    {
        return $this->presentacion;
    }
    function setUbicacionFisica($ubicacionFisica)
    {
        $this->ubicacionFisica = $ubicacionFisica;
    }
    function getUbicacionFisica()
    {
        return $this->ubicacionFisica;
    }
    function setProductoEquivalente($productoEquivalente)
    {
        $this->productoEquivalente = $productoEquivalente;
    }
    function getProductoEquivalente()
    {
        return $this->productoEquivalente;
    }
    function setUnitarioPromedio($unitarioPromedio)
    {
        $this->unitarioPromedio = $unitarioPromedio;
    }
    function getUnitarioPromedio()
    {
        return $this->unitarioPromedio;
    }
    function setTotalPromedio($totalPromedio)
    {
        $this->totalPromedio = $totalPromedio;
    }
    function getTotalPromedio()
    {
        return $this->totalPromedio;
    }
    function setStockMinimo($stockMinimo)
    {
        $this->stockMinimo = $stockMinimo;
    }
    function getStockMinimo()
    {
        return $this->stockMinimo;
    }
    function setStockMaximo($stockMaximo)
    {
        $this->stockMaximo = $stockMaximo;
    }
    function getStockMaximo()
    {
        return $this->stockMaximo;
    }
    function setTiempoReposicion($tiempoReposicion)
    {
        $this->tiempoReposicion = $tiempoReposicion;
    }
    function getTiempoReposicion()
    {
        return $this->tiempoReposicion;
    }
    function setCuentaInventario($cuentaInventario)
    {
        $this->cuentaInventario = $cuentaInventario;
    }
    function getCuentaInventario()
    {
        return $this->cuentaInventario;
    }
    function setContableDeIngresos($contableDeIngresos)
    {
        $this->contableDeIngresos = $contableDeIngresos;
    }
    function getContableDeIngresos()
    {
        return $this->contableDeIngresos;
    }
    function setContableIngresoAjuste($contableIngresoAjuste)
    {
        $this->contableIngresoAjuste = $contableIngresoAjuste;
    }
    function getContableIngresoAjuste()
    {
        return $this->contableIngresoAjuste;
    }
    function setContableDevolucionVentas($contableDevolucionVentas)
    {
        $this->contableDevolucionVentas = $contableDevolucionVentas;
    }
    function getContableDevolucionVentas()
    {
        return $this->contableDevolucionVentas;
    }
    function setContableCostos($contableCostos)
    {
        $this->contableCostos = $contableCostos;
    }
    function getContableCostos()
    {
        return $this->contableCostos;
    }
    function setDevolucionCompras($devolucionCompras)
    {
        $this->devolucionCompras = $devolucionCompras;
    }
    function getDevolucionCompras()
    {
        return $this->devolucionCompras;
    }
    function setContableGastos($contableGastos)
    {
        $this->contableGastos = $contableGastos;
    }
    function getContableGastos()
    {
        return $this->contableGastos;
    }
    function setContableGastosPorAjuste($contableGastosPorAjuste)
    {
        $this->contableGastosPorAjuste = $contableGastosPorAjuste;
    }
    function getContableGastosPorAjuste()
    {
        return $this->contableGastosPorAjuste;
    }
    function setImpuestoCompras($impuestoCompras)
    {
        $this->impuestoCompras = $impuestoCompras;
    }
    function getImpuestoCompras()
    {
        return $this->impuestoCompras;
    }
    function setImpuestoVentas($impuestoVentas)
    {
        $this->impuestoVentas = $impuestoVentas;
    }
    function getImpuestoVentas()
    {
        return $this->impuestoVentas;
    }
    function setUsuario_id($usuario_id)
    {
        $this->usuario_id = $usuario_id;
    }
    function getUsuario_id()
    {
        return $this->usuario_id;
    }
    function setid_categoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;
    }
    function getid_categoria()
    {
        return $this->id_categoria;
    }
    function setnombreCategoria($nombreCategoria)
    {

        $this->nombreCategoria = $nombreCategoria;
    }
    function getnombreCategoria()
    {

        return $this->nombreCategoria;
    }
    function setnombreSubCategoria($nombreSubCategoria)
    {

        $this->nombreSubCategoria = $nombreSubCategoria;
    }
    function getnombreSubCategoria()
    {
        return $this->nombreSubCategoria;
    }
    function setIdSubCategoria($id_SubCategoria)
    {
        $this->id_SubCategoria = $id_SubCategoria;
    }
    function getIdSubCategoria()
    {
        return $this->id_SubCategoria;
    }
}
