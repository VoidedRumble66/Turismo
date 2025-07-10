<?php
session_start();
require_once '../php/config.php';
if(!isset($_SESSION['rol']) || $_SESSION['rol']!='admin'){
    header('Location: ../index.php');
    exit;
}
$lugares=$pdo->query('SELECT * FROM lugar')->fetchAll();
include '../php/head.php';
include '../php/menu.php';
?>
<div class="container mt-4">
<h2>Administrar Lugares</h2>
<a href="lugar_form.php" class="btn btn-success mb-3">Nuevo Lugar</a>
<table class="table table-striped">
<thead><tr><th>ID</th><th>Nombre</th><th>Opciones</th></tr></thead>
<tbody>
<?php foreach($lugares as $l): ?>
<tr>
<td><?php echo $l['id_lugar']; ?></td>
<td><?php echo htmlspecialchars($l['nombre']); ?></td>
<td>
 <a href="lugar_form.php?id=<?php echo $l['id_lugar']; ?>" class="btn btn-primary btn-sm">Editar</a>
 <a href="delete_lugar.php?id=<?php echo $l['id_lugar']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar?');">Borrar</a>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
<?php include '../php/footer.php'; ?>
