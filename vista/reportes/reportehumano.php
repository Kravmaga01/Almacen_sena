<?php
//============================================================+
// File name   : reportehumano.php
// Begin       : 2021-05-13
// Last Update : 2021-05-13
//
// Description : Muestra la informaciÓn de los 
//               Humanos
//
// Author: Instructor 
//
// (c) Copyright:
//               LUIS ALFONSO BECERRA RENTERIA
//               labecerra3@misena.edu.co
//============================================================+

/*============================================
        INCLUIR LA LIBRERIA DE TCPDF
=============================================*/
require_once('../plugins/tcpdf/tcpdf.php');

/*============================================
        CAMPOS A UTILIZAR
=============================================*/
date_default_timezone_set("America/Bogota");
$nom = $_GET['nombre'];
$hora = date('d/m/Y g:ia');

/*============================================
        CREA UNA HOJA DE TAMAÑO CARTA
=============================================*/
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

/*============================================
        PERMITA CREAR MULTIPLES HOJAS
=============================================*/

$pdf->startPageGroup();

/*============================================
            AGREGAR UNA HOJA NUEVA
=============================================*/

$pdf->AddPage();

/*============================================
    CREAR LA INFORMACIÓN DEL REPORTE
=============================================*/

$html = "
    <img src='../img/modelo.jpg'>
    <table border='1'>
        <tr>
            <td>NOMBRE</td>
            <td>" . $nom  . "</td>
        </tr>
        <tr>
            <td>APELLIDO</td>
            <td>PEREZ</td>
        </tr>
        <tr>
            <td>DIRECCION</td>
            <td>ITAGUI</td>
        </tr>
    </table>

    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore consectetur temporibus adipisci rerum iure labore ad deserunt vero ipsam assumenda itaque saepe minima suscipit, aut ducimus vel sint iusto, et nostrum. Nesciunt ad deserunt ut repellat fuga dolores id ipsum. Doloremque, porro. Esse, mollitia soluta porro obcaecati assumenda consectetur iure consequatur corrupti perferendis error et sapiente, facere nostrum maxime officia dicta eligendi aspernatur explicabo. Maiores similique fuga saepe eveniet tempore, nihil praesentium optio voluptas sequi hic, sint atque molestiae ex sit, eum debitis aperiam laudantium. Enim aut, itaque nemo ducimus ipsa voluptas deserunt ipsum quod quis doloremque quae cum? Numquam.
    <br>
    <br>
    " . $hora . "
";

/*============================================
    ESCRIBIENDO EN HTML
=============================================*/

$pdf->writeHTML($html, false, false, false, false, false, '');

/*============================================
            SALIDA DEL REPORTE
=============================================*/

$pdf->Output('reportehumano.php');
