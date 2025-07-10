<?php
session_start();
require_once '../php/config.php';
if(!isset($_SESSION['rol']) || $_SESSION['rol']!='admin'){
    header('Location: ../index.php');
    exit;
}
$id=intval($_GET['id']);
$fotos=$pdo->prepare('SELECT ruta_foto FROM lugar_foto WHERE id_lugar=?');
$fotos->execute([$id]);
foreach($fotos->fetchAll() as $f){
    $path = '../'.$f['ruta_foto'];
    if(file_exists($path)) unlink($path);
}

$stm=$pdo->prepare('DELETE FROM lugar WHERE id_lugar=?');
$stm->execute([$id]);
header('Location: lugares.php');
