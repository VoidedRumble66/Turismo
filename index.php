<?php
include 'php/head.php';
include 'php/menu.php';
require_once 'php/config.php';
$lugares = $pdo->query("SELECT l.id_lugar, l.nombre, l.descripcion, f.ruta_foto FROM lugar l LEFT JOIN lugar_foto f ON l.id_lugar=f.id_lugar GROUP BY l.id_lugar")->fetchAll();
?>
<div id="principalCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php foreach($lugares as $i => $l): ?>
    <div class="carousel-item <?php echo $i===0?'active':''; ?>">
      <a href="detalle_lugar.php?id=<?php echo $l['id_lugar']; ?>">
        <img src="<?php echo $l['ruta_foto']; ?>" class="d-block w-100" alt="<?php echo htmlspecialchars($l['nombre']); ?>">
      </a>
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo htmlspecialchars($l['nombre']); ?></h5>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#principalCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#principalCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div class="container mt-5">
  <h2 class="text-center mb-4">Lugares Turísticos</h2>
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
