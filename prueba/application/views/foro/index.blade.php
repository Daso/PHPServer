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
			<h2>Desarrollado con Laravel</h2>
		</header>

		<section id="nuevotema">
			Form
		</section>
		<section id="temas">
			@if($temas)
			  @foreach($temas as $tema)
					 <section id="tema">
		            <p>{{$tema->tema}}</p> 
		            <span>Creado {{$tema->created_at}}</span>
				  </section>
		  @endforeach
			@else
			   <section class="tema">No hay temas</section>
			@endif
         
		</section>
		
	
</body>
</html>