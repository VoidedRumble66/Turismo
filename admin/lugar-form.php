<?php
// admin/lugar-form.php

require_once '../php/config.php';
session_start();

// Sólo permite acceso a admin
if (!isset($_SESSION['id_usuario']) || $_SESSION['rol'] !== 'admin') {
    header("Location: ../login.php");
    exit;
}

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $ubicacion = $_POST['ubicacion'];
    $distancia = $_POST['distancia']; // Opcional, puedes quitarlo si no usas ese campo

    // 1. Guardar el lugar
    $stmt = $pdo->prepare("INSERT INTO lugar (nombre, descripcion, ubicacion, distancia, activo) VALUES (?, ?, ?, ?, 1)");
    $stmt->execute([$nombre, $descripcion, $ubicacion, $distancia]);
    $id_lugar = $pdo->lastInsertId();

    // 2. Subir las fotos
    $totalFotos = count($_FILES['fotos']['name']);
    $rutaCarpeta = "../img/lugares/";
    $fotosCargadas = 0;

    for ($i = 0; $i < $totalFotos; $i++) {
        if ($_FILES['fotos']['error'][$i] === UPLOAD_ERR_OK) {
            $tmp_name = $_FILES['fotos']['tmp_name'][$i];
            $nombreArchivo = uniqid('lugar_', true) . "_" . basename($_FILES['fotos']['name'][$i]);
            $destino = $rutaCarpeta . $nombreArchivo;

            if (move_uploaded_file($tmp_name, $destino)) {
                // Guardar la ruta relativa en la BD
                $stmtFoto = $pdo->prepare("INSERT INTO lugar_foto (id_lugar, ruta_foto) VALUES (?, ?)");
                $stmtFoto->execute([$id_lugar, 'img/lugares/' . $nombreArchivo]);
                $fotosCargadas++;
            }
        }
    }

    if ($fotosCargadas > 0) {
        $success = "Lugar y fotos guardados correctamente.";
    } else {
        $error = "El lugar fue guardado, pero hubo un error al subir las fotos.";
    }
}
?>

<?php include '../php/head.php'; ?>
<?php include '../php/menu.php'; ?>

<div class="container mt-5" style="max-width:600px;">
    <h2>Agregar Lugar Turístico</h2>
    <?php if($error): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php elseif($success): ?>
        <div class="alert alert-success"><?php echo $success; ?></div>
    <?php endif; ?>
    <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del lugar</label>
            <input type="text" class="form-control" name="nombre" id="nombre" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" name="descripcion" id="descripcion" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="ubicacion" class="form-label">Ubicación</label>
            <input type="text" class="form-control" name="ubicacion" id="ubicacion" required>
        </div>
        <div class="mb-3">
            <label for="distancia" class="form-label">Distancia desde Ocosingo (km)</label>
            <input type="number" step="0.1" min="0" class="form-control" name="distancia" id="distancia">
        </div>
        <div class="mb-3">
            <label for="fotos" class="form-label">Fotos del lugar</label>
            <input type="file" class="form-control" name="fotos[]" id="fotos" accept="image/*" multiple required>
            <small class="text-muted">Puedes seleccionar varias fotos.</small>
        </div>
        <button type="submit" class="btn btn-success">Guardar Lugar</button>
    </form>
</div>

<?php include '../php/footer.php'; ?>
