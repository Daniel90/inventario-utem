<?php

class Bajabien {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bajabienes',function($tabla)
		{
			$tabla->increments('id'); 
			$tabla->integer('centrocostos_id'); //llave foranea a centro de costo se ingresa relacionando
			$tabla->integer('bienes_id');  //llave foranea a bienes para poder dar de baja el bien se ingresa relacionado
			$tabla->string('idGrupo',5)->nullable(); //misma forma
			$tabla->string('idSubGrupo',5)->nullable();  //misma forma
			$tabla->string('idTipo',5)->nullable();  //misma forma
			$tabla->string('Tipo',2); //debe ser w,x,y,z  se ingresa relacionando
			$tabla->string('Nombre',100)->nullable();  //misma forma

			$tabla->string('Modelo',100)->nullable();  //misma forma
			$tabla->string('Marca',50)->nullable();   //misma forma
			$tabla->string('NumeroSerie',50);    //misma forma

			$tabla->string('NumeroDocumento',50)->nullable();//desde aqui se ingresa por el formulario
			$tabla->date('FechaDocumento')->nullable();
			$tabla->string('DecretoBaja',50)->nulable;
			$tabla->date('FechaDecreto')->nullable();
			$tabla->string('TipoDocumento',10);
			$tabla->string('MotivoBaja',100);

			$tabla->string('ValorActualBien',8)->nullable();
			$tabla->string('CuentaDeMayor',50)->nullable();//unica excepcion
			$tabla->string('Depreciacion',8)->nullable(); 
			$tabla->string('ValordeBaja',8)->nullable();
			$tabla->string('Observaciones',300)->nullable();

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
		Schema::drop('bajabienes');
	}

}