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
			<h2>Bienvenido {{$usuario->usuario}}</h2>
		</header>

		<section id="nuevotema">
	      <form action="/enviar-tema" method="post">
            <input type="text" id="titulo" name="titulo" placeholder="Título"><br />
            <input type="text" id="url" name="url"><br />
            <input type="hidden" id="usuario" name="usuario" value="{{$usuario->id}}"><br />
            <textarea id="texto" name="texto" placeholder="Texto"></textarea><br />
            <input type="submit">

	      </form>
		</section>
		<section id="temas">
			@if($temas)
			  @foreach($temas as $tema)
					 <section id="tema">
		            <p><a href="/foro/tema/{{$tema->url}}" title="{{$tema->tema}}"> {{$tema->tema}}</a></p> 
		            <span>Creado {{$tema->created_at}}</span>
				  </section>
		  @endforeach
			@else
			   <section class="tema">No hay temas</section>
			@endif
         
		</section>
		
	
</body>
</html>