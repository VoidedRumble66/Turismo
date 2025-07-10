<?php
require_once 'php/config.php';
include 'php/head.php';
include 'php/menu.php';

// Ejemplo: consulta lugares para el carrusel y las tarjetas (puedes adaptar para mostrar destacados)
$stmt = $pdo->query("SELECT l.id_lugar, l.nombre, l.descripcion, MIN(f.ruta_foto) AS ruta_foto
                     FROM lugar l
                     LEFT JOIN lugar_foto f ON l.id_lugar=f.id_lugar
                     WHERE l.activo=1
                     GROUP BY l.id_lugar
                     ORDER BY l.id_lugar DESC
                     LIMIT 6");
$lugares = $stmt->fetchAll();

// Lugares por defecto si no hay aún en BD
if(empty($lugares)){
    $lugares = [
        [
            'id_lugar'   => 1,
            'nombre'     => 'Zona Arqueológica de Toniná',
            'descripcion'=> 'La pirámide más alta de Mesoamérica y un sitio maya fascinante.',
            'ruta_foto'  => 'img/lugares/tonina.jpeg'
        ],
        [
            'id_lugar'   => 2,
            'nombre'     => 'Laguna Miramar',
            'descripcion'=> 'Aguas cristalinas rodeadas de selva virgen en Montes Azules.',
            'ruta_foto'  => 'img/lugares/montebello.jpeg'
        ],
        [
            'id_lugar'   => 3,
            'nombre'     => 'Cascadas Las Lajas',
            'descripcion'=> 'Balneario natural de aguas turquesa y cascadas cerca del pueblo.',
            'ruta_foto'  => 'img/lugares/aguaazul.jpeg'
        ],
        [
            'id_lugar'   => 4,
            'nombre'     => 'Ruta del Queso Bola',
            'descripcion'=> 'Descubre la tradición quesera única de Ocosingo en ranchos locales.',
            'ruta_foto'  => 'img/lugares/ocosingo.jpg'
        ],
        [
            'id_lugar'   => 5,
            'nombre'     => 'Reserva Metzabok',
            'descripcion'=> 'Lagunas y selva mística custodiadas por la comunidad lacandona.',
            'ruta_foto'  => 'img/lugares/ocosingo2.jpg'
        ],
        [
            'id_lugar'   => 6,
            'nombre'     => 'Museo Comunitario',
            'descripcion'=> 'Historia viva y cultura maya ch’ol a orillas del Usumacinta.',
            'ruta_foto'  => 'img/lugares/ocosingo3.jpeg'
        ]
    ];
}
?>

<!-- HERO / Carrusel principal -->
<div class="hero-carousel-container position-relative">
  <div id="principalCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <?php foreach(array_slice($lugares,0,3) as $i => $l): ?>
      <div class="carousel-item <?php echo $i===0?'active':''; ?>">
        <img src="<?php echo htmlspecialchars($l['ruta_foto']); ?>" class="d-block w-100 hero-img" alt="<?php echo htmlspecialchars($l['nombre']); ?>">
        <div class="carousel-caption d-none d-md-block hero-caption bg-dark bg-opacity-50 rounded p-3">
          <h2 class="fw-bold">Ocosingo: Aventura Maya en la Selva</h2>
          <p class="mb-2"><?php echo htmlspecialchars($l['nombre']); ?> – <?php echo htmlspecialchars($l['descripcion']); ?></p>
          <a href="lugares.php" class="btn btn-primary m-2">Explora Atracciones</a>
          <a href="#mapa" class="btn btn-success m-2">Ver Mapa</a>
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
</div>

<!-- Bienvenida -->
<section class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-10 text-center">
      <h1 class="fw-bold mb-3" style="color:#138a90;">¡Bienvenido a Ocosingo!</h1>
      <p class="lead" style="color:#20567b;">
        Barrio Mágico de Chiapas, cuna de la cultura maya y puerta a la selva lacandona.<br>
        Descubre zonas arqueológicas únicas, naturaleza inigualable, rutas culturales y la hospitalidad de nuestra gente.
      </p>
    </div>
  </div>
</section>

<!-- Atracciones Destacadas -->
<section class="container my-5">
  <h2 class="text-center mb-4 fw-bold" style="color:#20567b;">Atracciones Destacadas</h2>
  <div class="row">
    <?php foreach($lugares as $l): ?>
    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow-sm border-0">
        <img src="<?php echo htmlspecialchars($l['ruta_foto']); ?>" class="card-img-top" style="height:200px;object-fit:cover;" alt="<?php echo htmlspecialchars($l['nombre']); ?>">
        <div class="card-body">
          <span class="badge rounded-pill bg-success mb-2">Imperdible</span>
          <h5 class="card-title fw-bold" style="color:#138a90;"><?php echo htmlspecialchars($l['nombre']); ?></h5>
          <p class="card-text"><?php echo htmlspecialchars($l['descripcion']); ?></p>
          <a href="detalle_lugar.php?id=<?php echo $l['id_lugar']; ?>" class="btn btn-outline-primary">Ver más</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- Planifica tu viaje / Rutas -->
<section class="container-fluid my-5 py-5" style="background: linear-gradient(90deg,#138a90,#67c7eb);">
  <div class="row justify-content-center">
    <div class="col-md-8 text-center text-white">
      <h2 class="fw-bold mb-3">Planifica tu viaje</h2>
      <p class="lead mb-4">Recorre la Ruta del Queso Bola y descubre sabores auténticos en ranchos locales. Explora rutas arqueológicas y de naturaleza, vive experiencias únicas.</p>
      <a href="lugares.php?ruta=queso-bola" class="btn btn-light btn-lg mx-2 my-1">Descubre la Ruta Queso Bola</a>
      <a href="lugares.php?ruta=arqueologia" class="btn btn-outline-light btn-lg mx-2 my-1">Ruta Maya</a>
    </div>
  </div>
</section>

<!-- Galería rápida -->
<section class="container my-5">
  <h2 class="text-center mb-4" style="color:#20567b;">Galería de Ocosingo</h2>
  <div class="row g-2">
    <?php foreach(array_slice($lugares,0,6) as $l): ?>
      <div class="col-6 col-md-2">
        <a href="<?php echo htmlspecialchars($l['ruta_foto']); ?>" target="_blank">
          <img src="<?php echo htmlspecialchars($l['ruta_foto']); ?>" class="img-fluid rounded shadow-sm" alt="Foto de <?php echo htmlspecialchars($l['nombre']); ?>">
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- Mapa -->
<section id="mapa" class="container-fluid my-5 py-5" style="background-color:#c6f4d6;">
  <h2 class="text-center mb-4 fw-bold" style="color:#20567b;">Mapa Turístico de Ocosingo</h2>
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div style="width:100%;height:350px;border-radius:18px;overflow:hidden;">
        <!-- Puedes personalizar este iframe o poner un mapa interactivo con JS -->
        <iframe src="https://www.google.com/maps/d/embed?mid=1DwH0ogT1dpKZbK3Z8VQ3MLf7z1qLJ0c&hl=es" width="100%" height="100%" style="border:0;" allowfullscreen loading="lazy"></iframe>
      </div>
    </div>
  </div>
</section>

<!-- CTA Contacto y Conocenos -->
<section class="container text-center my-5">
  <a href="contacto.php" class="btn btn-primary btn-big me-3">Contáctanos</a>
  <a href="quienes_somos.php" class="btn btn-outline-success btn-big">Conócenos</a>
</section>

<?php include 'php/footer.php'; ?>
