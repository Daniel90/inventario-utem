<?php

class Centrocosto {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('centrocostos',function($tabla)
		{
			$tabla->increments('id');
			$tabla->string('encargado',50);
			$tabla->string('departamento',50);
			$tabla->string('sede',50);
			$tabla->string('telefono',20);
			
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
		Schema::drop('centrocostos');
	}

}