<?php
include 'php/head.php';
include 'php/menu.php';

// Datos de ejemplo utilizados mientras la base de datos se llena
$lugares = [
    [
        'id_lugar'   => 1,
        'nombre'     => 'Cascadas de Agua Azul',
        'descripcion'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.',
        'ruta_foto'  => 'img/aguaazul.jpeg'
    ],
    [
        'id_lugar'   => 2,
        'nombre'     => 'Zona Arqueológica de Toniná',
        'descripcion'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.',
        'ruta_foto'  => 'img/tonina.jpeg'
    ],
    [
        'id_lugar'   => 3,
        'nombre'     => 'Lagunas de Montebello',
        'descripcion'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.',
        'ruta_foto'  => 'img/montebello.jpeg'
    ],
    [
        'id_lugar'   => 4,
        'nombre'     => 'Centro de Ocosingo',
        'descripcion'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.',
        'ruta_foto'  => 'img/ocosingo.jpg'
    ],
    [
        'id_lugar'   => 5,
        'nombre'     => 'Cascadas de Agua Azul II',
        'descripcion'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.',
        'ruta_foto'  => 'img/aguaazul2.jpeg'
    ]
];
?>
<div id="principalCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php foreach($lugares as $i => $l): ?>
    <div class="carousel-item <?php echo $i===0?'active':''; ?>">
      <a href="detalle_lugar.php?id=<?php echo $l['id_lugar']; ?>">
        <img src="<?php echo $l['ruta_foto']; ?>" class="d-block w-100" alt="<?php echo htmlspecialchars($l['nombre']); ?>">
      </a>
      <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
        <h5><?php echo htmlspecialchars($l['nombre']); ?></h5>
        <p class="mb-0 small"><?php echo htmlspecialchars($l['descripcion']); ?></p>
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
