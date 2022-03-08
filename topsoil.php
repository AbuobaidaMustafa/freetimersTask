<?php
require_once 'model/Topsoil.php';

if($_GET['action']=='calculate'){
    $temp = $_POST;
    $topsoil = new Topsoil;
    $topsoil->setMeasureUnit($temp['measure_unit']);
    $topsoil->setDepthMeasureUnit($temp['depth_unit']);
    $topsoil->setDimensions($temp['width'],$temp['length'],$temp['depth']);
    $data= array(
        'dim' => $topsoil->getDimensions(),
        'bags' => $topsoil->calBagsNums(),
    );
    echo json_encode($data);
    exit();
}

