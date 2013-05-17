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
	
		<header>
			<h1>Foro</h1>
			<h2>Desarrollado con Laravel</h2>

			<p class="intro-text" style="margin-top: 45px;">
			</p>
		</header>

		<section id="login">
			<section id="errores">
				@if($errors->has())
                   {{ $errors->first('usuario'); }}
                   {{ $errors->first('password'); }}
				@endif
			</section>
          {{ Form::open('/registrarse')}}
              <p>{{ Form::label('usuario', 'Usuario') }}</p>
              <p>{{ Form::text('usuario', Input::old('usuario')) }}</p>
              <p>{{ Form::label('password', 'Password') }}</p>
              <p>{{ Form::password('password') }}</p>
              <p>{{ Form::submit('Registrarse') }}</p>

              {{ Form::close() }}
		</section>
		
	
</body>
</html>
