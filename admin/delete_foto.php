<?php
session_start();
require_once '../php/config.php';
if(!isset($_SESSION['rol']) || $_SESSION['rol']!='admin'){
    header('Location: ../index.php');
    exit;
}
$id = intval($_GET['id']);
$stm=$pdo->prepare('SELECT ruta_foto,id_lugar FROM lugar_foto WHERE id_foto=?');
$stm->execute([$id]);
$f=$stm->fetch();
if($f){
    // delete file
    $path = '../'.$f['ruta_foto'];
    if(file_exists($path)) unlink($path);
    $del=$pdo->prepare('DELETE FROM lugar_foto WHERE id_foto=?');
    $del->execute([$id]);
    header('Location: lugar_form.php?id='.$f['id_lugar']);
    exit;
}
header('Location: lugares.php');
