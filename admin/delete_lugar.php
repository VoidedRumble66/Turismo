<?php
session_start();
require_once '../php/config.php';
if(!isset($_SESSION['rol']) || $_SESSION['rol']!='admin'){
    header('Location: ../index.php');
    exit;
}
$id=intval($_GET['id']);
$stm=$pdo->prepare('DELETE FROM lugar WHERE id_lugar=?');
$stm->execute([$id]);
header('Location: lugares.php');
