<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel: A Framework For Web Artisans</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/normalize.css') }}
	{{ HTML::style('laravel/css/style.css') }}
</head>
<body>
	<div class="wrapper">
		<header>
			<h1>Foro</h1>
			<h2>Desarrollado con Laravel</h2>

			<p class="intro-text" style="margin-top: 45px;">
			</p>
		</header>
		<section id="login">
          <form action="/login" method="post">
          	@if(Session::has('errorLogin'))
          		<p>El usuario o contraseña no son válidos</p>

            @endif
            <input type="text" name="usuario" id="usuario" placeholder="Nombre de Usuario" />
            <br />
            <input type="password" name="pass" id="pass" placeholder="Contraseña" />
            
            <input type="submit" value="Entrar" />
          </form>
		</section>
		<section id="registrarse">
		  <a href="/registrarse" title="Registrarse">Registrarse</a>	
		</section>
	</div>
</body>
</html>
