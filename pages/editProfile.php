<div class="form-containerform sign-up-containerform">
    <form action="../partes/login/register.php" method="POST">
        <h1>Perfil de <?= $_SESSION['username'];?></h1>
        <span>Edita tu perfil</span>
        <input type="text" placeholder="Nombre de usuario" name="username" required="">
        <input type="text" placeholder="Nombre" name="nombre">
        <input type="text" placeholder="Apellidos" name="apellidos" required="">
        <input type="email" placeholder="Email" name="correo">
        <input type="password" placeholder="Password" name="contrasena">
        <button>Sign Up</button>
    </form>
</div>