<?php

class Bienes {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bienes',function($tabla)
		{
			//identificacion del bien
			$tabla->string('idGrupo',5)->nullable(); //Representa el grupo al que pertenece el bien
			$tabla->string('idSubGrupo',5)->nullable(); //Representa el sub-grupo al que pertenece el bien
			$tabla->string('idTipo',5)->nullable(); //Representa el tipo de bien, en este caso un valor numerico
			$tabla->string('NumeroDeFactura',10);
			$tabla->string('Nombre',100)->nullable(); //Nombre comun del bien
			$tabla->string('Tipo',2); //representa el tipo de bien, en este caso por x(equipos),w(muebles),z(herramientas),y(vehiculos)
			$tabla->increments('id'); //Representa la parte numerica del codigo del bien x-00001
			$tabla->integer('centrocostos_id'); //Es la llave foranea con el ID de la tabla centro de costo

			$tabla->string('Largo',5)->nullable();
			$tabla->string('Ancho',5)->nullable();
			$tabla->string('Alto',5)->nullable();
			$tabla->string('UdeMedidas',5)->nullable();
			//caracteristicas del bien
			$tabla->string('Modelo',100)->nullable();
			$tabla->string('NumeroSerie',50);
			$tabla->string('AñoModelo',5)->nullable();
			$tabla->string('Marca',50)->nullable();

			//antecedentes contables
			$tabla->string('Folio',20)->nullable();
			$tabla->date('FechaComprobante')->nullable();
			$tabla->date('FechaCompra')->nullable();
			$tabla->string('VidaUtil',3)->nullable();
			$tabla->integer('NumeroDeUnidades')->nullable();
			$tabla->string('ValorUnitario',10)->nullable();
			$tabla->string('CuentaDeMayor',50)->nullable();
			$tabla->string('ValorTotal',20)->nullable();

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
		Schema::drop('bienes');
	}

}