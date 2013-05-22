<?php

 class Usuario extends Eloquent{

 	public static $table="usuarios";

 	public function temas(){
 		return $this->has_many('Tema');

 		

 	}


 	public function respuestas(){
      return $this->has_many('Respuesta');

 	}
 }