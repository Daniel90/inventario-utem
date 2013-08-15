<?php
	class Centrocostos extends Eloquent
	{
		public static $table = 'centrocostos';
		public function bienes()
		{
			return $this->has_many('Bien');
		}
	}
?>
