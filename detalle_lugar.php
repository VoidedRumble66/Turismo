<?php
session_start();
require_once 'php/config.php';
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_SESSION['id_usuario'])){
    $texto=trim($_POST['comentario']);
    if($texto!=''){
        $stm=$pdo->prepare('INSERT INTO comentario(id_usuario,id_lugar,comentario) VALUES (?,?,?)');
        $stm->execute([$_SESSION['id_usuario'],$id,$texto]);
        header('Location: detalle_lugar.php?id='.$id);
        exit;
    }
}
$stm=$pdo->prepare('SELECT * FROM lugar WHERE id_lugar=?');
$stm->execute([$id]);
$lugar=$stm->fetch();
if(!$lugar){
    die('Lugar no encontrado');
}
$fotos=$pdo->prepare('SELECT ruta_foto,descripcion FROM lugar_foto WHERE id_lugar=?');
$fotos->execute([$id]);
$fotos=$fotos->fetchAll();
$com=$pdo->prepare('SELECT c.comentario,c.fecha,u.nombre FROM comentario c JOIN usuario u ON c.id_usuario=u.id_usuario WHERE id_lugar=? ORDER BY c.fecha DESC');
$com->execute([$id]);
$comentarios=$com->fetchAll();
include 'php/head.php';
include 'php/menu.php';
?>
<div class="container mt-4">
<h2 class="mb-3"><?php echo htmlspecialchars($lugar['nombre']); ?></h2>
<?php if($fotos): ?>
<div id="galeria" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php foreach($fotos as $i=>$f): ?>
    <div class="carousel-item <?php echo $i===0?'active':''; ?>">
      <img src="<?php echo $f['ruta_foto']; ?>" class="d-block w-100">
      <?php if($f['descripcion']): ?><div class="carousel-caption d-none d-md-block"><p><?php echo htmlspecialchars($f['descripcion']); ?></p></div><?php endif; ?>
    </div>
    <?php endforeach; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#galeria" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#galeria" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<?php endif; ?>
<p class="mt-3"><?php echo nl2br(htmlspecialchars($lugar['descripcion'])); ?></p>
<h3 class="mt-4">Comentarios</h3>
<?php foreach($comentarios as $c): ?>
<div class="mb-2 border p-2">
<strong><?php echo htmlspecialchars($c['nombre']); ?></strong>
<span class="text-muted small"><?php echo $c['fecha']; ?></span>
<p><?php echo htmlspecialchars($c['comentario']); ?></p>
</div>
<?php endforeach; ?>
<?php if(isset($_SESSION['id_usuario'])): ?>
<form method="post" class="mt-3">
 <div class="mb-3">
  <label class="form-label" for="comentario">Comentario</label>
  <textarea name="comentario" id="comentario" class="form-control" required></textarea>
 </div>
 <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php else: ?>
<p>Inicia sesión para comentar.</p>
<?php endif; ?>
</div>
<?php include 'php/footer.php'; ?>
