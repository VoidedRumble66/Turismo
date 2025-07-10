<?php
// Asegúrate de iniciar sesión SOLO si no está iniciada (evita doble session_start)
if (session_status() !== PHP_SESSION_ACTIVE) session_start();

// Detecta en qué página estás para resaltar la pestaña activa
$actual = basename($_SERVER['PHP_SELF']);
?>
<header>
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
  <div class="container">
    <!-- Logotipo y nombre del sitio -->
    <a class="navbar-brand fw-bold" href="index.php">Explora Ocosingo</a>
    <!-- Botón para menú colapsable en móvil -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Elementos del menú -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <?php if (isset($_SESSION['id_usuario'])): ?>
          <!-- Solo visibles si hay sesión activa -->
          <li class="nav-item">
            <a class="nav-link <?php if($actual=='index.php') echo 'active'; ?>" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($actual=='lugares.php') echo 'active'; ?>" href="lugares.php">Lugares</a>
          </li>
        <?php endif; ?>

        <!-- Siempre visibles -->
        <li class="nav-item">
          <a class="nav-link <?php if($actual=='quienes_somos.php') echo 'active'; ?>" href="quienes_somos.php">Quiénes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($actual=='contacto.php') echo 'active'; ?>" href="contacto.php">Contacto</a>
        </li>

        <?php if (isset($_SESSION['id_usuario'])): ?>
          <!-- Visible solo para admin -->
          <?php if(isset($_SESSION['rol']) && $_SESSION['rol']=='admin'): ?>
          <li class="nav-item">
            <a class="nav-link <?php if($actual=='admin/lugares.php' || $actual=='admin/lugar-form.php') echo 'active'; ?>" href="admin/lugares.php">Admin</a>
          </li>
          <?php endif; ?>
          <!-- Opción para cerrar sesión -->
          <li class="nav-item">
            <a class="nav-link text-danger" href="logout.php">Salir</a>
          </li>
        <?php else: ?>
          <!-- Solo si NO hay sesión activa -->
          <li class="nav-item">
            <a class="nav-link <?php if($actual=='login.php') echo 'active'; ?>" href="login.php">Login</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
</header>
