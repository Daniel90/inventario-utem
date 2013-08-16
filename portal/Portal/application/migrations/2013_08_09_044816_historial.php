<?php

class Historial {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('historiales',function($tabla)
		{
			$tabla->increments('id');
			$tabla->integer('bienes_id');
			$tabla->string('Tipo',2);
			$tabla->integer('centrocostos_id');//llave foranea a centro de costos para dejar registro 
			$tabla->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('historiales');
	}

}