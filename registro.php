<?php
session_start();
require_once 'php/config.php';
$mensaje='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $stmt=$pdo->prepare('INSERT INTO usuario(nombre,email,contraseña,rol) VALUES (?,?,?,"usuario")');
    try{
        $stmt->execute([$nombre,$email,$password]);
        $mensaje='Registro exitoso. Ahora puedes iniciar sesión.';
    }catch(PDOException $e){
        $mensaje='Error: '.$e->getMessage();
    }
}
include 'php/head.php';
include 'php/menu.php';
?>
<div class="container mt-5" style="max-width:400px;">
 <h2 class="mb-3">Registro</h2>
 <?php if($mensaje): ?><div class="alert alert-info"><?php echo $mensaje; ?></div><?php endif; ?>
 <form method="post" id="regForm">
   <div class="mb-3">
     <label for="nombre" class="form-label">Nombre</label>
     <input type="text" name="nombre" id="nombre" class="form-control" required>
   </div>
   <div class="mb-3">
     <label for="email" class="form-label">Email</label>
     <input type="email" name="email" id="email" class="form-control" required>
   </div>
   <div class="mb-3">
     <label for="password" class="form-label">Contraseña</label>
     <input type="password" name="password" id="password" class="form-control" required>
   </div>
   <button type="submit" class="btn btn-primary w-100">Registrar</button>
 </form>
</div>
<?php include 'php/footer.php'; ?>
