<?php

/*=====================================
        CARGAR TODOS LOS DTO
    ======================================*/
include_once 'modelo/dto/instructor.php';
include_once 'modelo/dto/usuario.php';
include_once 'modelo/dto/proveedor.php';
include_once 'modelo/dto/producto.php';
include_once 'modelo/dto/solicitudes.php';

/*=====================================
        CARGAR TODOS LOS MODELOS
    ======================================*/
include_once 'modelo/dao/usuariodao.php';
include_once 'modelo/dao/instructordao.php';
include_once 'modelo/dao/proveedordao.php';
include_once 'modelo/dao/productodao.php';
include_once 'modelo/dao/solicitudesdao.php';

/*=====================================
        CARGAR TODOS LOS CONTROLADORES
    ======================================*/
include_once 'controlador/usuario.controlador.php';
include_once 'controlador/instructor.controlador.php';
include_once 'controlador/proveedor.controlador.php';
include_once 'controlador/producto.controlador.php';
include_once 'controlador/solicitudes.controlador.php';

include_once 'controlador/plantilla.controlador.php';

/*=====================================
        CREAMOS UN OBJETO DE ARRANQUE
    ======================================*/
$objPlantilla = new PlantillaControlador();
$objPlantilla->ctrArranque();
