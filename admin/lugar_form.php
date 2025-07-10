<?php
session_start();
require_once '../php/config.php';
if(!isset($_SESSION['rol']) || $_SESSION['rol']!='admin'){
    header('Location: ../index.php');
    exit;
}
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$nombre='';$descripcion='';$ubicacion='';$distancia='';
if($id){
    $stm=$pdo->prepare('SELECT * FROM lugar WHERE id_lugar=?');
    $stm->execute([$id]);
    $row=$stm->fetch();
    if($row){
        $nombre=$row['nombre'];
        $descripcion=$row['descripcion'];
        $ubicacion=$row['ubicacion'];
        $distancia=$row['distancia'];
    }
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $ubicacion=$_POST['ubicacion'];
    $distancia=$_POST['distancia'];
    if($id){
        $stm=$pdo->prepare('UPDATE lugar SET nombre=?,descripcion=?,ubicacion=?,distancia=? WHERE id_lugar=?');
        $stm->execute([$nombre,$descripcion,$ubicacion,$distancia,$id]);
    }else{
        $stm=$pdo->prepare('INSERT INTO lugar(nombre,descripcion,ubicacion,distancia) VALUES (?,?,?,?)');
        $stm->execute([$nombre,$descripcion,$ubicacion,$distancia]);
        $id=$pdo->lastInsertId();
    }

    // procesar fotos si se han enviado
    if(!empty($_FILES['fotos']['name'][0])){
        $dir = '../img/lugares/';
        if(!is_dir($dir)) mkdir($dir,0755,true);
        foreach($_FILES['fotos']['tmp_name'] as $k=>$tmp){
            if($_FILES['fotos']['error'][$k]===UPLOAD_ERR_OK){
                $ext = pathinfo($_FILES['fotos']['name'][$k], PATHINFO_EXTENSION);
                $nombreFoto = uniqid().".$ext";
                if(move_uploaded_file($tmp,$dir.$nombreFoto)){
                    $ruta = 'img/lugares/'.$nombreFoto;
                    $pdo->prepare('INSERT INTO lugar_foto(id_lugar,ruta_foto) VALUES (?,?)')->execute([$id,$ruta]);
                }
            }
        }
    }

    header('Location: lugares.php');
    exit;
}
include '../php/head.php';
include '../php/menu.php';
?>
<div class="container mt-4" style="max-width:600px;">
<h2><?php echo $id? 'Editar' : 'Nuevo'; ?> Lugar</h2>
<form method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label class="form-label" for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo htmlspecialchars($nombre); ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label" for="descripcion">Descripción</label>
    <textarea name="descripcion" id="descripcion" class="form-control" required><?php echo htmlspecialchars($descripcion); ?></textarea>
  </div>
  <div class="mb-3">
    <label class="form-label" for="ubicacion">Ubicación</label>
    <input type="text" name="ubicacion" id="ubicacion" class="form-control" value="<?php echo htmlspecialchars($ubicacion); ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label" for="distancia">Distancia (km)</label>
    <input type="number" step="0.01" name="distancia" id="distancia" class="form-control" value="<?php echo htmlspecialchars($distancia); ?>">
  </div>
  <?php if($id): ?>
  <div class="mb-3">
    <label class="form-label">Fotos existentes</label>
    <div class="d-flex flex-wrap gap-2">
      <?php
      $fotos=$pdo->prepare('SELECT * FROM lugar_foto WHERE id_lugar=?');
      $fotos->execute([$id]);
      foreach($fotos->fetchAll() as $f): ?>
        <div class="position-relative" style="width:100px;">
          <img src="../<?php echo $f['ruta_foto']; ?>" class="img-thumbnail" style="width:100px;height:80px;object-fit:cover;">
          <a href="delete_foto.php?id=<?php echo $f['id_foto']; ?>" class="btn-close position-absolute top-0 end-0"></a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <?php endif; ?>
  <div class="mb-3">
    <label class="form-label" for="fotos">Subir Fotos</label>
    <input type="file" name="fotos[]" id="fotos" class="form-control" multiple accept="image/*">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>
<?php include '../php/footer.php'; ?>
