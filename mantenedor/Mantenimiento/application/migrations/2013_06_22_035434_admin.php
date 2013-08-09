<?php

class Admin {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('administrador',function($tabla)
		{
			$tabla->increments('id');
			$tabla->string('usuario',50);
			$tabla->string('password',200);
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
		Schema::drop('administrador');
	}

}