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


			<h2>Perfil {{$perfil->usuario}}</h2>
		</header>
       <section id="perfil">
       	@if($perfil->usuario == $usuario->usuario)
       	 Opciones en caso de que visites tu propio perfil
       	@else
       	Solo se puede ver
       	@endif
       	 <h3>Ultimos posts</h3>
       	 @if($temas)
       	 @foreach($temas as $tema)
       	 <section id="tema">
		            <p><a href="/foro/tema/{{$tema->url}}" title="{{$tema->tema}}"> {{$tema->tema}}</a></p> 
		            <span>Creado {{$tema->created_at}}</span>
				  </section>
       	 @endforeach
       	 @else
       	   <section class="tema">
       	   	  {{$perfil->usuario}} no ha creado temas
       	   	</section>
       	 @endif
       	 </section>
	   
</body>
</html>