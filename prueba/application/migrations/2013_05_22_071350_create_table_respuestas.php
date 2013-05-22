<?php

class Create_Table_Respuestas {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('respuestas', function($tabla){
          $tabla->increments('id');
          $tabla->text('texto');
          $tabla->timestamps();
          $tabla->integer('tema_id');
          $tabla->integer('usuario_id');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('respuestas');
	}

}