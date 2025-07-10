<?php
require_once 'php/config.php';
include 'php/head.php';
include 'php/menu.php';
$lugares=$pdo->query('SELECT l.id_lugar,l.nombre,l.descripcion,f.ruta_foto FROM lugar l LEFT JOIN lugar_foto f ON l.id_lugar=f.id_lugar GROUP BY l.id_lugar')->fetchAll();
?>
<div class="container mt-5">
<h2 class="mb-4">Lugares Turísticos</h2>
<div class="row">
<?php foreach($lugares as $l): ?>
 <div class="col-md-4 mb-4">
  <div class="card h-100">
   <img src="<?php echo $l['ruta_foto']; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($l['nombre']); ?>">
   <div class="card-body">
    <h5 class="card-title"><?php echo htmlspecialchars($l['nombre']); ?></h5>
    <p class="card-text"><?php echo substr($l['descripcion'],0,100).'...'; ?></p>
    <a href="detalle_lugar.php?id=<?php echo $l['id_lugar']; ?>" class="btn btn-primary">Ver más</a>
   </div>
  </div>
 </div>
<?php endforeach; ?>
</div>
</div>
<?php include 'php/footer.php'; ?>
