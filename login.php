<?php
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
require_once 'php/config.php';
$error='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $stmt=$pdo->prepare('SELECT * FROM usuario WHERE email=? AND contraseña=?');
    $stmt->execute([$email,$password]);
    $user=$stmt->fetch();
    if($user){
        $_SESSION['id_usuario']=$user['id_usuario'];
        $_SESSION['rol']=$user['rol'];
        header('Location: index.php');
        exit;
    }else{
        $error='Credenciales incorrectas';
    }
}
include 'php/head.php';
include 'php/menu.php';
?>
<div class="container mt-5" style="max-width:400px;">
 <h2 class="mb-3">Iniciar Sesión</h2>
 <?php if($error): ?><div class="alert alert-danger"><?php echo $error; ?></div><?php endif; ?>
 <form method="post" id="loginForm">
   <div class="mb-3">
     <label for="email" class="form-label">Email</label>
     <input type="email" name="email" id="email" class="form-control" required>
   </div>
   <div class="mb-3">
     <label for="password" class="form-label">Contraseña</label>
     <input type="password" name="password" id="password" class="form-control" required>
   </div>
   <button type="submit" class="btn btn-primary w-100">Entrar</button>
   <p class="mt-2">¿No tienes cuenta? <a href="registro.php">Regístrate</a></p>
 </form>
</div>
<?php include 'php/footer.php'; ?>
