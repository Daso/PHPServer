<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Foro en Laravel</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/normalize.css') }}
	{{ HTML::style('laravel/css/style.css') }}
</head>
<body>
	
		<header id="inicio">
			<h1>Foro</h1>


			<h2>Bienvenido <a href="/perfil/{{$usuario->usuario}}" title="{{$usuario->usuario}}">{{$usuario->usuario}}</a></h2>
		</header>
        @if($tema)
		
		<section id="tema">
			<h3>{{$tema->tema}}</h3>
			<p>{{$tema->texto}}</p>
			<span>Creado por {{$tema->usuario->usuario}}</span>
         
		</section>
		<section id="respuestas">
			@if($tema->respuestas)
			 @foreach($tema->respuestas as $respuesta)
		        <section id="respuesta">
					{{$respuesta->texto}}<br/>
					
					Escrito por {{$respuesta->usuario->usuario}}<br/><br/>
		         
				</section>
		     @endforeach
			@else
				No existen respuestas

			@endif
		</section>
		<section id="nuevarespuesta">
	      <form action="/enviar-respuesta" method="post">
	      	<input type="hidden" id="usuario" name="usuario" value="{{$usuario->id}}"><br />
	      	<input type="hidden" id="tema" name="tema" value="{{$tema->id}}"><br />
            <textarea id="texto" name="texto" placeholder="Texto"></textarea><br />
            <input type="submit" value="Enviar">

	      </form>
		</section>


		@else 
				<section id="tema">
			
			<p>No Existe el tema</p>
			
         
		</section>
		@endif 
	   
</body>
</html>