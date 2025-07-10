<?php
include 'php/head.php';
include 'php/menu.php';
?>
<div class="container mt-4">
<h2>Contacto</h2>
<form id="contactForm" class="mt-3">
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" id="nombre" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="correo" class="form-label">Correo</label>
    <input type="email" id="correo" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="mensaje" class="form-label">Mensaje</label>
    <textarea id="mensaje" class="form-control" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
<?php include 'php/footer.php'; ?>
