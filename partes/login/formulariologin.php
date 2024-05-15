      <link rel="stylesheet" href="../css/login.css">

      <div class="containerform" id="containerform">
      	<div class="form-containerform sign-up-containerform">

      		<form action="../partes/login/register.php" method="POST">
      			<h1>Crear cuenta</h1>
      			<span>usa tus datos para el registro</span>
      			<input type="text" placeholder="Nombre de usuario" name="username" required>
      			<input type="text" placeholder="Nombre" name="nombre" />
      			<input type="text" placeholder="Apellidos" name="apellidos" required>
      			<input type="email" placeholder="Email" name="correo" />
      			<input type="password" placeholder="Password" name="contrasena" />
      			<button>Sign Up</button>
      		</form>

      	</div>

      	<div class="form-containerform sign-in-containerform">
      		<form action="../partes/login/login.php" method="POST">

      			<h1>Logeate</h1>
      			<span>usa tus datos</span>
      			<input type="text" id="username" placeholder="Your UserName" name="username" required>

      			<input type="password" placeholder="Password" name="contrasena" required />
      			<a href="../pages/login/olvidarcontrasena.php">¿Olvidades tu contraseña?</a>
      			<button type="submit">Logeate</button>
      		</form>

      	</div>
      	<div class="overlay-containerform">
      		<div class="overlay">

      			<div class="overlay-panel overlay-left">
      				<h1 class="titleform">Bienvenido nuevo usuario</h1>
      				<p>Registrate y disfruta de nuestra gran y maravillosa cocina.</p>
      				<button class="ghost" id="signIn">Logeate</button>
      			</div>

      			<div class="overlay-panel overlay-right">
      				<h1 class="titleform">¡Bienvenido de nuevo!</h1>
      				<p>Si aun no te has registrado, puedes hacerlo todavia.</p>
      				<button class="ghost" id="signUp">Registrate</button>
      			</div>
      		</div>
      	</div>
      </div>


      <script>
      	const signUpButton = document.getElementById('signUp');
      	const signInButton = document.getElementById('signIn');
      	const container = document.getElementById('containerform');

      	signUpButton.addEventListener('click', () => {
      		container.classList.add("right-panel-active");
      	});

      	signInButton.addEventListener('click', () => {
      		container.classList.remove("right-panel-active");
      	});
      </script>