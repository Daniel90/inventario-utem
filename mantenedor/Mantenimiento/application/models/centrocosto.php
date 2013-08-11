<?php
	class Centrocosto extends Eloquent
	{
		public static $table = 'centrocostos';
		public function bienes()
		{
			return $this->has_many('Bien');
		}
	}
?>
